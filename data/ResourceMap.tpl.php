<?php echo "<?php\n" ?>

namespace Arokettu\IsResource;
<?php echo isset($code) ? $code : '' ?>

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
