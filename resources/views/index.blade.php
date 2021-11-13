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

        /*---------------SIDE-BAR*/
        .side-bar {
            flex-grow: 0.2;
            background-color: #0A0F38;
            margin-left: 30px;
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
        }

        ul li img {
            filter: invert(1);
            height: 20px;
            width: 20px;
            margin: auto 10px auto 0;
        }

        p span {
            color: orange;
            font-weight: bold;
            margin-left: 60px;
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


        /*---------------MAIN-PAGE*/
        .main-page {
            flex-grow: 3;
            background-color: #050A2E;
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
        main page
    </div>
</div>

</body>
</html>
