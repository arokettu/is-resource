<?php

function assert_true($value, $message = null)
{
    if ($value !== true) {
        throw new RuntimeException($message ?: 'Failed to assert that value is true');
    }
}
