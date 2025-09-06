<?php
/**
 * @var string $version
 * @var array $map
 */
?>
<?php echo "<?php\n" ?>

/**
 * @copyright 2021 Anton Smirnov
 * @license MIT https://spdx.org/licenses/MIT.html
 */

namespace Arokettu\IsResource;

/**
 * @internal
 * @generated
 */
final class ResourceMap<?php echo $version, "\n" ?>
{
    /**
     * @return array
     */
    public static function map()
    {
        return <?php echo export($map) ?>;
    }
}
