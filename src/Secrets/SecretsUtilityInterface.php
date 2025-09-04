<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

/**
 * Defines a contract for requesting secrets from implemented classes.
 */
interface SecretsUtilityInterface
{
    public function requestSecret(SecretsUtilityInterface $class, string $method, ?object $subject): object;
}