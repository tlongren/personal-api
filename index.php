<?php
header('Content-Type: application/json');

$json = '{
    "person": {
        "age": {
            "years": 34
        },
        "location": {
            "latitude": 41.902445,
            "longitude": -93.307017,
            "city": "Maxwell",
            "state": "IA"
        },
        "languages": {
            "communication": ["English"],
            "programming": ["Javascript", "HTML", "CSS", "PHP"],
            "frameworks": ["WordPress", "Anchor", "LESS", "SASS", "jQuery", "PostgreSQL", "MariaDB", "MySQL"]
        },
        "employer": {
            "name": "Saltech Systems",
            "services": "Web Development and IT Solutions",
            "position": "WordPress Developer",
            "city": "Ames",
            "state": "IA"
        },
        "family": {
            "wife": "N/A",
            "daughter": "Sydney",
            "daughter": "Piper"
        }
    },
    "identifiers": {
        "image": "https://lh6.googleusercontent.com/-G_Cw2kSHK2w/UcwDnydyQyI/AAAAAAAAa4A/sQe4_fKbHf8/w320-h240-no/smh.gif",
        "home_url": "https://longren.io",
        "email": "tyler@longren.io",
        "first_name": "Tyler",
        "last_name": "Longren",
        "externals": [{
            "name": "Twitter",
            "username": "tlongren",
            "html_url": "https://twitter.com/tlongren"
        }, {
            "name": "GitHub",
            "username": "tlongren",
            "html_url": "https://github.com/tlongren"
        }]
    },
    "blog": {
        "rss": "https://longren.io/feed/",
        "featured": [{
            "title": "Install Tarsnap On a DigitalOcean VPS or Any Ubuntu 14.04 LTS System",
            "url": "http://longren.io/install-tarsnap-on-digitalocean-or-any-ubuntu-14-04-lts-system/",
            "date": "2014-08-05T07:54:25+00:00"
        }]
    },
    "_links": {
        "self": {
            "href": "https://longren.io/"
        },
        "Kegplan.io": {
            "href": "http://kegplan.io/"
        },
        "Ankenyglassware.com": {
            "href": "https://ankenyglassware.com/"
        },
        "I35Spirits.com": {
            "href": "http://i35spirits.com/"
        }
        ,
        "Longrendev.io": {
            "href": "https://longrendev.io/"
        }
    }
}';
echo $json;
?>