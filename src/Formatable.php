<?php
/**
 * Class FelixArntz\Contracts\Formatable
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

/**
 * Interface for a formatable.
 *
 * @since 1.0.0
 */
interface Formatable
{

    /**
     * Formats the instance.
     *
     * @since 1.0.0
     *
     * @param int $flags Optional. Bitwise flags to adjust formatting. Default 0.
     * @return mixed Formatted data.
     */
    public function format(int $flags = 0);
}
