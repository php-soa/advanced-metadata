<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: roma_bb8
 * Date: 29.06.18
 * Time: 21:53
 */

namespace SOA\Interfaces;


use SOA\Exceptions\InvalidParameterException;

/**
 * Interface Request
 * @package SOA\Interfaces
 */
interface Request {

    /**
     * @param URL $url
     */
    public function setURL(URL $url): void;

    /**
     * @return URL
     */
    public function getURL(): URL;

    // ########################################

    /**
     * @param string $method
     *
     * @throws InvalidParameterException // if not support or invalid method
     */
    public function setMethod(string $method): void;

    /**
     * @return string // default = GET
     */
    public function getMethod(): string;

    // ########################################

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setHeader(string $key, mixed $value): void;

    /**
     * @param string $key
     * @return bool
     */
    public function hasHeader(string $key): bool;

    /**
     * @param string $key
     * @param mixed|null $default
     * @return mixed|null
     */
    public function getHeader(string $key, mixed $default = null): ?mixed;

    // ########################################

    /**
     * @param mixed $body
     */
    public function setBody(mixed $body): void;

    /**
     * @return mixed
     */
    public function getBody(): mixed;

    // ########################################

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setCookie(string $key, mixed $value): void;

    /**
     * @param string $key
     * @return bool
     */
    public function hasCookie(string $key): bool;

    /**
     * @param string $key
     * @param mixed|null $default
     * @return mixed|null
     */
    public function getCookie(string $key, mixed $default = null): ?mixed;

    // ########################################

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setParameter(string $key, mixed $value): void;

    /**
     * @param string $key
     * @return bool
     */
    public function hasParameter(string $key): bool;

    /**
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    public function getParameter(string $key, mixed $default = null): mixed;
}
