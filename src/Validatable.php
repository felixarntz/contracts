<?php
/**
 * Interface FelixArntz\Contracts\Validatable
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

use FelixArntz\Contracts\Exception\ValidationException;

/**
 * Interface for a validatable.
 *
 * @since 1.0.0
 */
interface Validatable
{

    /**
     * Validates the instance.
     *
     * @since 1.0.0
     *
     * @throws ValidationException Thrown if validation fails.
     */
    public function validate();
}
