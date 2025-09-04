<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Cipher;

/**
 * For front cipher providers working internally with different internal cipher providers.
 * Can bind a cipher algorithm to a specific provider.
 */
interface CipherBindingEnumInterface extends \BackedEnum
{
    public function algo(): CipherAlgorithmInterface;

    public function provider(): CipherProviderInterface;
}