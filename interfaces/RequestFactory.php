<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 29.06.18
 * Time: 21:54
 */

namespace SOA\Interfaces;


/**
 * Interface RequestFactory
 * @package SOA\Interfaces
 */
interface RequestFactory extends Factory {

    /**
     * {@inheritdoc}
     */
    public function create(...$params): Request;
}
