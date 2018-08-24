<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 30.06.18
 * Time: 10:04
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use Composer\Autoload\ClassLoader;

/**
 * Interface Loader.
 *
 * <code>
 *  Example of use:
 *   $pathClassLoader = DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, array('..', 'vendor', 'autoload.php'));
 *   $classLoader = require __DIR__ . $pathClassLoader;
 *
 *   $loader = new \SOA\Core\Loader($classLoader);
 *   $loader->process(\Acme\MyService::class);
 * </code>
 *
 * <code>
 *  Lifecycle process method:
 *
 *    $this->beforeBootstrap();
 *    $this->service->main($params);
 *    $this->afterBootstrap();
 *    $this->shutdown();
 * </code>
 *
 * @package SOA\Core
 */
interface Loader {

    /**
     * Loader constructor.
     *
     * @param ClassLoader $classLoader
     */
    public function __construct(ClassLoader $classLoader);

    // ########################################

    public function beforeBootstrap(): void;

    // ----------------------------------------

    public function afterBootstrap(): void;

    // ----------------------------------------

    public function shutdown(): void;

    // ########################################

    /**
     * @param string $instance
     *
     * @throws SOAInvalidParameterException // If instance not implements Service interface.
     */
    public function process(string $instance): void;
}
