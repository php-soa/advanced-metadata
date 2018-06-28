<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 23.06.18
 * Time: 14:15
 */

namespace SOA\Interfaces;


use SOA\Exceptions\InvalidParameterException;
use SOA\Exceptions\ClassNotFoundException;
use SOA\Exceptions\LogicException;

/**
 * Interface URLFactory
 * @package SOA\Interfaces
 */
interface URLFactory extends Factory {

    /**
     * @param array ...$params
     * @return URL
     *
     * @throws InvalidParameterException
     * @throws ClassNotFoundException
     * @throws LogicException
     */
    public function create(...$params): URL;
}
