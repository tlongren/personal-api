personal-api
============

What It Does
-----------------------------
Provides a simple JSON API for your personal site. Easily hosted on (Heroku)(http://heroku.com].

Idea
-----------------------------
I saw [Joshua Beckman's](https://twitter.com/jbckmn) [peronal API](http://http://www.bckmn.com/api) and wanted to provide one that anyone can easily install, ideally somewhere like Heroku.

Setup
-----------------------------
This runs really nicely on [herou](http://www.heroku.com/), so I suggest running it there. Just clone this repo, create an app through the Heroku dashboard or with the [https://toolbelt.heroku.com/](heroko toolbelt), read up on [https://devcenter.heroku.com/articles/quickstart](setting up heroku), and, finally, [https://devcenter.heroku.com/articles/git](deploy to your new Heroku app).


Examples
-----------------------------
See [http://api.longren.org/](http://api.longren.org) or [http://http://www.bckmn.com/api](http://www.bckmn.com/api) for examples.

For PHP devs, there's some basic querying examples in php-examples.php. I'll be adding examples for JavaScript and maybe other languages as well, or send a pull request. Just name your example file ```ruby-example.rb``` for Ruby for example, or ```python-example.rb``` for Python.

Below is the output of php-example.php.

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