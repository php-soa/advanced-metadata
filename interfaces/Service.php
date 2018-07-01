<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 30.06.18
 * Time: 11:01
 */

namespace SOA\Interfaces;


/**
 * Interface Service <br> <br>
 *
 * <code>
 * public function main(...$params): int {
 *  $di = $this->getDI();
 *  // write code
 * }
 * </code>
 *
 * @package SOA\Interfaces
 */
interface Service {

    /**
     * @param array ...$params
     * @return int // return 0 if successful completion
     */
    public function main(...$params): int;
}
