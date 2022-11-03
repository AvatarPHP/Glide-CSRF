## Getting Started

Generate CSRF token 

```php 

require('vendor/autoload.php');
use AvatarPHP\Glide;

$csrf=new Glide();

echo $csrf->token(); 

  ```

In html file


```html 

<input type="hidden" name="csrf_token" value="<?php echo $csrf->token(); ?> 
">

  ```


Verify the token

```php 

require('vendor/autoload.php');
use AvatarPHP\Glide;

$csrf=new Glide();

$token=$_POST['csrf_token'];


if(Glide::validate($key)){
    //next phase
};

  ```
  <br>
  
Destroy CSRF token
##### destroy ()
```php
$csrf->destroy();
```
<br>

Get session id
##### id ()

```php
$csrf->id();
```
<br>

Regenerate session id
##### Regenerate ()

```php
$csrf->regenerate();
```

<br>

Put session value
##### put ()

```php
$csrf->put($key,$value);
```
<br>

Get session value
##### get ()

```php
$csrf->get($key);
```
<br>

Get token value
##### token ()
```php
use Glide\Token\Engine;

$token = Engine::token();
```




