<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 02.08.18
 * Time: 21:42
 */

namespace SOA\Interfaces;


/**
 * Interface Prototype
 * @package SOA\Interfaces
 */
interface Prototype {

    public function __clone(): void;
}
