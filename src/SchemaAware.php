<?php
/**
 * Interface FelixArntz\Contracts\SchemaAware
 *
 * @package FelixArntz\Contracts
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/contracts
 */

namespace FelixArntz\Contracts;

/**
 * Interface for a class that uses a schema.
 *
 * @since 1.0.0
 */
interface SchemaAware
{

    /**
     * Gets the schema that defines behavior of the instance.
     *
     * @since 1.0.0
     *
     * @return Schema The schema for the instance.
     */
    public function getSchema() : Schema;
}
