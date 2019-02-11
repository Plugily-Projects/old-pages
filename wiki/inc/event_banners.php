<?php

function applyHolidayStyles() {
    $day = date('d');
    $month = date('m');

    switch ($month) {
        case 2:
            if($day >= 10 && $day <= 18) {
                return '.valentines {background-image: url("https://i.imgur.com/hS2tUGx.png"), url("https://i.imgur.com/hS2tUGx.png"), url("https://i.imgur.com/hS2tUGx.png");background-repeat: no-repeat, repeat, no-repeat;background-position: center bottom, center top, right top;max-height: 100px;}';
            }
            break;
    }
    return "";
}

function applyHolidayBanner($project) {
    $day = date('d');
    $month = date('m');

    switch ($month) {
        case 2:
            if($day >= 10 && $day <= 18) {
              return '<div class="jumbotron valentines mb-0 mt-3 text-white text-center pt-4"><span>Enjoy <strong>Valentine\'s Day</strong> with ' . $project . '!<br/>In-game event with special perks is available from <strong>10 to 18 February</strong>!</span></div>';
            }
            break;
    }
    return "";
}
