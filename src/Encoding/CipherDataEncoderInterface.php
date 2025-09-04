<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Encoding;

use Charcoal\Contracts\Encoding\EncodingSchemeStaticInterface;
use Charcoal\Contracts\Security\Encrypted\EncryptedObjectInterface;
use Charcoal\Contracts\Security\Encrypted\EncryptedStringInterface;

/**
 * Defines methods for encoding cipher data using a specified encoding scheme.
 */
interface CipherDataEncoderInterface
{
    public function encodeDto(
        EncodingSchemeStaticInterface $encoding,
        string                        $algo = "algo",
        string                        $cipherText = "ciphertext",
        string                        $iv = "iv",
        string                        $tag = "tag",
        ?string                       $keyRef = null
    ): array;

    public function encodeString(
        EncodingSchemeStaticInterface $encoding,
        string                        $tpl = "{algo}{iv}{tag}{cipherText}{keyRef}",
    ): string;

    public function encodeDsv(
        EncodingSchemeStaticInterface $encoding,
        string                        $glue = ","
    ): string;

    public static function decodeDto(
        EncodingSchemeStaticInterface $encoding,
        array                         $dto,
    ): EncryptedObjectInterface|EncryptedStringInterface;
}