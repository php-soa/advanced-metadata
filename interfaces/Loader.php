<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 30.06.18
 * Time: 10:04
 */

namespace SOA\Interfaces;


use Composer\Autoload\ClassLoader;

/**
 * Interface Loader.
 *
 * <code>
 *  Example of use:
 *   $pathClassLoader = DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, array('..', 'vendor', 'autoload.php'));
 *   $classLoader = require __DIR__ . $pathClassLoader;
 *
 *   $loader = new \SOA\Interfaces\Loader($classLoader);
 *   $loader->process(\SOA\Interfaces\Service::class);
 * </code>
 *
 * @package SOA\Interfaces
 */
interface Loader {

    /**
     * Loader constructor.
     *
     * @param ClassLoader $classLoader
     */
    public function __construct(ClassLoader $classLoader);

    // ########################################

    /**
     * @param string $instance
     */
    public function process(string $instance): void;
}
