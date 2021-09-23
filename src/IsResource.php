<?php

namespace Arokettu\IsResource;

final class IsResource
{
    /**
     * @param mixed|resource|object $value
     * @return bool
     */
    public static function isResource($value)
    {
        // pass non objects to the vanilla function
        if (!\is_object($value)) {
            return \is_resource($value);
        }

        return \array_key_exists(\get_class($value), ResourceMap::resourceMap());
    }

    /**
     * @param resource|object $resource
     * @return string
     */
    public static function getResourceType($resource)
    {
        if (\is_object($resource)) {
            $resourceMap = ResourceMap::resourceMap();
            $class = \get_class($resource);

            if (\array_key_exists($class, $resourceMap)) {
                return $resourceMap[$class];
            }
        }

        // let it fail in the vanilla function for unknown classes too
        return \get_resource_type($resource);
    }
}
