<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

use Charcoal\Contracts\Buffers\Sensitive\SensitiveKeyBufferInterface;
use Charcoal\Contracts\Security\Cipher\Cipher\CipherBindingEnumInterface;

/**
 * Represents an interface for a secret key, extending the sensitive key buffer capabilities.
 */
interface SecretKeyInterface extends SensitiveKeyBufferInterface
{
    public function id(): string;

    public function version(): int;

    public function cipher(): CipherBindingEnumInterface;

    public function request(SecretsUtilityInterface $class, string $method, ?object $subject): object;
}