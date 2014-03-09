JsHintBundle
============

This Symfony 2 Bundle registers an [Assetic](https://github.com/kriswallsmith/assetic) filter to pass JavaScript files through [JsHint](http://www.jshint.com/) on compilation.

## Installation

Install the bundle using composer (see [http://getcomposer.org/](http://getcomposer.org/) for more information about composer) by adding it to your `composer.json` file and running `composer update`:

```JavaScript
    // composer.json

    "require": {
        // ...
        "codelovers/assetic-jshint": "dev-master",
        "codelovers/assetic-jshint-bundle": "dev-master"
    }
```

Then just add the bundle to your `AppKernel.php` file:

```PHP
<?php
// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new CodeLovers\JsHintBundle\CodeLoversJsHintBundle(),
    // ...
);
```

### Install JsHint

You will need to install JsHint to use this bundle. We assume you already have installed [node.js](http://nodejs.org/):

    npm install -g jshint

## Configuration

All you need to configure is the path to your jshint binary. Most likely it will be `/usr/bin/jshint` (that's the default value of the bundle's configuration) or `/usr/local/bin/jshint`

```YAML
code_lovers_js_hint:
    jshint_bin: ~
```
        
        
## Usage

Simply apply the filter to your JavaScript assets:

``` html+jinja
{% javascripts
 '@AcmeDemoBundle/Resources/js/app.js'
 filter='jshint' output='compiled/js/app.js' %} ... {% endjavascripts %}
```
    
