<?php

namespace Arokettu\IsResource;

/**
 * @param mixed|resource|object $value
 * @return bool
 */
function is_resource($value)
{
    return IsResource::isResource($value);
}

/**
 * @param resource|object $resource
 */
function get_resource_type($resource)
{
    return IsResource::getResourceType($resource);
}
