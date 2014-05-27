<?php
header('Content-Type: application/json');

$json = '{
    "person": {
        "age": {
            "years": 30
        },
        "location": {
            "latitude": 41.902445,
            "longitude": -93.307017,
            "city": "Collins",
            "state": "IA"
        },
        "languages": {
            "communication": ["English"],
            "programming": ["Javascript", "HTML", "CSS", "PHP"],
            "frameworks": ["WordPress", "Anchor", "LESS", "SASS", "jQuery", "PostgreSQL", "MariaDB", "MySQL"]
        },
        "employer": {
            "name": "Longren.io Development",
            "services": "Web Development and Design",
            "position": "Owner",
            "city": "Collins",
            "state": "IA"
        },
        "family": {
            "wife": "Kayla",
            "daughter": "Sydney",
            "daughter": "Piper"
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
            "title": "New Sublime Text Themes: am​Coder and Minimal Sublime Text",
            "url": "http://longren.io/new-sublime-text-themes-am%e2%80%8bcoder-and-minimal-sublime-text/",
            "date": "2014-05-26T04:15:28.513Z"
        }]
    },
    "_links": {
        "self": {
            "href": "/"
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