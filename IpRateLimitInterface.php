<?php

namespace ethercreative\ratelimiter;

use yii\filters\RateLimitInterface;

/**
 * Interface IpRateLimitInterface
 *
 * @package ethercreative\ratelimiter
 */
interface IpRateLimitInterface extends RateLimitInterface
{
    /**
     * Returns a surrogate user with the IP address assigned.
     *
     * @param string $ip
     * @param int $rateLimit
     * @param int $timePeriod
     *
     * @return static
     */
    public static function findByIp($ip, $rateLimit, $timePeriod);
}