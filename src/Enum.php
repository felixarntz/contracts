<?php
/**
 * Interface FelixArntz\Contracts\Enum
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

/**
 * Interface for an enum.
 *
 * @since 1.0.0
 */
interface Enum
{

    /**
     * Gets all possible values as an array.
     *
     * @since 1.0.0
     *
     * @return array List of constants.
     */
    public static function getConstList() : array;
}
