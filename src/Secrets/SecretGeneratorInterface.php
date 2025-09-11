<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

/**
 * Contract for PRNG (pseudo-random number generator) or another cryptographically secure
 * secret entropy generator.
 */
interface SecretGeneratorInterface
{
    public static function generate(int $length): string;
}