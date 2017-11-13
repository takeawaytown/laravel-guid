<?php

namespace TakeawayTown\LaravelGuid;

/**
 * Class Guid
 * @package takeawaytown\laravel-guid
 * @author Alex Scott <alex.scott@takeawaytown.co.uk>
 */
class Guid
{
    /**
     * Validates that a string is a valid GUID, without dashes
     * @param string $guid Any string
     * @return bool
     */
    public static function validGuid($guid)
    {
        if (preg_match('/^\{?[a-z0-9]{8}[a-z0-9]{4}[a-z0-9]{4}[a-z0-9]{4}[a-z0-9]{12}\}?$/', strtolower($guid))) {
            return true;
        }
        return false;
    }

    /**
     * Creates a 32 character GUID string
     * @return string
     */
    public static function createGuid()
    {
        return strtolower(sprintf( '%04x%04x%04x%04x%04x%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,
            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        ));
    }
}
