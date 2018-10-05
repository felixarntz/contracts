<?php
/**
 * Interface FelixArntz\Contracts\Sanitizable
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

/**
 * Interface for a sanitizable.
 *
 * @since 1.0.0
 */
interface Sanitizable
{

    /**
     * Sanitizes the instance.
     *
     * @since 1.0.0
     *
     * @return mixed Sanitized data.
     */
    public function sanitize();
}
