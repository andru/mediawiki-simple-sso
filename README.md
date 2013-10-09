MediaWiki SimpleSSO auth extension
====================

A MediaWiki extension to configure authentication to work using [SimpleSSO](http://github.com/andru/simple-sso)

#Installation
Just require the setup file in your MediaWiki settings file (usually LocalSettings.php)

```php
require( $IP . 'extensions/simple-sso/SimpleSSO.setup.php' );
```

#Configuration values
The only mandatory configuration needed is to set the URL of the SimpleSSO installation, eg.

```php
require( $IP . '/extensions/simple-sso/SimpleSSO.setup.php' );
$sso_url = 'https://'.$wgDomain.'/sso'; //SimpleSSO installation path
```

## $sso_url
This option is mandatory. Set it to the full URL of the SimpleSSO installation. There is no default value, omitting it will cause errors.

## $sso_redirect_on_edit [=false]
Set to true to redirect the user to the SimpleSSO login screen when they attempt to edit when not logged in. Default is false.