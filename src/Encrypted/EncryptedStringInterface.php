<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Encrypted;

use Charcoal\Contracts\Buffers\Immutable\ImmutableBufferInterface;
use Charcoal\Contracts\Security\Encoding\CipherDataEncoderInterface;

/**
 * Represents an encrypted string interface which extends the functionality of an immutable buffer.
 */
interface EncryptedStringInterface extends ImmutableBufferInterface, CipherDataEncoderInterface
{
    public function iv(): CryptoTokenBufferInterface;

    public function kid(): string;

    public function tag(): ?CryptoTokenBufferInterface;
}