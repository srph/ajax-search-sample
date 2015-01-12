# phonebook-ng-pogi

[![Author](https://img.shields.io/badge/author-srph-blue.svg?style=flat)](https://github.com/srph)

A sample app implementing AJAX search (with PHP), serves as a guide to newbies.

This is not a tutorial, but you may learn from the annotated source.

## Preview / Demo

Check the [demo](https://phonebook-ng-pogi.herokuapp.com/), deployed on Heroku.

[![Unfiltered](http://i.imgur.com/lma1EdI.png)](http://i.imgur.com/lma1EdI.png)

- [JSON Response](http://i.imgur.com/h9vG6Fx.png)
- [Unfiltered](http://i.imgur.com/lma1EdI.png) (; README Preview)
- [Filtered | None Found](http://i.imgur.com/nEnrepP.png)

## Running

*Phonebook ng Pogi* is available through the [demo](https://phonebook-ng-pogi.herokuapp.com). However, if you are interested in the annotated source while running the app, so be it.

### Requirements:

PHP ```5.4~``` and a webserver, that's it.

\* If you're using Ubuntu, you may follow [DigitalOcean's tutorial to install the lamp stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu).

\* If you're using OSX, you might want to check [php_osx](http://php-osx.liip.ch/).

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

Q: **Why is ```index.php``` is a ```PHP``` file when it does not do anything ```PHP``` related?**

[Heroku](https://heroku.com) *seems* to require ```index.php``` to detect the repository as a PHP repository.

Q: **Where do I start?**

You should start analyzing ```database.php``` before you hop on to ```index.php``.

If you're really, really new to AJAX (or maybe as well as PHP and jQuery), Iwould certainly not recommend this *guide*. You might want to check out [SitePoint](www.sitepoint.com)'s [**AJAX with jQuery**](www.sitepoint.com/ajax-jquery/), or other guides first.

Q: **Can I use MySQL?**

Yes, you can always use any type of data storage (text file, array, MySQL, MSSQL), **really**. Just that I found simple array of objects for an example to be enough.

Q: **This AJAX thing seems to be tedious**

Mind you that my implementation does not show the Best Pratices™, and is open for improvements.

On the other note: AJAX itself is very simple. But the other stuff that comes (loading elements, replacing old data with the freshly fetched data, etc...) is the tedious part. If your system expands to something big, you should start using a front-end framework.

## Acknowledgement

I wrote this thing for a friend in need, thanks to him. Not the best guide out there, but I hope newcomers could learn a thing or two from it.

*phonebook-ng-pogi** © 2015+, Kier Borromeo (srph). Released under the [MIT] License.<br>

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)

[MIT]: http://mit-license.org/
