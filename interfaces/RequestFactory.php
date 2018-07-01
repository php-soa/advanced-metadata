<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 29.06.18
 * Time: 21:54
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOAClassNotFoundException;
use SOA\Exceptions\SOALogicException;

/**
 * Interface RequestFactory
 * @package SOA\Interfaces
 */
interface RequestFactory extends Factory {

    /**
     * @param array ...$params
     * @return Request
     *
     * @throws SOAInvalidParameterException
     * @throws SOAClassNotFoundException
     * @throws SOALogicException // if run CLI area
     */
    public function create(...$params): Request;
}
