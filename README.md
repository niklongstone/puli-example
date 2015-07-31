# Resource management with Puli example files

This repository contains the example files related to the [SitePoint](http://www.sitepoint.com) article on [Puli](http://www.puli.io).

## Step 1 (`master branch`)
 - Make sure you have [Composer](https://getcomposer.org/) and you have installed the Puli CLI.
 - Run `composer install` to install all the required dependency.
 - Run `puli map /myapp res` to map all the resources.
 - Open index.php to see the result.

## Step 2 - (`git checkout step-2`)
 - Run `composer require puli/url-generator:^1.0` to require the Url Generator Puli package.
 - Run `puli server --add myserver public_html` to make the server link to the public_html folder.
 - Run `puli publish /myapp/public myserver` to register the path.
 - Run `puli publish --install' to create symlinks of the /res/public elements into the public_html path
 - Open url-generation.php to see the absolute path output.

## Step 3 - (`git checkout step-3`)
 - Run `composer update` to install the required dependencies.
 - Modify the lines 9 and 60 of the `views/index.html.twig` as follow:
 ```
 9:     <link rel="stylesheet" href="{{ resource_url('../public/css/style.css') }}">
 ...
 60:    <img src="{{ resource_url('../public/images/200x200.gif') }}" alt="Post thumbnail" class="thumbnail" />

 ```
 __Note:__ The resource_url specified will refer to the public resource in the web root directory as in Step 2
 - Open twig-example.php to see the final result.
