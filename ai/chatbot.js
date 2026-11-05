(() => {
    "use strict";

    const root = document.getElementById("stnChatbot");
    if (!root) return;

    const launcher = document.getElementById("stnChatLauncher");
    const panel = document.getElementById("stnChatPanel");
    const closeButton = document.getElementById("stnChatClose");
    const minimizeButton = document.getElementById("stnChatMinimize");
    const messages = document.getElementById("stnChatMessages");
    const form = document.getElementById("stnChatForm");
    const input = document.getElementById("stnChatInput");
    const sendButton = document.getElementById("stnChatSend");
    const typing = document.getElementById("stnChatTyping");
    const endpoint = root.dataset.chatEndpoint;

    let isSending = false;

    function openChat() {
        panel.hidden = false;
        launcher.setAttribute("aria-expanded", "true");
        input.focus();
    }

    function closeChat() {
        panel.hidden = true;
        launcher.setAttribute("aria-expanded", "false");
        launcher.focus();
    }

    launcher.addEventListener("click", () => {
        if (panel.hidden) openChat();
        else closeChat();
    });
    closeButton.addEventListener("click", closeChat);
    minimizeButton.addEventListener("click", closeChat);

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !panel.hidden) closeChat();
    });

    function scrollToBottom() {
        messages.scrollTop = messages.scrollHeight;
    }

    function removeWelcome() {
        const welcome = messages.querySelector(".stn-chatbot__welcome");
        if (welcome) welcome.remove();
    }

    function addUserMessage(text) {
        removeWelcome();
        const row = document.createElement("div");
        row.className = "stn-chatbot__message stn-chatbot__message--user";
        const bubble = document.createElement("div");
        bubble.className = "stn-chatbot__bubble";
        bubble.textContent = text;
        row.appendChild(bubble);
        messages.appendChild(row);
        scrollToBottom();
    }

    function addAssistantMessage(markdown) {
        const row = document.createElement("div");
        row.className = "stn-chatbot__message stn-chatbot__message--assistant";

        const avatar = document.createElement("span");
        avatar.className = "stn-chatbot__avatar";
        avatar.textContent = "✦";
        avatar.setAttribute("aria-hidden", "true");

        const bubble = document.createElement("div");
        bubble.className = "stn-chatbot__bubble";

        // Render Markdown, then sanitize the generated HTML before inserting it.
        if (window.marked && window.DOMPurify) {
            const rendered = window.marked.parse(String(markdown || ""), {
                breaks: true,
                gfm: true
            });
            bubble.innerHTML = window.DOMPurify.sanitize(rendered, {
                USE_PROFILES: { html: true }
            });
            bubble.querySelectorAll("a").forEach((link) => {
                link.setAttribute("target", "_blank");
                link.setAttribute("rel", "noopener noreferrer");
            });
        } else {
            // Safe fallback: display plain text if CDN libraries are unavailable.
            bubble.textContent = String(markdown || "");
        }

        row.append(avatar, bubble);
        messages.appendChild(row);
        scrollToBottom();
    }

    function setTyping(show) {
        typing.hidden = !show;
        if (show) scrollToBottom();
    }

    async function sendMessage(rawMessage) {
        const message = rawMessage.trim();
        if (!message || isSending) return;

        isSending = true;
        sendButton.disabled = true;
        input.disabled = true;
        addUserMessage(message);
        input.value = "";
        input.style.height = "auto";
        setTyping(true);

        try {
            const response = await fetch(endpoint, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ message })
            });

            let data;
            try {
                data = await response.json();
            } catch {
                throw new Error("The server returned an unreadable response. Please check the PHP chatbot endpoint.");
            }

            if (!response.ok || !data.success) {
                throw new Error(data.error || data.message || "The assistant could not answer right now.");
            }

            if (typeof data.reply !== "string" || !data.reply.trim()) {
                throw new Error("The assistant returned an empty reply. Please try again.");
            }

            addAssistantMessage(data.reply);
        } catch (error) {
            addAssistantMessage(
                "Sorry, I couldn't connect to the travel assistant. " +
                (error.message || "Please try again in a moment.")
            );
        } finally {
            setTyping(false);
            isSending = false;
            sendButton.disabled = false;
            input.disabled = false;
            input.focus();
        }
    }

    form.addEventListener("submit", (event) => {
        event.preventDefault();
        sendMessage(input.value);
    });

    input.addEventListener("input", () => {
        input.style.height = "auto";
        input.style.height = Math.min(input.scrollHeight, 100) + "px";
    });

    input.addEventListener("keydown", (event) => {
        if (event.key === "Enter" && !event.shiftKey) {
            event.preventDefault();
            form.requestSubmit();
        }
    });

    messages.addEventListener("click", (event) => {
        const suggestion = event.target.closest(".stn-chatbot__suggestion");
        if (!suggestion) return;
        openChat();
        sendMessage(suggestion.textContent);
    });
})();
