#!/usr/bin/env bash

PHP=${1:-php}
cd "$(dirname "$0")"

$PHP tests.php && $PHP --no-php-ini test_unloaded.php

exit $?
