<?php

namespace Arokettu\IsResource;

/**
 * @param mixed|resource|object $value
 * @return bool
 */
function is_resource($value)
{
    // pass non objects to the vanilla function
    if (!\is_object($value)) {
        return \is_resource($value);
    }

    $resourceMap = ResourceMap::map();
    $class = \get_class($value);

    return isset($resourceMap[$class]) && \extension_loaded($resourceMap[$class][0]);
}

/**
 * @param resource|object $resource
 */
function get_resource_type($resource)
{
    if (\is_object($resource)) {
        $resourceMap = ResourceMap::map();
        $class = \get_class($resource);

        if (isset($resourceMap[$class]) && \extension_loaded($resourceMap[$class][0])) {
            return $resourceMap[$class][1];
        }
    }

    // let it fail in the vanilla function for unknown classes too
    return \get_resource_type($resource);
}
