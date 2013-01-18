Mapado TwigExtensions Bundle
====================

MapadoTwigExtensionsBundle is just a collection of useful Twig extensions.

This bundle should be used in conjunction with Symfony2.

### ParseUrl Filter

Provides an `parse_url` filter, to parse an url.

A call to [parse_url](http://php.net/manual/en/function.parse-url.php) is made.

	{{ someUrl | parse_url('host') }}

Will return the host of `someUrl` (or `false` if not found).

## Installation

### Get the bundle

Add this in your composer.json

```json
{
	"require": {
		"mapado/twig-extensions-bundle": "dev-master"
	}
}
```

and then run

```sh
php composer.phar update
```
or 
```sh
composer update
```
if you installed composer globally.

### Enable the bundle

```php
// in app/AppKernel.php
public function registerBundles() {
	$bundles = array(
		// ...
		new Mapado\TwigExtensionsBundle\MapadoTwigExtensionsBundle(),
	);
	// ...
}
```
