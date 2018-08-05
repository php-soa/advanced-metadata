<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 09.05.18
 * Time: 22:46
 */

namespace SOA\Traits;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOALogicException;
use SOA\Interfaces\Singleton;

/**
 * Trait SingletonTrait
 * @package SOA\Traits
 */
trait SingletonTrait {

    /** @var Singleton $instance */
    protected static $instance;

    // ########################################

    private function __construct(...$params) {}

    private function __sleep(): void {}

    private function __wakeup(): void  {}

    private function __clone() {}

    // ########################################

    /**
     * @param array ...$params
     * @return self
     *
     * @throws SOAInvalidParameterException
     * @throws SOALogicException
     */
    public static function getInstance(...$params): self {

        if (null === self::$instance) {
            self::$instance = new self($params);
        }

        return self::$instance;
    }
}
