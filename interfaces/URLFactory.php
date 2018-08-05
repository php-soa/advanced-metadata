<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 23.06.18
 * Time: 14:15
 */

namespace SOA\Interfaces;


/**
 * Interface URLFactory
 * @package SOA\Interfaces
 */
interface URLFactory extends Factory {

    /**
     * {@inheritdoc}
     */
    public function create(...$params): URL;
}
