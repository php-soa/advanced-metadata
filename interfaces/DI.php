<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 22.06.18
 * Time: 21:53
 */

namespace SOA\Interfaces;


use SOA\Exceptions\InvalidParameterException;
use SOA\Exceptions\ClassNotFoundException;
use SOA\Exceptions\OutOfBoundsException;
use SOA\Exceptions\LogicException;

/**
 * Interface DI
 * @package SOA\Interfaces
 */
interface DI extends Singleton {

    /**
     * <code>
     *  Example of use:
     *      1. createByFactory((Factory Interface) ObjectFactory::class, $params);
     *      2. createByFactory((Factory Interface) $object, $params);
     *
     *      3. createByFactory(array(ObjectFactory::class => 'make'), $params);
     *      4. createByFactory(array($object => 'createFactory'), $params);
     * </code>
     *
     * @param mixed $factory
     * @param array ...$params
     * @return object
     *
     * @throws InvalidParameterException
     * @throws ClassNotFoundException
     * @throws LogicException
     */
    public function createByFactory(mixed $factory, ...$params): object;

    // ----------------------------------------

    /**
     * @param string $name
     * @param array ...$params
     * @return object
     *
     * @throws InvalidParameterException
     * @throws ClassNotFoundException
     * @throws LogicException
     */
    public function create(string $name, ...$params): object;

    // ----------------------------------------

    /**
     * <code>
     *  Example of use:
     *      1. set($object, $alas);
     *      2. set(Object::class, $alas);
     *      3. set(array(Interface::class => Object::class), $alas);
     * </code>
     *
     * @param mixed $instance
     * @param null|string $alas
     * @return bool
     *
     * @throws LogicException
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
     * @return object
     *
     * @throws ClassNotFoundException
     * @throws OutOfBoundsException // When alas absent.
     * @throws LogicException
     */
    public function get(string $name): object;

    // ########################################

    /**
     * @param array $params
     * @return DI
     *
     * @throws InvalidParameterException
     * @throws LogicException
     */
    public static function getInstance(...$params): DI;
}
