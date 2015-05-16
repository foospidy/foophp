# foophp
A very basic PHP application framework. This is for the developer that wants a light weight framework to quickly build an API service, single page app, or a typical PHP app. The framework basically provides a structure to build under, but does not constrain you to it. In addition it provides some basic security "on by default" features.

If you need a more advanced and feature rich framework then you should check out:
- http://laravel.com (https://github.com/laravel/laravel)
- http://www.codeigniter.com/ (https://github.com/bcit-ci/CodeIgniter)

## Basic Security
Currently the framework provides the following:
- Input validation - All input parameters will require a validation file.
- Major HTTP security headers are implemented.

## Framework Structure

/ directory contains some basic files:
- .htaccess - Edit this file as you add new API endpoints or .php pages.
- index.html - The default static file, which can be edited and used for single page apps.
- index.php - The default PHP file that load core libraries and initialize the user session. You should only need to edit this file to include composer packages.
- robots.txt and sitemap.xml - Used by search engines for indexing, edit as you see fit.

/app directory contains some core framework files and is also where you put your application files.

/app/core directory contains core framework files.

/static directory contains all static content (e.g. css, javascript, html, etc.)


## Getting Started
todo
