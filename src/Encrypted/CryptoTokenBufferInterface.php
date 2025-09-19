<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Encrypted;

use Charcoal\Contracts\Buffers\Immutable\ImmutableBufferInterface;
use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Buffer interface for cryptographic tokens (IV and Tags).
 */
interface CryptoTokenBufferInterface extends ImmutableBufferInterface, ReadableBufferInterface
{
}