<?php

function beautify($string)
{
    return str_replace(array('  ', ')'), array('            ', '        )'), $string);
}

function render($template, $values = array())
{
    extract($values);
    ob_start();
    require __DIR__ . '/../../data/' . $template . '.tpl.php';
    return ob_get_clean();
}
