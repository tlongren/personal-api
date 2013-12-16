<?php
header('Content-Type: application/json');

$json = '{
    "person": {
        "age": {
            "years": 30
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
        },
        "employer": {
            "name": "Visionary Services",
            "services": "Web Development and Design",
            "position": "Software Engineer",
            "city": "Des Moines",
            "state": "IA"
        },
        "family": {
            "wife": "Kayla",
            "daughter": "Sydney"
        }
    },
    "identifiers": {
        "image": "https://lh6.googleusercontent.com/-G_Cw2kSHK2w/UcwDnydyQyI/AAAAAAAAa4A/sQe4_fKbHf8/w320-h240-no/smh.gif",
        "home_url": "http://www.longren.org",
        "email": "tlongren@gmail.com",
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
            "date": "2013-12-15T04:15:28.513Z"
        }]
    },
    "_links": {
        "self": {
            "href": "/api"
        },
        "kegplan": {
            "href": "http://kegplan.io/"
        },
        "vpsstat.us": {
            "href": "https://vpsstat.us/"
        }
    }
}';
echo $json;
?>