<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 31.07.18
 * Time: 0:26
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOAInvalidParameterException;

/**
 * Interface Builder
 * @package SOA\Interfaces
 */
interface Builder {

    /**
     * @param array ...$params
     * @return mixed
     *
     * @throws SOAInvalidParameterException // Bad params.
     */
    public function build(...$params): mixed;
}
