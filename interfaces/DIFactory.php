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
use SOA\Exceptions\LogicException;

/**
 * Interface DIFactory
 * @package SOA\Interfaces
 */
interface DIFactory extends Factory {

    /**
     * @param array ...$params
     * @return DI
     *
     * @throws InvalidParameterException
     * @throws ClassNotFoundException
     * @throws LogicException
     */
    public function create(...$params): DI;
}
