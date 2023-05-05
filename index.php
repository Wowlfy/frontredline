<?php include "header.php" ?>

<html>
<head>


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/calendar.js" defer></script>
</head>
</html>
<div class="container">
    <div class="contents">
        <div class="first-part">

            <div class="promo-infos">
                <label for="">Promo : </label>
                <a href="">CDA2022-01</a>
            </div>

            <div class="promo-dates">
                <span>Période du X au X</span>
            </div>

        </div>
        <div class="second-part">


            <div class="wrapper">
                <header>
                    <p class="current-date"></p>
                    <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                    </div>
                </header>
                <div class="calendar">
                    <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>


        </div>
    </div>
</div>


