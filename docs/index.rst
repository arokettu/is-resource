PHP Resource Compatibility Helper
#################################

Make your code future compatible with opaque objects

The problem:

.. code-block:: php

    <?php

    $hash = hash_init('md5');

    is_resource($hash); // true in PHP <= 7.1, false in PHP >= 7.2
    get_resource_type(); // "Hash Context" in PHP <= 7.1, null + warning in PHP >= 7.2

Solution:

.. code-block:: php

    <?php

    $hash = hash_init('md5');

    \Arokettu\IsResource\is_resource($hash); // true
    \Arokettu\IsResource\get_resource_type($hash); // "Hash Context"

**This is an alpha version.**
Currently it only supports changes from PHP 5.6 and PHP 7.2 but the goal is to ease future migration to PHP 8.1.

TODO:

* alpha 2
  * PHP 8.0 changes
* alpha 3
  * PHP 8.1 changes
* 1.0.0:
  * tests
  * documentation
