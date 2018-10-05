<?php
/**
 * Class FelixArntz\Contracts\Registerable
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

use FelixArntz\Contracts\Exception\RegistrationException;

/**
 * Interface for a registerable.
 *
 * @since 1.0.0
 */
interface Registerable
{

    /**
     * Register the instance.
     *
     * @since 1.0.0
     *
     * @throws RegistrationException Thrown if registration fails.
     */
    public function register();
}
