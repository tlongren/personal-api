personal-api
============

What It Does
-----------------------------
Provides a simple JSON API for your personal site. Easily hosted on [Heroku](http://heroku.com). Can provide any info you want, like age, employer, name, children, spoken languages, programming languages, skills, hobbies, or pretty much anything.

Idea
-----------------------------
I saw [Joshua Beckman's](https://twitter.com/jbckmn) [peronal API](http://http://www.bckmn.com/api) and wanted to provide one that anyone can easily install, ideally somewhere like Heroku.

Setup
-----------------------------
This runs really nicely on [herou](http://www.heroku.com/), so I suggest running it there. Just clone this repo, create an app through the Heroku dashboard or with the [heroku toolbelt](https://toolbelt.heroku.com/), read up on [setting up heroku](https://devcenter.heroku.com/articles/quickstart), and, finally, [deploy to your new heroku app](https://devcenter.heroku.com/articles/git).


Examples
-----------------------------
See [http://api.longren.org/](http://api.longren.org) or [http://http://www.bckmn.com/api](http://www.bckmn.com/api) for examples.


PHP Example
-----------------------------
For PHP devs, there's some basic querying examples in php-examples.php. Below is the output of php-example.php. It won't run on heroku (unsure why, any ideas?), so if you want to see a quick test, upload it to a PHP webserver you control.

```
30
Array
(
    [0] => Javascript
    [1] => HTML
    [2] => CSS
    [3] => PHP
)
stdClass Object
(
    [wife] => Kayla
    [daughter] => Sydney
)
```

Other Language Example
-----------------------------
I'll be adding examples for JavaScript and maybe other languages as well. If you really want to see examples for a language, [open an issue](https://github.com/tlongren/personal-api/issues). I just ask that you name your example files like so: ```ruby-example.rb``` for Ruby or ```python-example.rb``` for Python.