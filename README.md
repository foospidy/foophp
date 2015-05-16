# foophp
A very basic PHP application framework. This is for the developer that wants a light weight framework to quickly build an API service, single page app, or a typical PHP app. The framework basically provides a structure to build under, but does not constrain you to it. In addition it provides some basic security "on by default" features.

If you need a more advanced and feature rich framework then you should check out:
- http://laravel.com (https://github.com/laravel/laravel)
- http://www.codeigniter.com/ (https://github.com/bcit-ci/CodeIgniter)

## Basic Security
Currently the framework provides the following:
- Input validation - All input parameters will require a validation file.
- Major HTTP security headers are implemented.
- More to do...

## Framework Structure

/ directory contains some basic files:
- .htaccess - Edit this file as you add new API endpoints or .php pages.
- index.html - The default static file, which can be edited and used for single page apps.
- index.php - The default PHP file that load core libraries and initialize the user session. You should only need to edit this file to include composer packages.
- robots.txt and sitemap.xml - Used by search engines for indexing, edit as you see fit.

/app directory contains some core framework files and is also where you put your application files. It may be helpful to implement a prefix naming schema for organizing files:
- api.something.php for api related files.
- app.something.php for typical app files.
- lib.something.php for library files.
- class.something.php for class files.

For input validation the framework looks for files prfixed with "validate.", for example:
- validate.parameter_name.php

/app/vendor directory only exists if you use composer to include packages. Place your composer.json file in the /app directory and run composer as needed. You'll need to edit /index.php to uncomment the line so /app/vendor/autoload.php will be loaded.

/app/core directory contains core framework files.

/static directory contains all static content (e.g. css, javascript, html, etc.)


## Getting Started
todo
