<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groq AI Connection Test</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 750px;
            margin: 40px auto;
            padding: 20px;
            background: #f4f7f9;
        }

        h1 {
            color: #0077B6;
        }

        #chatbox {
            background: white;
            padding: 20px;
            min-height: 250px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .message {
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            line-height: 1.5;
        }

        .user {
            background: #e0f2fe;
        }

        .ai {
            background: #e8f5e9;
        }

        .error {
            background: #ffebee;
            color: #b71c1c;
        }

        .input-area {
            display: flex;
            gap: 10px;
        }

        input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            padding: 12px 20px;
            border: none;
            background: #0077B6;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }

        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <h1>Smart Tourist Navigator</h1>
    <p>Groq AI Connection Test</p>

    <div id="chatbox">
        <div class="message ai">
            Hello! Ask me anything about Cebu destinations.
        </div>
    </div>

    <div class="input-area">

        <input
            type="text"
            id="message"
            placeholder="Ask about Kawasan Falls..."
        >

        <button id="sendButton" onclick="sendMessage()">
            Send
        </button>

    </div>

    <script>

        async function sendMessage() {

            const input = document.getElementById("message");
            const button = document.getElementById("sendButton");
            const chatbox = document.getElementById("chatbox");

            const message = input.value.trim();

            if (!message) {
                return;
            }

            chatbox.innerHTML += `
                <div class="message user">
                    <strong>You:</strong> ${escapeHTML(message)}
                </div>
            `;

            input.value = "";
            button.disabled = true;

            const loading = document.createElement("div");
            loading.className = "message ai";
            loading.textContent = "AI is thinking...";
            chatbox.appendChild(loading);

            try {

                const response = await fetch("chat.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        message: message
                    })
                });

               const rawResponse = await response.text();

console.log("RAW PHP RESPONSE:", rawResponse);

let data;

try {
    data = JSON.parse(rawResponse);
} catch (error) {
    throw new Error(
        "Invalid PHP response: " + rawResponse.substring(0, 500)
    );
}
                loading.remove();

                if (!response.ok || !data.success) {
                    throw new Error(data.error || "Something went wrong.");
                }

                const reply = document.createElement("div");
                reply.className = "message ai";

                const title = document.createElement("strong");
                title.textContent = "AI Assistant: ";

                const text = document.createElement("span");
                text.textContent = data.reply;

                reply.appendChild(title);
                reply.appendChild(text);

                chatbox.appendChild(reply);

            } catch (error) {

                loading.remove();

                const errorMessage = document.createElement("div");
                errorMessage.className = "message error";
                errorMessage.textContent = "Error: " + error.message;

                chatbox.appendChild(errorMessage);

            } finally {

                button.disabled = false;
                input.focus();
                chatbox.scrollTop = chatbox.scrollHeight;

            }
        }

        function escapeHTML(text) {
            const element = document.createElement("div");
            element.textContent = text;
            return element.innerHTML;
        }

        document.getElementById("message").addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });

    </script>

</body>
</html>