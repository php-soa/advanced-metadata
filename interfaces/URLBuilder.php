<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 23.06.18
 * Time: 14:07
 */

namespace SOA\Interfaces;


use SOA\Exceptions\SOALogicException;

/**
 * Interface URLBuilder
 * @package SOA\Interfaces
 */
interface URLBuilder {

    /**
     * @param URL $url
     * @return string
     *
     * @throws SOALogicException
     */
    public function get(URL $url): string;
}
