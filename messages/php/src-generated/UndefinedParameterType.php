<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the UndefinedParameterType message in Cucumber's message protocol
 * @see https://github.com/cucumber/common/tree/main/messages#readme
 *
 */
final class UndefinedParameterType implements JsonSerializable
{
    use JsonEncodingTrait;

    /**
     * Construct the UndefinedParameterType with all properties
     *
     */
    public function __construct(
        public readonly string $expression = '',
        public readonly string $name = '',
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureExpression($arr);
        self::ensureName($arr);

        return new self(
            (string) $arr['expression'],
            (string) $arr['name'],
        );
    }

    /**
     * @psalm-assert array{expression: string|int|bool} $arr
     */
    private static function ensureExpression(array $arr): void
    {
        if (!array_key_exists('expression', $arr)) {
            throw new SchemaViolationException('Property \'expression\' is required but was not found');
        }
        if (array_key_exists('expression', $arr) && is_array($arr['expression'])) {
            throw new SchemaViolationException('Property \'expression\' was array');
        }
    }

    /**
     * @psalm-assert array{name: string|int|bool} $arr
     */
    private static function ensureName(array $arr): void
    {
        if (!array_key_exists('name', $arr)) {
            throw new SchemaViolationException('Property \'name\' is required but was not found');
        }
        if (array_key_exists('name', $arr) && is_array($arr['name'])) {
            throw new SchemaViolationException('Property \'name\' was array');
        }
    }
}
