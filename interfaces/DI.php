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

/**
 * Interface DI
 * @package SOA\Interfaces
 */
interface DI extends Singleton {

    /**
     * This method is based on lazy loading.
     *
     * <code>
     *  Example of use:
     *    1. $di->set($object, [$alas]);
     *    2. $di->set(Object::class, [$alas]);
     *    3. $di->set(array(Interface::class => Object::class), [$alas]);
     *
     *  Example use singleton if (ObjectSingleton implements Singleton):
     *    4. $di->set(ObjectSingleton::class, [$alas]);
     *
     *  Example use custom singleton:
     *    5. $di->set(ObjectSingleton::class, array('singleton' => true, 'method' => 'getMyObject'));
     *
     *  Example use factory if (ObjectFactory implements Factory):
     *    6. $di->set(ObjectFactory::class, [$alas]); // ObjectFactory must specify the type of the object to return.
     *    7. $di->set(Object::class, array('factory' => ObjectFactory::class));
     *
     *  Example use custom factory:
     *    8. $di->set(Object::class, array('factory' => Factory::class, 'method' => 'makeObject'));
     *
     *  Example use builder if (ObjectBuilder implements Builder):
     *    9. $di->set(ObjectBuilder::class, [$alas]); // ObjectBuilder must specify the type of the object to return.
     *   10. $di->set(Object::class, array('builder' => ObjectBuilder::class));
     *
     *  Example use custom builder:
     *   11. $di->set(Object::class, array('builder' => Builder::class, 'method' => 'makeBuildObject'));
     *
     *  Example use prototype if (ObjectPrototype implements Prototype):
     *   12. $di->set(ObjectPrototype::class, [$alas]);
     *
     *  Example use custom prototype:
     *   13. $di->set(Object::class, array('prototype' => true));
     * </code>
     *
     * @param mixed $instance
     * @param array $params
     * @return bool
     *
     * @throws SOAInvalidParameterException // Bad params.
     */
    public function set(mixed $instance, ...$params): bool;

    // ########################################

    /**
     * <code>
     *  Example of use:
     *   1. $di->has(\Acme\Object::class);
     *   2. $di->has('my_alas');
     * </code>
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    // ----------------------------------------

    /**
     * <code>
     *  Example of use:
     *   1. $di->get(\Acme\Object::class, [$params]);
     *   2. $di->get('my_alas', [$params]);
     * </code>
     *
     * @param string $key
     * @param mixed $params
     * @return object
     *
     * @throws SOAClassNotFoundException
     * @throws SOAOutOfBoundsException // When alas absent.
     * @throws SOAInvalidParameterException // Bad params.
     */
    public function get(string $key, ...$params): object;

    // ########################################

    /**
     * {@inheritdoc}
     */
    public static function getInstance(...$params): self;
}
