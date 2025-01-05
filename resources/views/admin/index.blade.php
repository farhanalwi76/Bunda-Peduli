<x-layout>
    <x-slot name="main_title">
        Dashboard Bunda Peduli x Flaminggo 
    </x-slot>
    <x-slot name="header_name">
        Selamat Datang di Web Kami
    </x-slot>
    <x-slot name="subheader_name">
       
    </x-slot>
    <x-slot name="subsubheader_name">
        Bunda Peduli
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
        <div class="container mt-4">
            <h3 class="mb-3">Payment Section</h3>
            <form class="card p-4 shadow-sm">
                <div class="mb-3">
                    <label for="payment-method" class="form-label">Payment Method</label>
                    <select id="payment-method" class="form-select" required>
                        <option value="" disabled selected>Select Payment Method</option>
                        <option value="card">Credit/Debit Card</option>
                        <option value="bank">Bank Transfer</option>
                        <option value="qris">QRIS</option>
                    </select>
                </div>
                <div id="card-details" class="payment-details">
                    <div class="mb-3">
                        <label for="card-number" class="form-label">Card Number</label>
                        <input type="text" id="card-number" class="form-control" placeholder="Enter your card number" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiry-date" class="form-label">Expiry Date</label>
                        <input type="text" id="expiry-date" class="form-control" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" id="cvv" class="form-control" placeholder="Enter CVV" required>
                    </div>
                </div>
                <div id="qris-details" class="payment-details" style="display: none;">
                    <label class="form-label">Scan the QR Code below to pay with QRIS:</label>
                    <div class="d-flex justify-content-center">
                        <img src="/admin/src/images/qiris.jpg" alt="QRIS QR Code" class="img-fluid" width="200" height="200">
                    </div>
                    
                </div>
                <div id="bank-details" class="payment-details" style="display: none;">
                    <label class="form-label">Bank Transfer Details:</label>
                    <ul>
                        <li>Bank: Bank BTN</li>
                        <li>Account Number: 4801610035607</li>
                        <li>Account Name: Bunda Peduli</li>
                    </ul>
                </div>
                <button type="submit" class="btn w-100 mt-3" style="background-color: #EBA199; color: white; border-color: #EBA199;">Pay Now</button>
            </form>

            <h3 class="mt-5">Live Chat</h3>
            <div class="live-chat" onclick="toggleChatBox()">
                💬
            </div>
            <div class="chat-box" id="chatBox">
                <div class="chat-header">
                    Live Chat
                    <button onclick="toggleChatBox()">&times;</button>
                </div>
                <div class="chat-messages" id="chatMessages">
                    <!-- Messages will appear here -->
                </div>
                <div class="chat-input">
                    <input type="text" id="chatInput" placeholder="Type a message">
                    <button onclick="sendMessage()">Send</button>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('payment-method').addEventListener('change', function () {
            const method = this.value;
            const cardDetails = document.getElementById('card-details');
            const qrisDetails = document.getElementById('qris-details');
            const bankDetails = document.getElementById('bank-details');

            cardDetails.style.display = method === 'card' ? 'block' : 'none';
            qrisDetails.style.display = method === 'qris' ? 'block' : 'none';
            bankDetails.style.display = method === 'bank' ? 'block' : 'none';
        });


    function toggleChatBox() {
        const chatBox = document.getElementById('chatBox');
        chatBox.style.display = chatBox.style.display === 'flex' ? 'none' : 'flex';
    }

    function sendMessage() {
        const input = document.getElementById('chatInput');
        const messages = document.getElementById('chatMessages');
        if (input.value.trim() !== '') {
            // Add user message
            const userMessage = document.createElement('div');
            userMessage.className = 'chat-message user';
            userMessage.textContent = input.value;
            messages.appendChild(userMessage);

            // Simulate admin reply
            setTimeout(() => {
                const adminMessage = document.createElement('div');
                adminMessage.className = 'chat-message admin';
                adminMessage.textContent = 'Adit: ' + input.value;
                messages.appendChild(adminMessage);
                messages.scrollTop = messages.scrollHeight;
            }, 1000);

            // Clear input field
            input.value = '';
            messages.scrollTop = messages.scrollHeight;
        }
    }
</script>