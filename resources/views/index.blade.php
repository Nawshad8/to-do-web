<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>to-do-web</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #7653F2;
            font-family: Avenir;
            color: white;
            margin-top: 20px;
        }

        .container {
            display: flex;
            max-width: 90%;
            margin-left: auto;
            margin-right: auto;

        }

/*------SIDE BAR--------------------------------------------*/
        .side-bar {
            flex-grow: 0.2;
            background-color: #0A0F38;
            margin-left: 30px;
            padding-right: 30px;
        }

        .logo {
            margin: 40px 0 10px 40px;
            height: 20px;
            width: 80px;
        }

        .logo img {
            width: 25px;
            height: 25px;
            filter: invert(1);
        }

        .logo::after {
            content: "Dolph";
            color: white;

        }

        ul {
            list-style: none;

        }

        ul li {
            margin-bottom: 5px;
            display: flex;
            transition: 0.5s;
        }

        ul li:hover {
            background-color: #7653F2;
            padding-left: 10px;
            transition: 0.5s;
        }

        ul li img {
            filter: invert(1);
            height: 20px;
            width: 20px;
            margin: auto 10px auto 0;
        }

        p span { /* PRO */
            color: orange;
            font-weight: bold;
            margin-left: 0px;
        }

        .profile {
            display: flex;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .profile img {
            height: 25px;
            width: 25px;
            margin: auto 10px auto 40px;
        }

        h4 {
            margin-left: 40px;
        }

/*------MAIN-PAGE-------------------------------------------*/
        .main-page {
            flex-grow: 3;
            background-color: #050A2E;
            padding-left: 25px;
        }

        /* Start customisation for icon next to list title */
        .circle-container {
            height: 35px;
            width: 35px;
            background-color: white;
            border-radius: 50%;
            margin-top: 20px;
            display: flex;
        }

        .circle-container img {
            margin: auto;
            padding-left: 5px;
        }

        .circle-container p {
            padding-left: 20px;
            margin-top: auto;
            margin-bottom: auto;
            font-weight: 500;
        }

        /* Start customisation for checkbox */
        /* Customize the label (the container) */
        .container-checkbox {
            display: block;
            position: relative;
            padding-left: 27px;
            margin-bottom: 12px;

            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .container-checkbox p {
            font-size: 16px;

        }

        .container-checkbox img {
            background-color: green;
        }

        .container-checkbox span p {
            margin-left: 20px;
        }


        /* Hide the browser's default checkbox */
        .container-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 16px;
            width: 16px;
            background-color: #050A2E; /* #050A2E; */
            border: 2px solid #ccc;
            border-radius: 70%;
        }


        /* On mouse-over, add a background color */
        .container-checkbox:hover input ~ .checkmark {
            background-color: rgb(99, 29, 62, 0.5);
            transition: 0.5s;
        }


        label:hover {
            background-color: rgb(99, 29, 62, 0.5);
            transition: 0.5s;
        }


        /* When the checkbox is checked, add a green background */
        .container-checkbox input:checked ~ .checkmark {
            background-color: #00B400;
            border-color: #00B400;
        }


        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container-checkbox input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container-checkbox .checkmark:after {
            left: 5px;
            top: 2px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2.5px 2.5px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .delay-p {

        }

        .delay-span {
            padding-left: 3.22px;
            color: #AD294B;
        }

    </style>
</head>

<body>
<div class="container">

    <div class="side-bar">
        <div class="logo">
            <img src="https://img.icons8.com/material/24/000000/mysql-logo.png"/>
        </div>

        <ul>
            <li><img src="https://img.icons8.com/material/24/000000/squared-menu--v1.png" alt="Overview"/>
                <p>Overview</p></li>
            <li><img src="https://img.icons8.com/material/24/000000/read--v2.png" alt="Journal"/>
                <p>Journal</p></li>
        </ul>
        <h4>List</h4>
        <ul>
            <li><img src="https://img.icons8.com/material/24/000000/tear-off-calendar.png" alt="event"/>
                <p>Events</p></li>
            <li><img src="https://img.icons8.com/material/24/000000/construction-worker--v1.png" alt="Work"/>
                <p>Work</p></li>
            <li><img src="https://img.icons8.com/material/24/000000/beach--v1.png" alt="travel"/>
                <p>Travel</p></li>
            <li><img src="https://img.icons8.com/material/24/000000/idea--v1.png" alt="Ideas">
                <p>Ideas</p></li>
            <li><img src="https://img.icons8.com/material/24/000000/add.png" alt="Add icon"/>
                <p>Add list</p></li>
        </ul>
        <div class="profile">
            <img src="https://img.icons8.com/color/24/000000/user-male-circle--v1.png" alt="profile image"/>
            <p>FetchLab <span>PRO</span></p>
        </div>
    </div>
    <div class="main-page">

        <div class="circle-container">
            {{-- SUITCASE LINK : https://img.icons8.com/material-outlined/24/000000/suitcase.png --}}
            <img class="circle" src="https://img.icons8.com/material/24/000000/construction-worker--v1.png"/>
            <p>Work</p>
        </div>

        <div>
            <h2>Today</h2>

            <label class="container-checkbox">
                <p>Pay internet</p>
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>

            <div>
                <h2>Tomorrow</h2>
                <label class="container-checkbox">
                    <p class="delay-p">
                        Get the documents from home
                        <span class="delay-span">
                            <img src="https://img.icons8.com/material/24/AD294B/read--v2.png">
                            yesterday at 12:00
                        </span> 
                    </p>
                    

                    
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div>
                <h2>Next Week</h2>
                <div class="round">
                    <input type="checkbox" id="checkbox5"/>
                    <label for="checkbox5">Release todo app</label>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
