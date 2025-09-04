<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Cipher;

use Charcoal\Contracts\Security\Encrypted\EncryptedObjectInterface;
use Charcoal\Contracts\Security\Encrypted\EncryptedStringInterface;
use Charcoal\Contracts\Security\Secrets\SecretKeyInterface;
use Charcoal\Contracts\Security\Secrets\SecretsUtilityInterface;

/**
 * Provides methods for encrypting and decrypting strings and objects with the use of a secret key.
 */
interface CipherProviderInterface extends SecretsUtilityInterface
{
    public function encryptString(SecretKeyInterface $key, string $input): EncryptedStringInterface;

    public function encryptObject(SecretKeyInterface $key, object $input): EncryptedObjectInterface;

    public function decrypt(EncryptedStringInterface $input): string|object;
}