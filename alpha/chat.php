<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="chat.css">
</head>
<body>
   
<div class="chat-global">

    <div class="nav-top">
        <div class="location">
            <img src="assets/left-chevron.svg">
            <p>Back</p>
        </div>

        <div class="utilisateur">
            <p>Coding</p>
            <p>Active Now</p>
        </div>

        <div class="logos-call">
            <img src="assets/phone.svg">
            <img src="assets/video-camera.svg">
        </div>
    </div>

    <div class="conversation">
        <div class="talk left">
            <img src="assets/avatar2.jpg">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="talk right">
            <p>Lorem ipsum dolor sit amet.</p>
            <img src="assets/avatar1.jpg">
        </div>
        <div class="talk left">
            <img src="assets/avatar2.jpg">
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="talk right">
            <p>Lorem ipsum dolor sit amet.</p>
            <img src="assets/avatar1.jpg">
        </div>
    </div>


    <form class="chat-form">

        <div class="container-inputs-stuffs">

            <div class="files-logo-cont">
                <img src="assets/paperclip.svg">
            </div>

            <div class="group-inp">
                <textarea placeholder="Enter your message here" minlength="1" maxlength="1500"></textarea>
                <img src="assets/smile.svg">
            </div>


            <button class="submit-msg-btn">
                <img src="assets/send.svg">
            </button>
        </div>

    </form>
</div>


</body>
</html>