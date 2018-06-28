<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 27.06.18
 * Time: 22:01
 */

namespace SOA\Interfaces;


use SOA\Exceptions\InvalidParameterException;
use SOA\Exceptions\ClassNotFoundException;
use SOA\Exceptions\LogicException;

/**
 * Interface Factory
 * @package SOA\Interfaces
 */
interface Factory {

    /**
     * @param array ...$params
     * @return mixed
     *
     * @throws InvalidParameterException
     * @throws ClassNotFoundException
     * @throws LogicException
     */
    public function create(...$params): mixed;
}
