<button class="open-button" onclick="openForm()" style="z-index: 1000" id="btn-chat">Tư vấn trực tuyến</button>

<div class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
        <div class="header-chat">
            <div class="text-header">
                <span>Tư vấn trực tuyến</span><i class="fa fa-times btn-close-times" onclick="closeForm()"></i>
            </div>
        </div>
        <div class="body-chat-v1">
            <div class="body-chat-v2">
                <div class="body-chat-v3">
                    <div class="body-chat-v4">
                        <label for="msg"><b>Tên</b></label>
                        <input type="text" name="name" required>
                        <label for="msg"><b>Email</b></label>
                        <input type="text" name="email" required>
                        <label for="msg"><b>Tin nhắn</b></label>
                        <textarea placeholder="Nhập tin nhắn.." name="msg" rows="2" required></textarea>

                        <button type="submit" class="btn">Gửi</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("btn-chat").style.display = "none";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("btn-chat").style.display = "block";
    }
</script>
