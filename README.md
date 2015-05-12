## INSTALLATION

### Symfony 1.4.20

####  Git

Git submodule add:

	$ git submodule add https://github.com/northway/symfony.git lib/vendor/symfony

Git submodule update:

	$ git submodule update --remote

#### Symfony

Symfony start project (Propel):

	$ php lib/vendor/symfony/data/bin/symfony generate:project NAME --orm=Propel

Symfony app create (frontend/backend):

	$ php symfony generate:app frontend

Symfony folder permissions:

	$ php symfony project:permissions

Symfony core symlinks:

	$ php symfony plugin:publish-assets

#### Optional

PHP 5.5 error handle (settings.yml):

	dev:
		.settings:
			error_reporting: <?php echo ((E_ALL | E_STRICT) ^ E_DEPRECATED)."\n" ?>

## LICENSE

Symfony is a complete framework designed to optimize the development of web applications by way of several key features.
For starters, it separates a web application's business rules, server logic, and presentation views.
It contains numerous tools and classes aimed at shortening the development time of a complex web application.
Additionally, it automates common tasks so that the developer can focus entirely on the specifics of an application.
The end result of these advantages means there is no need to reinvent the wheel every time a new web application is built!

Symfony was written entirely in PHP 5.
It has been thoroughly tested in various real-world projects, and is actually in use for high-demand e-business websites.
It is compatible with most of the available databases engines, including MySQL, PostgreSQL, Oracle, and Microsoft SQL Server.
It runs on linux and Windows platforms.

For more see LICENSE file
