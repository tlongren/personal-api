<?php
header('Content-Type: application/json');
$dob = "8/17/1983";
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
            "title": "Contributing To GitHub Projects is Easy",
            "url": "http://www.longren.org/contributing-to-github-projects-is-easy/",
            "date": "2013-12-13T04:15:28.513Z"
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