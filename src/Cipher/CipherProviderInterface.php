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
    /**
     * Encrypts a string using the specified algorithm and secret key.
     */
    public function encryptString(
        CipherAlgorithmInterface $algo,
        SecretKeyInterface       $key,
        string                   $input
    ): EncryptedStringInterface;

    /**
     * Encrypts an object using the specified algorithm and secret key.
     */
    public function encryptObject(
        CipherAlgorithmInterface $algo,
        SecretKeyInterface       $key,
        object                   $input
    ): EncryptedObjectInterface;

    /**
     * Decrypts an encrypted string using the specified algorithm and secret key.
     */
    public function decrypt(
        CipherAlgorithmInterface $algo,
        EncryptedStringInterface $input
    ): string|object;
}