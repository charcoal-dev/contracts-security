<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

/**
 * Defines a contract for inspecting trusted classes that can interact with secrets.
 * SecretsStorageInterface (provider) should store this index as immutable on ctor.
 */
interface TrustedFqcnInterface
{
    public function canUtilizeSecrets(object|string $class): bool;

    public function isValidNamespace(object|string $class): bool;

    public function inspect(): array;
}