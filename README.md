<p align="center"><img src="http://logo.m-sarfaraz.com/AvatarPHP/Glide-CSRF/Glide-CSRF.png" alt="Glide CSRF" width="150" height="150"></p>

<h1 align="center">Glide CSRF</h1>

<div align="center">
  
</div>
<div align="center">
  <strong>:high_brightness: A Minimal CSRF(Cross Site Request Forgery) Protection Package :crescent_moon:</strong><br>
  A simple and elegant open-source Minimal CSRF(Cross Site Request Forgery) Protection Package written in the PHP language.<br>
</div>

<br>

<div align="center">
  <!-- Version -->
  <a href="https://github.com/AvatarPHP/Glide-CSRF">
    <img src="https://badge.fury.io/gh/AvatarPHP%2FGlide-CSRF.svg" alt="website">
  </a>
  <!-- License -->
  <a href="LICENSE">
    <img src="https://img.shields.io/github/license/marktext/marktext.svg" alt="LICENSE">
  </a>
  <!-- Downloads total --> 
  <a href="https://github.com/AvatarPHP/Glide-CSRF/releases">
    <img src="https://img.shields.io/github/downloads/AvatarPHP/Glide-CSRF/total" alt="total download">
  </a>
</div>

<div align="center">
  <h3>
    <a href="http://www.glide.m-sarfaraz.com/">
      Website
    </a>
    <span> | </span>
    <a href="https://github.com/AvatarPHP/Glide-CSRF/tree/master/docs/DOCUMENTATION.md">
      Docs
    </a>
    <span> | </span>
    <a href="https://github.com/AvatarPHP/Glide-CSRF#contribution">
      Contribution
    </a>
  </h3>
</div>

<div align="center">
  <sub>with ❤︎ by Sarfaraz 
  </sub>
</div>

<br />

## Notice
Beta Version Release

## Requirements
PHP 5.6.0 and later.


## Composer

You can install the bindings via Composer. Run the following command:

```composer require avatarphp/glide-csrf```

To use the bindings, use Composer's autoload:

```require_once('vendor/autoload.php');```

## Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the init.php file.

```require_once('/path/to/glide-csrf/src/glide.php');```

## Getting Started

Simple usage looks like:

```php 
$csrf=new Glide();

echo $csrf->token(); 
  ```

Verify the token

```php 

if(Glide::validate($key)){
    //next phase
};

  ```
Please read the [documentation](docs/DOCUMENTATION.md) 

## Contribution

Please read the [Contributing Guide](CONTRIBUTING.md) 

## Contributors

Special thanks to @[jocs](https://github.com/jocs)


## License

[**MIT**](LICENSE).
