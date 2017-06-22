<?php
define('token', '330737607:AAEErMH39GbR5GB-dNmQu23bExh0vO1-Tc0');
include 'source.php';
$temp="";
if($text == "/start"){
    send($cid, "Вас приветствует тестовый бот!");
} else if($text == 'c' || $text == 'C'){
    send($cid, "Будет солнечно и тепло!");
   }
   
   
?>
<!DOCTYPE HTML PUBLIC ".//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta httpp-equiv="Content-Type" content="text/html"; charset="utf-8">
    <script type="text/javascript" src="jquery/jquery.min.js"> </script>
    <title>Отправка файла на сервер</title>
    <style>
        body{
            background: #805c89;
            width:100%;
        }
        form{
            width:300px;
            height:600px;
            background: #9fb868;
            color: #300d32;
            margin:auto;
            position:relative;
        }
        .top{
            width:300px;
            height:500px;
            position:absolute;
            margin:auto;
            top:0;
            border:1px solid grey;
            overflow-y:scroll;
            float:left;
        }
        .middle{float:right;margin-right:50px;}

        .bottom{
            position:absolute;
            height:100px;
            bottom:0;
            margin:auto;
        }
        .text{
            background:#ffffff;
        }
    </style>
</head>
<body>
<form action ="https://api.telegram.org/bot330737607:AAEErMH39GbR5GB-dNmQu23bExh0vO1-Tc0/sendmessage" enctype="text/form-data" method="post">
    <!--<p><b>ID пользователя:</b>-->
    <div class="top">
        <input class='chat_id' type="hidden" name="chat_id" value="395084859">
    </div>
    <div class="middle">
    </div>
    <div class="bottom">
        <p><b>Напишите ваше сообщение</b>
            <input class='text' type="text" name="text"></p>
        <p><input class="submit" type="submit" value="Отправить"></p>
    </div>
</form>

<script>
    $('.submit').click(function func(e) {
        e.preventDefault();
        if ($('.text').val()!=""){
            $.ajax({
                url: 'https://api.telegram.org/bot330737607:AAEErMH39GbR5GB-dNmQu23bExh0vO1-Tc0/sendmessage',
                type: 'POST',
                data: {chat_id: $('.chat_id').val(), text: $('.text').val()},
                success: function (answer) {
                    console.log(answer);
                    $('.top').html($('.top').html() + '<br>' + answer.result.text);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                }
            });
        }
    });
</script>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            telegram: "RedAperBot", // Telegram bot username
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Здравствуйте! Отправьте нам сообщение через любой из мессенджеров.", // Text of greeting message
            call_to_action: "Напишите нам", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>
</html>