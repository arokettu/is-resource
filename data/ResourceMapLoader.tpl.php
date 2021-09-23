<?php echo "<?php\n" ?>

namespace Arokettu\IsResource;

<?php foreach ($versions as $version): ?>
if (PHP_VERSION_ID >= <?php echo $version ?>) {
    require __DIR__ . '/gen/ResourceMap<?php echo $version ?>.php';
    class_alias('Arokettu\\IsResource\\ResourceMap<?php echo $version ?>', 'Arokettu\\IsResource\\ResourceMap');
    return;
}

<?php endforeach; ?>
class_alias('Arokettu\\IsResource\\ResourceMapEmpty', 'Arokettu\\IsResource\\ResourceMap');

if (\false) {
    /**
     * @internal
     * @generated
     */
    final class ResourceMap
    {
        /**
         * @return array
         */
        public static function map()
        {
            return array();
        }
    }
}
