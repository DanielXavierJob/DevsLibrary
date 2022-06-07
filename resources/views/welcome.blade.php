<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dev's Library</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Fira Code' rel='stylesheet'>
    <link rel="icon" href="{{ asset('static/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('static/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('static/css/prism.css') }}">
</head>

<body>
    <style>
        .owl-carousel.owl-loaded {
            display: grid !important;
        }

        .owl-stage-outer {
            height: max-content !important;
        }

        #mCSB_1 {
            max-height: max-content !important;
        }

        .firacode {
            font-family: 'Fira Code';
            font-size: 22px;
        }

        .firacode.center {

            text-align: center;
        }



        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #680a83;
        }

        .container__elements {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg {
            width: 450px;
            height: 388px;
            background-image: linear-gradient(to bottom, #762e77, #046fb7);
            -webkit-mask-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3522775/HelloWorldMainBGBlack.svg);
            mask-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3522775/HelloWorldMainBGBlack.svg);
            mask-repeat: no-repeat;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .bg__circles-items {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg__circles-items__circle {
            position: absolute;
            border-radius: 50%;
            background: #343576;
        }

        .circle1 {
            width: 350px;
            height: 350px;
            opacity: 0.3;
        }

        .circle2 {
            width: 330px;
            height: 330px;
            opacity: 0.5;
        }

        .circle3 {
            width: 300px;
            height: 300px;
            opacity: 0.8;
        }

        .sun,
        .venus {
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .sun {
            top: -15px;
            left: 25px;
            background: #df981c;
            border: 5px solid #fcc837;
        }

        .venus {
            right: 40px;
            bottom: -20px;
            background: #e64791;
            border: 5px solid #fe6ac5;
        }

        .earth {
            cursor: pointer;
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: #45c6f0;
            border: 8px solid #76ecfc;
            overflow: hidden;
        }

        .earth__text {
            color: white;
            font-size: 50px;
            z-index: 2;
        }

        .earth__continent-left,
        .earth__continent-right,
        .earth__continent-bottom {
            background-color: #3edfd9;
            border-radius: 50%;
            position: absolute;
        }

        .earth__continent-left {
            width: 100px;
            height: 175px;
            left: -45px;
            transform: rotate(-20deg);
            top: 70px;
        }

        .earth__continent-right {
            width: 150px;
            height: 200px;
            transform: rotate(70deg);
            right: -70px;
            top: 0px;
        }

        .earth__continent-bottom {
            width: 100px;
            height: 100px;
            right: 15px;
            bottom: -65px;
        }

        .cloud {
            background-color: white;
            opacity: 0.5;
            position: absolute;
        }

        .cloud1,
        .cloud2,
        .cloud3,
        .cloud4,
        .cloud5,
        .cloud6,
        .cloud7 {
            border-radius: 40px;
        }

        .cloud1 {
            width: 100px;
            height: 50px;
            bottom: 120px;
            left: 90px;
        }

        .cloud2 {
            width: 80px;
            height: 25px;
            bottom: 80px;
            left: 125px;
        }

        .cloud3 {
            width: 35px;
            height: 25px;
            bottom: 80px;
            left: 220px;
        }

        .cloud4 {
            width: 170px;
            height: 35px;
            top: 120px;
            left: 60px;
        }

        .cloud5 {
            width: 110px;
            height: 25px;
            top: 80px;
            left: 150px;
        }

        .cloud6 {
            width: 110px;
            height: 25px;
            top: 230px;
            right: 60px;
        }

        .cloud7 {
            width: 70px;
            height: 50px;
            top: 165px;
            right: 100px;
        }

        .hello__world {
            z-index: 10;
            position: absolute;
            color: white;
            font-size: 0px;
            -webkit-text-stroke: 1px #343576;
        }

        /* --------Social Icons-------- */
        /* Color Variables */
        /* Social Icon Mixin */
        .social-icons {
            display: flex;
            position: absolute;
            bottom: 25px;
            right: 25px;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 40px;
            height: 40px;
            margin: 0 0.7rem;
            border-radius: 50%;
            cursor: pointer;
            font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            font-size: 1.5rem;
            text-decoration: none;
            transition: all 0.15s ease;
        }

        .social-icon:hover {
            color: #fff;
        }

        .social-icon:hover .tooltip {
            visibility: visible;
            opacity: 1;
            transform: translate(-50%, -150%);
        }

        .social-icon:active {
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5) inset;
        }

        .social-icon--twitter {
            background: #2b97f1;
            color: #fff;
        }

        .social-icon--twitter .tooltip {
            background: #2b97f1;
            color: currentColor;
        }

        .social-icon--twitter .tooltip:after {
            border-top-color: #2b97f1;
        }

        .social-icon--codepen {
            background: #000;
            color: #fff;
        }

        .social-icon--codepen .tooltip {
            background: #000;
            color: currentColor;
        }

        .social-icon--codepen .tooltip:after {
            border-top-color: #000;
        }

        .social-icon i {
            position: relative;
            top: 1px;
        }

        /* Tooltips */
        .tooltip {
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            padding: 0.4rem 0.6rem;
            border-radius: 40px;
            font-size: 0.4rem;
            font-weight: bold;
            opacity: 0;
            pointer-events: none;
            text-transform: uppercase;
            transform: translate(-50%, -100%);
            transition: all 0.3s ease;
            z-index: 1;
        }

        .tooltip:after {
            display: block;
            position: absolute;
            bottom: 1px;
            left: 50%;
            width: 0;
            height: 0;
            content: "";
            border: solid;
            border-width: 10px 10px 0 10px;
            border-color: transparent;
            transform: translate(-50%, 100%);
        }
    </style>
    <div class="main-wrapper">

        <div class="content main_content">

            <div class="sidebar-group left-sidebar chat_sidebar">

                <div id="chats" class="left-sidebar-wrap sidebar active">
                    <div class="header">
                        <div class="header-top">
                            <div class="logo ms-2 mt-3">
                                <a href="index.html">
                                    <img src="static/img/logo.png" class="header_image img-fluid" alt="">
                                </a>
                            </div>
                            <ul class="header-action mt-4">
                                <li>
                                    <a href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h ellipse_header"></i>
                                    </a>
                                    <div class="dropdown-menu  header_drop_icon">
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new_group">
                                            New Group
                                        </a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile_modal">Profile</a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#settings_modal">Settings</a>
                                        <a href="login.html" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav nav-tabs chat-tabs mt-4">
                            <li class="nav-item ms-1">
                                <a class="nav-link  active" href="index.html">Functions</a>
                            </li>
                            <li class="nav-item ms-1">
                                <a class="nav-link" href="group.html">Class</a>
                            </li>
                            <li class="nav-item ms-1">
                                <a class="nav-link" href="group.html">Themes</a>
                            </li>
                        </ul>
                        <button type="button" class="float-end btn btn-circle btn-sm header_button" data-bs-toggle="modal" data-bs-target="#chat-new">
                            <i class="fas fa-plus button_plus"></i>
                        </button>
                    </div>
                    <div class="search_chat has-search">
                        <span class="fas fa-search form-control-feedback"></span>
                        <input class="form-control chat_input" id="search-contact" type="text" placeholder="">
                    </div>
                    <div class="sidebar-body" id="chatsidebar">
                        <ul class="user-list">
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-8.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Show Hello World</h5>
                                        <p>for PHP, C#, Javascript, Jquery...</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-7.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Check Two Variables</h5>
                                        <p>for PHP</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:30 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-1.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Get IP Address</h5>
                                        <p>for C#</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:10 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-4.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Shutdown Windows CMD</h5>
                                        <p>for Console</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:7 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-6.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Kill Process tskmgr</h5>
                                        <p>for Console</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-4.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>HTML5 Page</h5>
                                        <p>for HTML</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-7.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Create ReactJs Search</h5>
                                        <p>for Javascript, Jquery...</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-8.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Compare IPs</h5>
                                        <p>for PHP, C#, Javascript, Jquery...</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-8.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Check if condition is true</h5>
                                        <p>for PHP, C#, Javascript, Jquery...</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-list-item">
                                <div class="avatar avatar-online">
                                    <img src="static/img/avatar-8.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>Show Hello World in C#</h5>
                                        <p>for C#</p>
                                    </div>
                                    <div class="last-chat-time">
                                        <small class="text-muted">14:45 pm</small>
                                        <div class="chat-toggle mt-1">
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#">
                                                    <i class="fas fa-ellipsis-h ellipse_header"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Open</a>
                                                    <a href="#" class="dropdown-item dream_profile_menu">Profile</a>
                                                    <a href="#" class="dropdown-item">Add to archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="chat" id="middle">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="container__elements">
                                <div class="bg">
                                    <div class="bg__circles">
                                        <div class="bg__circles-items">
                                            <div class="bg__circles-items__circle circle1"></div>
                                            <div class="bg__circles-items__circle circle2"></div>
                                            <div class="bg__circles-items__circle circle3"></div>
                                        </div>
                                    </div>
                                    <div class="sun"></div>
                                    <div class="venus"></div>
                                </div>
                                <h1 class="hello__world">Developer's Library</h1>
                                <div class="earth">
                                    <div class="earth__continent-left"></div>
                                    <div class="earth__continent-right"></div>
                                    <div class="earth__continent-bottom"></div>
                                </div>

                                <div class="clouds">
                                    <div class="cloud cloud1"></div>
                                    <div class="cloud cloud2"></div>
                                    <div class="cloud cloud3"></div>
                                    <div class="cloud cloud4"></div>
                                    <div class="cloud cloud5"></div>
                                    <div class="cloud cloud6"></div>
                                    <div class="cloud cloud7"></div>
                                </div>
                            </div>

                            <!--   Social Connections -->
                            <div class="social-icons">
                                <a class="social-icon social-icon--codepen" href="https://codepen.io/braydoncoyer" target="_blank">
                                   <img src="https://www.nicepng.com/png/full/52-520535_free-files-github-github-icon-png-white.png" alt="" style="width: 2rem;">
                                    <div class="tooltip">GitHub</div>
                                </a>
                                <a class="social-icon social-icon--twitter" href="https://twitter.com/BraydonCoyer" target="_blank">
                                <img src="https://pnggrid.com/wp-content/uploads/2021/05/linkedin-logo-white-1024x1024.png" alt="" style="max-width: 40px;">

                                    <div class="tooltip">LikedIn</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="chat-header">
                    <div class="user-details">
                        <div class="d-lg-none ms-2">
                            <ul class="list-inline mt-2 me-2">
                                <li class="list-inline-item">
                                    <a class="text-muted px-0 left_side" href="#" data-chat="open">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <figure class="avatar ms-1">
                            <img src="static/img/avatar-2.jpg" class="rounded-circle" alt="image">
                        </figure>
                        <div class="mt-1">
                            <h5 class="mb-1">Show Hello World</h5>
                            <small class="text-muted mb-2">
                                for PHP, C#, Javascript, Jquery...
                            </small>
                        </div>
                    </div>
                    <div class="chat-options">
                        <ul class="list-inline">
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Rate User">
                                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#voice_call">
                                    <i class="fas fa-star"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Report User">
                                <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#video_call">
                                    <i class="fas fa-bug"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light" href="#" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" class="dropdown-item dream_profile_menu">Profile</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="chat-body">
                    <div class="messages">
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="static/img/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    <p>Show Hello World in differences languages of programmer.</p>
                                    <br>
                                    <p>for PHP, C#, Javascript, Jquery and other languages, example
                                        NodeJs, Frameworks with Laravel, ReactJs and others...</p>
                                </div>
                            </div>

                        </div>


                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    PHP
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:38 PM <i><img src="static/img/double-tick.png" alt=""></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="static/img/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    <pre><code class="language-php">echo "Hello World";</code></pre>
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:26 PM</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    C#
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:38 PM <i><img src="static/img/double-tick.png" alt=""></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="static/img/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    <pre><code class="language-csharp">
                        //Use librarys
                        using System.Windows.Forms;

                            MessageBox.Show("Hello World");
                                    </code></pre>
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:26 PM</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="chats chats-right">
                            <div class="chat-content">
                                <div class="message-content">
                                    Javascript
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:38 PM <i><img src="static/img/double-tick.png" alt=""></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="static/img/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    <pre><code class="language-javascript">console.log("Hello World!");</code></pre>
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time">Yesterday 14:26 PM</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="chat-footer owl-carousel">

                    <a style="display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>PHP</span>
                    </a>

                    <a style="display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>C#</span>
                    </a>

                    <a style="display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>Javascript</span>
                    </a>

                    <a style=" display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>JQuery</span>
                    </a>
                    <a style=" display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>Angula</span>
                    </a>
                    <a style=" display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>ReactJs</span>
                    </a>
                    <a style=" display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>NodeJs</span>
                    </a>
                    <a style=" display: inline-block; background-color: #650681; color: #fff; padding: 10px 25px 10px 10px; border-radius: 32px; font-size: 13px; font-weight: bold;" href="#">
                        <i class="fas fa fa-code me-1"></i> <span>Python</span>
                    </a>
                </div> -->
            </div>
            <div class="right-sidebar right_sidebar_profile mCustomScrollbar _mCS_3 mCS_no_scrollbar hide-right-sidebar" id="middle1" style="overflow: hidden;">
                <div class="right-sidebar-wrap ">
                    <div class="contact-close_call me-4 mt-4 text-end">
                        <a href="#" class="btn btn-outline-light close_profile close_profile4">
                            <i class="fas fa-times close_icon"></i>
                        </a>
                    </div>
                    <div class="sidebar-body">
                        <div class="ps-4 pe-4 mt-0 right_sidebar_logo">
                            <div class="text-center mb-3">
                                <figure class="avatar avatar-xl mb-3">
                                    <img src="static/img/avatar-2.jpg" class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="profile-name">Scott Albright</h5>
                            </div>
                            <div>
                                <div class="accordion-col">
                                    <div class="accordion-title">
                                        <h6 class="primary-title">About and phone number <i class="fas fa-chevron-right float-end"></i></h6>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="text-muted text-center mt-1">Help people to build websites and apps + grow
                                            awareness in social media 🔥</p>
                                        <div class="mt-2 text-center">
                                            <h6>Phone: <span class="text-muted ms-2">+(33 1) 45 55 01 10</span></h6>
                                        </div>
                                    </div>
                                    <div class="accordion-title">
                                        <h6 class="primary-title">Settings <i class="fas fa-chevron-right float-end"></i></h6>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="contact-action">
                                            <li class="block-user mt-1">
                                                <a href=""><i class="fas fa-ban me-2 text-muted"></i>Block</a>
                                            </li>
                                            <li class="report-contact">
                                                <a href=""><i class="fas fa-thumbs-down me-2"></i> Report Contact</a>
                                            </li>
                                            <li class="delete-chat">
                                                <a href=""><i class="fas fa-trash-alt me-2"></i> Delete Chat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('static/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('static/js/script.js') }}"></script>
    <script src="{{ mix('static/js/prism.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        $(document).ready(function() {
            // $(".chat-body").mCustomScrollbar("scrollTo", "bottom");
            $('.owl-carousel').owlCarousel({
                margin: 10,
                autoWidth: true
            });

        });
        const EARTH = document.querySelector(".earth");
        const TEXT = document.querySelector(".hello__world");

        function bounceEffect() {
            TEXT.style.fontSize = "0";
            gsap.to(TEXT, 2, {
                fontSize: 50,
                ease: "bounce.out"
            });
        }

        EARTH.addEventListener("click", () => {
            bounceEffect();
        });

        window.addEventListener("load", () => {
            bounceEffect();
        });
    </script>
</body>

</html>