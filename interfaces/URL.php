<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 22.06.18
 * Time: 21:53
 */

namespace SOA\Interfaces;


/**
 * Interface URL
 * @package SOA\Interfaces
 */
interface URL {

    /**
     * @return string
     */
    public function getScheme(): string;

    /**
     * @param string $scheme
     */
    public function setScheme(string $scheme): void;

    // ########################################

    /**
     * @return string
     */
    public function getLogin(): string;

    /**
     * @param string $login
     */
    public function setLogin(string $login): void;

    // ----------------------------------------

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param string $password
     */
    public function setPassword(string $password): void;

    // ########################################

    /**
     * @return string
     */
    public function getHost(): string;

    /**
     * @param string $host
     */
    public function setHost(string $host): void;

    // ########################################

    /**
     * @return int
     */
    public function getPort(): int;

    /**
     * @param int $port
     */
    public function setPort(int $port): void;

    // ########################################

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @param string $path
     */
    public function setPath(string $path): void;

    // ########################################

    /**
     * @return string
     */
    public function getParameterDelimiter(): string;

    /**
     * @param string $delimiter
     */
    public function setParameterDelimiter(string $delimiter): void;

    // ----------------------------------------

    /**
     * @param string $key
     * @return mixed
     */
    public function getParameter(string $key): mixed;

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setParameter(string $key, mixed $value): void;

    // ########################################

    /**
     * @return string
     */
    public function getAnchor(): string;

    /**
     * @param string $anchor
     */
    public function setAnchor(string $anchor): void;
}
