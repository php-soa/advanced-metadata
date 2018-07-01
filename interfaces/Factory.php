<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 27.06.18
 * Time: 22:01
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOAClassNotFoundException;
use SOA\Exceptions\SOALogicException;

/**
 * Interface Factory
 * @package SOA\Interfaces
 */
interface Factory {

    /**
     * @param array ...$params
     * @return mixed
     *
     * @throws SOAInvalidParameterException
     * @throws SOAClassNotFoundException
     * @throws SOALogicException
     */
    public function create(...$params): mixed;
}
