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
use SOA\Exceptions\SOALogicException;

/**
 * Interface DIFactory
 * @package SOA\Interfaces
 */
interface DIFactory extends Factory {

    /**
     * @param array ...$params
     * @return DI
     *
     * @throws SOAInvalidParameterException
     * @throws SOAClassNotFoundException
     * @throws SOALogicException
     */
    public function create(...$params): DI;
}
