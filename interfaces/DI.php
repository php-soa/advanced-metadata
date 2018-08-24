<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 22.06.18
 * Time: 21:53
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOAClassNotFoundException;
use SOA\Exceptions\SOAOutOfBoundsException;
use SOA\Exceptions\SOALogicException;

/**
 * Interface DI
 * @package SOA\Interfaces
 */
interface DI extends Singleton {

    /**
     * Example of use:
     *
     * <code>
     *   0. set($object);
     *   1. set(Object::class);
     *   2. set(array(Interface::class => Object::class));
     *   3. set(array('factory' => Factory::class)); // default method use create
     *   4. set(array('factory' => Factory::class, 'method' => 'myCreate'));
     *   5. set(array('interface' => Interfaces::class, 'factory' => Factory::class));
     * </code>
     *
     * @param mixed $instance
     * @param null|string $alas
     * @return bool
     *
     * @throws SOAInvalidParameterException
     * @throws SOAClassNotFoundException
     */
    public function set(mixed $instance, $alas = null): bool;

    // ########################################

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    // ########################################

    /**
     * @param string $name
     * @param bool $new
     * @param array ...$params
     * @return object
     *
     * @throws SOAInvalidParameterException
     * @throws SOAClassNotFoundException
     * @throws SOAOutOfBoundsException // When alas absent.
     * @throws SOALogicException
     */
    public function get(string $name, bool $new = false, ...$params): object;

    // ########################################

    /**
     * @param array $params
     * @return DI
     *
     * @throws SOAInvalidParameterException
     */
    public static function getInstance(...$params): DI;
}
