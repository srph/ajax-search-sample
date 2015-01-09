# phonebook-ng-pogi

[![Author](https://img.shields.io/badge/author-srph-blue.svg?style=flat)](https://github.com/srph)

A sample app implementing AJAX search (with PHP), serves as a guide to newbies.

You may learn from the annotated source.

## Preview / Demo

Check the [demo](https://phonebook-ng-pogi.herokuapp.com/), deployed on Heroku.

I don't like bombarding someone's screen with ***HQ*** screenies, so here's a set of links instead:

[[JSON Response]](http://i.imgur.com/h9vG6Fx.png)
[[Unfiltered]](http://i.imgur.com/lma1EdI.png)
[[Filtered]](http://i.imgur.com/kA9e9Ps.png)
[[Filtered | None Found]](http://i.imgur.com/nEnrepP.png)

## Running

### Requirements:

PHP ```5.4~``` and a webserver, that's it.

\* If you're using Ubuntu, you may follow [DigitalOcean's tutorial to install the lamp stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu).

### Installation

Clone to your machine

```bash
$ git clone https://github.com/srph/phonebook-ng-pogi.git
```

If you're feeling lazy, you may run PHP's built-in webserver (```SAPI```):

```bash
# `root` of cloned folder
$ php -S localhost:8000
```

Then, access in your browser through ```localhost:8000```

## FAQ

Q: **Why is ```index.php``` is a ```PHP``` file when it does not do anything ```PHP``` related?

Heroku seems to require index.php to detect the repository as a PHP repository, dear.

Q: **Where do I start?**

You should start analyzing ```database.php``` before you hop on to ```index.php``.

If you're really, really new to AJAX (or maybe as well as PHP and jQuery), I wouldn't recommend learning with this thing. You might want to check out [SitePoint](www.sitepoint.com)'s [**AJAX with jQuery**](www.sitepoint.com/ajax-jquery/) first.

Q: **Can I use MySQL?**

Yes, you can always use any type of data storage (text file, array, whatever the fuck you want, MySQL, MSSQL), **really**. Just that I found simple array of objects for an example to be enough.

Q: **This AJAX thing seems to be tedious**

This could be simplified.

On the other note: Not only the AJAX-processing thing is tedious, if your system expands to something big, you need to start using a front-end framework, my friend.

## Acknowledgement

I wrote this thing for a friend in need, thanks to him. Not the best guide out there, but I hope newcomers could learn a thing or two from it.

*phonebook-ng-pogi** © 2015+, Kier Borromeo (srph). Released under the [MIT] License.<br>

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)

[MIT]: http://mit-license.org/
