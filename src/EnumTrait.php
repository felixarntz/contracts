<?php
/**
 * Trait FelixArntz\Contracts\EnumTrait
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

use ReflectionClass;

/**
 * Trait for an enum.
 *
 * @since 1.0.0
 */
trait EnumTrait
{

    /**
     * List of constants.
     *
     * @since 1.0.0
     * @var array
     */
    protected static $constList;

    /**
     * Gets all possible values as an array.
     *
     * @since 1.0.0
     *
     * @return array List of constants.
     */
    public static function getConstList() : array
    {
        if (static::$constList === null) {
            $reflection        = new ReflectionClass(get_called_class());
            static::$constList = array_values($reflection->getConstants());
        }

        return static::$constList;
    }
}
