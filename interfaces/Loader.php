<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 30.06.18
 * Time: 10:04
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOAClassNotFoundException;
use Composer\Autoload\ClassLoader;
use SOA\Exceptions\SOAException;

/**
 * Interface Loader. <br> <br>
 *
 * Example of use:
 * <code>
 *  $pathClassLoader = DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, array('..', 'vendor', 'autoload.php'));
 *  $classLoader = require __DIR__ . $pathClassLoader;
 *
 *  $loader = new \SOA\Interfaces\Loader($classLoader);
 *  $loader->process(\SOA\Interfaces\Service::class);
 * </code> <br>
 *
 * Lifecycle process method:
 * <code>
 *  $this->beforeBootstrap();
 *  $this->service->main($params);
 *  $this->afterBootstrap();
 *  $this->shutdown();
 * </code>
 *
 * @package SOA\Interfaces
 */
interface Loader {

    /**
     * Loader constructor.
     * @param ClassLoader $classLoader
     *
     * @throws SOAInvalidParameterException
     * @throws SOAException
     */
    public function __construct(ClassLoader $classLoader);

    /**
     * @param string $instance
     *
     * @throws SOAClassNotFoundException
     * @throws SOAException
     */
    public function process(string $instance): void;
}
