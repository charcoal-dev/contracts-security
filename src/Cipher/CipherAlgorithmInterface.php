<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Cipher;

/**
 * Provider-specific catalog for cipher algorithm.
 * Ideally used with an Enum instead of concrete classes.
 */
interface CipherAlgorithmInterface
{
    /**
     * @return string Actual algorithm name; e.g. "aes-256-cbc"
     */
    public function algo(): string;

    /**
     * @return int Key size in bytes
     */
    public function keySize(): int;
}