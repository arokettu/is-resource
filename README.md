# IsResource: PHP Resource Compatibility Helper

Make your code future compatible with opaque objects

The problem:

```php
<?php

$hash = hash_init('md5');

is_resource($hash); // true in PHP <= 7.1, false in PHP >= 7.2
get_resource_type(); // "Hash Context" in PHP <= 7.1, null + warning in PHP >= 7.2
```

The solution:

```php
<?php

$hash = hash_init('md5');

\Arokettu\IsResource\is_resource($hash); // true
\Arokettu\IsResource\get_resource_type($hash); // "Hash Context"
```

**This is an alpha version.**

TODO:

* 1.0.0:
  * documentation
