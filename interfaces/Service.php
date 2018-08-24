<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 30.06.18
 * Time: 11:01
 */

namespace SOA\Interfaces;


/**
 * Interface Service.
 *
 * <code>
 *  Example entry point service:
 *
 *  public function main(...$params): int {
 *     $di = $this->getDI();
 *     // todo code
 *     return 0;
 *  }
 * </code>
 *
 * @package SOA\Interfaces
 */
interface Service {

    /**
     * @return DI
     */
    public function getDI(): DI;

    // ########################################

    /**
     * @param array ...$params
     * @return int // return 0 if successful completion.
     */
    public function main(...$params): int;
}
