<?php

function beautify($string)
{
    return str_replace(array('  ', ')'), array('            ', '        )'), $string);
}
