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
	case 3:
	   if($day >= 28) {
		return '.april-fools {background-image: url("https://i.imgur.com/KyG8Usc.png"), url("https://i.imgur.com/KyG8Usc.png"), url("https://i.imgur.com/KyG8Usc.png");background-repeat: no-repeat, repeat, no-repeat;background-position: center bottom, center top, right top;max-height: 100px;}';
           }
	   break;
	case 4:
	   if($day <= 5) {
		return '.april-fools {background-image: url("https://i.imgur.com/KyG8Usc.png"), url("https://i.imgur.com/KyG8Usc.png"), url("https://i.imgur.com/KyG8Usc.png");background-repeat: no-repeat, repeat, no-repeat;background-position: center bottom, center top, right top;max-height: 100px;}';
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
              return '<div class="jumbotron valentines mb-0 mt-3 text-white text-center pt-4"><span>Enjoy <strong>Valentine\'s Day</strong> with ' . $project . '!<br/>In-game special perks are available from <strong>10 to 18 February</strong>!</span></div>';
            }
            break;
	case 3:
	    if($day >= 28) {
              return '<div class="jumbotron april-fools mb-0 mt-3 text-black text-center pt-4"><span>Enjoy <strong>April Fool\'s Day</strong> with ' . $project . '!<br/>In-game special perks are available from <strong>28 March to 5 April</strong>!</span></div>';
            }
	    break;
	case 4:
	    if($day <= 5) {
              return '<div class="jumbotron april-fools mb-0 mt-3 text-black text-center pt-4"><span>Enjoy <strong>April Fool\'s Day</strong> with ' . $project . '!<br/>In-game special perks are available from <strong>28 March to 5 April</strong>!</span></div>';
            }
	    break;
    }
    return "";
}
