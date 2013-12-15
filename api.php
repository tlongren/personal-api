<?php
header('Content-Type: application/json');
$dob = "1983-08-17";
$today = date("Y-m-d");
$start_datetime = new DateTime($dob);
$end_datetime = new DateTime($today);
$interval = $start_datetime->diff($end_datetime);
$seconds_start = $interval->format('%a') * 24 * 60 * 60;

function secondsToTime($inputSeconds) {

    $secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;

    // extract days
    $days = floor($inputSeconds / $secondsInADay);

    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // return the final array
    $obj = array(
        'd' => (int) $days,
        'h' => (int) $hours,
        'm' => (int) $minutes,
        's' => (int) $seconds,
    );
    return $obj;
}

$seconds = secondsToTime($seconds_start);
echo $seconds['d'] . '<br />';
echo $seconds['h'] . '<br />';
echo $seconds['m'] . '<br />';
echo $seconds['s'] . '<br />';

$json = '{
    "person": {
        "age": {
            "years": 30,
            "months": 8,
            "weeks": 2,
            "days": 5,
            "hours": 2,
            "minutes": 39,
            "seconds": 59,
            "milliseconds": 927
        },
        "location": {
            "latitude": 41.8819,
            "longitude": -87.6278,
            "city": "Nevada",
            "state": "IA"
        },
        "languages": {
            "communication": ["English"],
            "programming": ["Javascript", "HTML", "CSS", "PHP"],
            "frameworks": ["WordPress", "Anchor", "LESS", "SASS", "jQuery", "PostgreSQL", "MariaDB", "MySQL"]
        }
    },
    "identifiers": {
        "image": "https://lh6.googleusercontent.com/-G_Cw2kSHK2w/UcwDnydyQyI/AAAAAAAAa4A/sQe4_fKbHf8/w320-h240-no/smh.gif",
        "home_url": "http://www.longren.org",
        "first_name": "Tyler",
        "last_name": "Longren",
        "externals": [{
            "name": "Twitter",
            "username": "tlongren",
            "html_url": "http://twitter.com/tlongren"
        }, {
            "name": "GitHub",
            "username": "tlongren",
            "html_url": "http://github.com/tlongren"
        }]
    },
    "blog": {
        "rss": "http://www.longren.org/feed/",
        "featured": [{
            "title": "Infographic: Global Cell Phone Statistics",
            "url": "http://www.longren.org/infographic-global-cell-phone-statistics/",
            "date": "2013-12-14T04:15:28.513Z"
        }]
    },
    "_links": {
        "self": {
            "href": "/api"
        }
    }
}';

echo $json;
?>