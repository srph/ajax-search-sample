# basic-phonebook-ajax

An example of AJAX search (with PHP), serves as a guide to newbies.

You may learn from the annotated source.

## Running

### Requirements:

PHP ```5.4~``` and a webserver, that's it.

\* If you're using Ubuntu, you may follow [DigitalOcean's tutorial to install the lamp stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu).

### Installation

Clone to your machine

```bash
$ git clone https://github.com/srph/basic-phonebook-ajax.git
```

If you're feeling lazy, you may run PHP's built-in webserver (```SAPI```):

```bash
# on the root folder
$ php -S localhost:8000
```

Then, access in your browser through ```localhost:8000```

## FAQ

* Why is there an html file and a php file?

Since our front-end / html / template does not do anything ```PHP``` related, I decided to simply leave it as it is.

Our ```PHP``` file simply echoes out / returns a JSON response.

* Where do I start?

You should start analyzing the ```PHP``` before you hop on to the ```HTML``` file.

* Can I use MySQL?

Yes, you can always use any type of data storage, **really**. Just that I found simple array of data for an example to be enough.

* This AJAX thing seems to be tedious

This could be simplified.

On the other note: Not only the AJAX-processing thing is tedious, if your system expands to something big, you need to start using a front-end framework, my friend.

## Acknowledgement

I wrote this thing for a friend in need, thanks to him. Not the best guide out there, but I hope newcomers could learn a thing or two from it.

*basic-phonebook-ajax** © 2014+, Kier Borromeo (srph). Released under the [MIT] License.<br>

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)

[MIT]: http://mit-license.org/
