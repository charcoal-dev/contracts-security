<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Encrypted;

use Charcoal\Contracts\Encoding\EncodingSchemeStaticInterface;
use Charcoal\Contracts\Security\Cipher\CipherAlgorithmInterface;

/**
 * Represents an encrypted string interface which extends the functionality of an immutable buffer.
 */
interface EncryptedStringInterface
{
    public function algo(): CipherAlgorithmInterface;

    public function kid(): string;

    public function iv(): string;

    public function tag(): ?string;

    public function ciphertext(): string;

    public function encodeDto(
        EncodingSchemeStaticInterface $encoding,
        string                        $algo = "algo",
        string                        $cipherText = "ciphertext",
        string                        $iv = "iv",
        ?string                       $tag = "tag",
        ?string                       $keyRef = null
    ): array;

    public function encodeString(
        EncodingSchemeStaticInterface $encoding,
        string                        $tpl = "{algo}{iv}{tag}{cipherText}{keyRef}",
    ): string;
}