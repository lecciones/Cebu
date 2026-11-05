<?php
/**
 * Smart Tourist Navigator - Floating AI Chatbot
 * Include this file from index.php:
 * require_once __DIR__ . '/ai/chatbot.php';
 */
?>
<link rel="stylesheet" href="/Cebu/ai/chatbot.css">

<div class="stn-chatbot" id="stnChatbot"
     data-chat-endpoint="/Cebu/ai/chat.php"
     aria-label="Smart Tourist Navigator AI assistant">

    <button class="stn-chatbot__launcher" id="stnChatLauncher"
            type="button" aria-label="Open Cebu Travel Assistant"
            aria-controls="stnChatPanel" aria-expanded="false">
        <span class="stn-chatbot__launcher-icon" aria-hidden="true">✦</span>
        <span class="stn-chatbot__launcher-label">Ask Cebu AI</span>
    </button>

    <section class="stn-chatbot__panel" id="stnChatPanel"
             role="dialog" aria-modal="false"
             aria-labelledby="stnChatTitle" hidden>
        <header class="stn-chatbot__header">
            <div class="stn-chatbot__brand-mark" aria-hidden="true">✦</div>
            <div class="stn-chatbot__heading">
                <h2 id="stnChatTitle">Cebu Travel Assistant</h2>
                <p><span class="stn-chatbot__online-dot"></span> Online · Powered by AI</p>
            </div>
            <div class="stn-chatbot__header-actions">
                <button class="stn-chatbot__icon-button" id="stnChatMinimize"
                        type="button" aria-label="Minimize chat">−</button>
                <button class="stn-chatbot__icon-button" id="stnChatClose"
                        type="button" aria-label="Close chat">×</button>
            </div>
        </header>

        <div class="stn-chatbot__messages" id="stnChatMessages"
             role="log" aria-live="polite" aria-relevant="additions">
            <div class="stn-chatbot__welcome">
                <span class="stn-chatbot__welcome-icon" aria-hidden="true">✦</span>
                <h3>Explore Cebu with confidence.</h3>
                <p>Ask me about destinations, local experiences, and travel information around Cebu.</p>
                <div class="stn-chatbot__suggestions">
                    <button type="button" class="stn-chatbot__suggestion">Recommend places to visit in Cebu</button>
                    <button type="button" class="stn-chatbot__suggestion">Where can I find waterfalls?</button>
                    <button type="button" class="stn-chatbot__suggestion">Suggest a 3-day Cebu itinerary</button>
                    <button type="button" class="stn-chatbot__suggestion">How can I get around Cebu?</button>
                </div>
            </div>
        </div>

        <div class="stn-chatbot__typing" id="stnChatTyping" hidden>
            <span></span><span></span><span></span>
            <small>Cebu AI is thinking...</small>
        </div>

        <form class="stn-chatbot__composer" id="stnChatForm">
            <label class="stn-chatbot__sr-only" for="stnChatInput">Message Cebu Travel Assistant</label>
            <textarea id="stnChatInput" rows="1" maxlength="1200"
                      placeholder="Ask about travelling in Cebu..."
                      autocomplete="off"></textarea>
            <button class="stn-chatbot__send" id="stnChatSend" type="submit"
                    aria-label="Send message">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 11.5 21 3l-6.5 18-3.2-7.3L3 11.5Zm8.3 2.2L21 3"/>
                </svg>
            </button>
        </form>
        <p class="stn-chatbot__disclaimer">AI responses may be incomplete. Please verify important travel details.</p>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.2.6/dist/purify.min.js"></script>
<script src="/Cebu/ai/chatbot.js" defer></script>
