<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Encrypted;

use Charcoal\Contracts\Serialization\SerializedEnvelopeInterface;

/**
 * This interface extends the EncryptedStringInterface and SerializedEnvelopeInterface,
 * combining functionality to support operations with encrypted strings and serialized envelopes.
 */
interface EncryptedObjectInterface extends EncryptedStringInterface, SerializedEnvelopeInterface
{
}
