personal-api
============

What It Does
-----------------------------
Provides a simple JSON API for your personal site. Easily hosted on [Heroku](http://heroku.com). Can provide any info you want, like age, employer, name, children, spoken languages, programming languages, skills, hobbies, or pretty much anything.


Idea
-----------------------------
I saw [Joshua Beckman's](https://twitter.com/jbckmn) [personal API](http://http://www.bckmn.com/api) and wanted to provide one that anyone can easily install, ideally somewhere like Heroku.


Setup
-----------------------------
This runs really nicely on [heroku](http://www.heroku.com/), so I suggest running it there. To run anywhere else, just upload index.php and that's it. To setup Heroku, see this list.

1. Fork [tlongren/personal-api](https://toolbelt.heroku.com/) on GitHub and make a local clone.
2. Install the [Heroku Toolbelt](https://devcenter.heroku.com/articles/git) and login to Heroku with the command ```heroku login```. Enter your username and password to login with the Heroku Toolbelt.
3. Create a new app on Heroku either through the web interface, or with the command ```heroku create```. If you do it with the command line the app name will be shown to you,
4. Open a terminal and go into the folder that you cloned your fork into and run the command ```heroku git:remote -a heroku-app-name```. That will add a remote named "heroku" to your local clone.
5. Now, while still in your local clone folder, run ```git push heroku master``` to push your app to Heroku. If your app is named "heroku-app-name", you can access your app at http://heroku-app-name.herokuapp.com.


Examples
-----------------------------
+ [http://api.longren.org/](http://api.longren.org)
+ [http://www.bckmn.com/api](http://www.bckmn.com/api)


PHP Example
-----------------------------
For PHP devs, there's some basic querying examples in php-examples.php. Below is the output of ```php-example.php```. It won't run on heroku (unsure why, any ideas?), so if you want to see a quick test, upload it to a PHP webserver you control.

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
I'll be adding examples for JavaScript and maybe other languages as well. If you really want to see examples for a language, [open an issue](https://github.com/tlongren/personal-api/issues). I just ask that you name your example files like so: ```ruby-example.rb``` for Ruby or ```python-example.py``` for Python.


A Screenshot
-----------------------------
![api.longren.org output](http://i.imgur.com/dmgD53h.png "api.longren.org output")
