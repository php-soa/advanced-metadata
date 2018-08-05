<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 05.08.18
 * Time: 20:58
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;
use SOA\Exceptions\SOAOutOfBoundsException;

/**
 * Interface Multiton
 * @package SOA\Interfaces
 */
interface Multiton {

    /**
     * @param string $key
     * @param array ...$params
     * @return mixed
     *
     * @throws SOAInvalidParameterException // Bad params.
     * @throws SOAOutOfBoundsException // if isset $key false.
     */
    public static function getInstance(string $key, ...$params): mixed;
}
