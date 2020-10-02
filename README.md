# Glide-CSRF
A Minimal CSRF(Cross Site Request Forgery) Protection Package written in the PHP language.

# Notice
Still under development

# Requirements
PHP 5.6.0 and later.



# Composer

You can install the bindings via Composer. Run the following command:

```composer require avatarphp/glide-csrf```

To use the bindings, use Composer's autoload:

```require_once('vendor/autoload.php');```

# Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the init.php file.

```require_once('/path/to/glide-csrf/src/glide.php');```

# Getting Started

Simple usage looks like:

```php 
$csrf=new Glide();

echo $csrf->token(); 
  ```
