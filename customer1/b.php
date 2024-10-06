<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <style>
    body {
        background-color: #eee
    }

    .chat-btn {
        position: absolute;
        right: 14px;
        bottom: 10px;
        cursor: pointer
    }

    .chat-btn .close {
        display: none
    }

    .chat-btn i {
        transition: all 0.9s ease
    }

    #check:checked~.chat-btn i {
        display: block;
        pointer-events: auto;
        transform: rotate(180deg)
    }

    #check:checked~.chat-btn .comment {
        display: none
    }

    .chat-btn i {
        font-size: 22px;
        color: #fff !important
    }

    .chat-btn {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        background-color: blue;
        color: #fff;
        font-size: 22px;
        border: none
    }

    .wrapper {
        margin-left: 20px;
        bottom: 120px;
        width: 100%;
        background-color: #fff;
        border-radius: 5px;
        opacity: 0;
        transition: all 0.4s
    }

    #check:checked~.wrapper {
        opacity: 1
    }

    #check {
        display: none !important
    }
    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"></i>
        <i class="fa fa-close close"></i> </label>
    <div class="wrapper">
        <!-- <div class="page-content page-container" id="page-content"> -->
        <!-- <div class="padding"> -->
        <!-- <div class="row container  justify-content-center"> -->
        <!-- <div class="col-md-6"> -->
        <div class="card" style="position: fixed;">
            <div class="card-header">
                <h4 class="card-title"><strong>Chat</strong></h4> <a class="btn btn-xs btn-secondary" href="#"
                    data-abc="true">Let's Chat App</a>
            </div>
            <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                style="overflow-y: scroll !important; height:400px !important;">
                <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                    <div class="media-body">
                        <p>Hi</p>
                        <p>How are you ...???</p>
                        <p>What are you doing tomorrow?<br> Can we come up a bar?</p>
                        <p class="meta"><time datetime="2018">23:58</time></p>
                    </div>
                </div>
                <div class="media media-meta-day">Today</div>
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>Hiii, I'm good.</p>
                        <p>How are you doing?</p>
                        <p>Long time no see! Tomorrow office. will be free on sunday.</p>
                        <p class="meta"><time datetime="2018">00:06</time></p>
                    </div>
                </div>
                <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                    <div class="media-body">
                        <p>Okay</p>
                        <p>We will go on sunday? </p>
                        <p class="meta"><time datetime="2018">00:07</time></p>
                    </div>
                </div>
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>That's awesome!</p>
                        <p>I will meet you Sandon Square sharp at 10 AM</p>
                        <p>Is that okay?</p>
                        <p class="meta"><time datetime="2018">00:09</time></p>
                    </div>
                </div>
                <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                    <div class="media-body">
                        <p>Okay i will meet you on Sandon Square </p>
                        <p class="meta"><time datetime="2018">00:10</time></p>
                    </div>
                </div>
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>Do you have pictures of Matley Marriage?</p>
                        <p class="meta"><time datetime="2018">00:10</time></p>
                    </div>
                </div>
                <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                    <div class="media-body">
                        <p>Sorry I don't have. i changed my phone.</p>
                        <p class="meta"><time datetime="2018">00:12</time></p>
                    </div>
                </div>
                <div class="media media-chat media-chat-reverse">
                    <div class="media-body">
                        <p>Okay then see you on sunday!!</p>
                        <p class="meta"><time datetime="2018">00:12</time></p>
                    </div>
                </div>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                </div>
            </div>
            <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs"
                    src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                <input class="publisher-input" type="text" placeholder="Write something"> <span
                    class="publisher-btn file-group"> <i class="fa fa-paperclip file-browser"></i>
                    <input type="file"> </span> <a class="publisher-btn" href="#" data-abc="true"><i
                        class="fa fa-smile"></i></a> <a class="publisher-btn text-info" href="#" data-abc="true"><i
                        class="fa fa-paper-plane"></i></a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>