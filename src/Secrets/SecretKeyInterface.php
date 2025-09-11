<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

use Charcoal\Contracts\Buffers\Sensitive\SensitiveKeyBufferInterface;

/**
 * Represents an interface for a secret key, extending the sensitive key buffer capabilities.
 */
interface SecretKeyInterface extends SensitiveKeyBufferInterface
{
    public function id(): string;

    public function version(): int;

    public function handleRequest(SecretsUtilityInterface $class, string $method, null|string|object $subject): object;
}