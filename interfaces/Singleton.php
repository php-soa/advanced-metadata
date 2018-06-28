<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 09.05.18
 * Time: 22:42
 */

namespace SOA\Interfaces;


use SOA\Exceptions\InvalidParameterException;
use SOA\Exceptions\LogicException;

/**
 * Interface Singleton
 * @package SOA\Interfaces
 */
interface Singleton {

    /**
     * @param array ...$params
     * @return mixed
     *
     * @throws InvalidParameterException
     * @throws LogicException
     */
    public static function getInstance(...$params): mixed;
}
