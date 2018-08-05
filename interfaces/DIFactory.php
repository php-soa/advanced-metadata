<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 22.06.18
 * Time: 21:53
 */

namespace SOA\Interfaces;


/**
 * Interface DIFactory
 * @package SOA\Interfaces
 */
interface DIFactory extends Factory {

    /**
     * {@inheritdoc}
     */
    public function create(...$params): DI;
}
