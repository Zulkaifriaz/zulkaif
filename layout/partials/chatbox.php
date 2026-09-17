<div class="ready-chatting-option tmp-ready-chat">
    <input type="checkbox" id="click">
    <label for="click">
        <i class="fab fa-whatsapp"></i>
        <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
        <div class="head-text">
            Let's chat with me? - Online
        </div>
        <div class="chat-box">            
    <form class="tmp-dynamic-form" id="whatsappForm">
        
        <div class="field textarea">
            <textarea class="input-field" name="message" required>Hi, I would like to know more about your services. Are you available?</textarea>
        </div>

        <div class="field-1 mt--20">
            <button type="submit" class="tmp-btn btn-border tmp-modern-button">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Send Message</span>
                    <span class="btn-hack"></span>
                    <img src="assets/images/button/btg-bg.svg" alt="" class="btn-bg">
                    <img src="assets/images/button/btg-bg-2.svg" alt="" class="btn-bg-hover">
                </span>
            </button>
        </div>

    </form>
</div>

<script>
document.getElementById("whatsappForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const message = this.querySelector('textarea[name="message"]').value;

    const phoneNumber = "923026373218"; // Your WhatsApp number

    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

    window.open(whatsappURL, "_blank");
});
</script>
    </div>
</div>
