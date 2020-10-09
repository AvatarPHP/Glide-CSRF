<p align="center"><img src="static/logo-small.png" alt="Mark Text" width="100" height="100"></p>

<h1 align="center">Glide CSRF</h1>

<div align="center">
  <a href="https://twitter.com/intent/tweet?via=marktextme&url=https://github.com/marktext/marktext/&text=What%20do%20you%20want%20to%20say%20to%20app?&hashtags=happyMarkText">
    <img src="https://img.shields.io/twitter/url/https/github.com/marktext/marktext.svg?style=for-the-badge" alt="twitter">
  </a>
</div>
<div align="center">
  <strong>:high_brightness: A Minimal CSRF(Cross Site Request Forgery) Protection Package :crescent_moon:</strong><br>
  A simple and elegant open-source Minimal CSRF(Cross Site Request Forgery) Protection Package written in the PHP language..<br>
  <sub>Available for Linux, macOS and Windows.</sub>
</div>

<br>

<div align="center">
  <!-- Version -->
  <a href="https://marktext.github.io/website">
    <img src="https://badge.fury.io/gh/jocs%2Fmarktext.svg" alt="website">
  </a>
  <!-- License -->
  <a href="LICENSE">
    <img src="https://img.shields.io/github/license/marktext/marktext.svg" alt="LICENSE">
  </a>
  <!-- Build Status -->
  <a href="https://travis-ci.org/marktext/marktext/">
    <img src="https://travis-ci.org/marktext/marktext.svg?branch=master" alt="build">
  </a>
  <a href="https://ci.appveyor.com/project/marktext/marktext/branch/master">
    <img src="https://ci.appveyor.com/api/projects/status/l4gxgydj0i95hmxg/branch/master?svg=true" alt="build">
  </a>
  <!-- Downloads total --> 
  <a href="https://github.com/marktext/marktext/releases">
    <img src="https://img.shields.io/github/downloads/marktext/marktext/total.svg" alt="total download">
  </a>
  <!-- Downloads latest release -->
  <a href="https://github.com/marktext/marktext/releases/latest">
    <img src="https://img.shields.io/github/downloads/marktext/marktext/v0.16.2/total.svg" alt="latest download">
  </a>
  <!-- sponsors -->
  <a href="https://opencollective.com/marktext">
    <img src="https://opencollective.com/marktext/tiers/silver-sponsors/badge.svg?label=SilverSponsors&color=brightgreen" alt="sponsors">
  </a>
</div>

<div align="center">
  <h3>
    <a href="https://marktext.app">
      Website
    </a>
    <span> | </span>
    <a href="https://github.com/marktext/marktext#features">
      Features
    </a>
    <span> | </span>
    <a href="https://github.com/marktext/marktext#download-and-installation">
      Downloads
    </a>
    <span> | </span>
    <a href="https://github.com/marktext/marktext#development">
      Development
    </a>
    <span> | </span>
    <a href="https://github.com/marktext/marktext#contribution">
      Contribution
    </a>
  </h3>
</div>

<div align="center">
  <sub>Translations:</sub>
  <a href="docs/i18n/zh_cn.md#readme">
    <span>:cn:</span>
  </a>
  <a href="docs/i18n/zh_tw.md#readme">
    <span>:taiwan:</span>
  </a>
  <a href="docs/i18n/pl.md#readme">
    <span>:poland:</span>
  </a>
  <a href="docs/i18n/ja.md#readme">
    <span>:jp:</span>
  </a>
  <a href="docs/i18n/french.md#readme">
    <span>:fr:</span>
  </a>
  <a href="docs/i18n/tr.md#readme">
    <span>:tr:</span>
  </a>
  <a href="docs/i18n/spanish.md#readme">
    <span>:es:</span>
  </a>
  <a href="docs/i18n/pt.md#readme">
    <span>:portugal:</span>
  </a>
  <a href="docs/i18n/ko.md#readme">
    <span>:kr:</span>
  </a>
</div>

<div align="center">
  <sub>This Markdown editor that could. Built with ❤︎ by
    <a href="https://github.com/Jocs">Jocs</a> and
    <a href="https://github.com/marktext/marktext/graphs/contributors">
      contributors
    </a>
  </sub>
</div>

<br />

<h2 align="center">Supporting Mark Text</h2>
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
