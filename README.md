getoptionkit-skeleton
=====================

A quick demo of the GetOptionKit CLI parser for PHP

Installation
------------

    composer create-project beryllium/getoptionkit-skeleton myproject

About the Skeleton
------------------

The skeleton script is located in `bin/hello`, which is an executable PHP file.

It defines two optional parameters, for '--help' and a custom '--greeting', but
the core functionality of the script is to echo a greeting to the provided
username.

Usage:

    bin/hello [-h] [-g "Greetings"] yourname
    bin/hello [--help] [--greeting "Greetings"] yourname

There is also a `bootstrap.php` script, which performs some basic checks and
defines a simple "writeln" function.
