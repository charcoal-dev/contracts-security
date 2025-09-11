<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

use Charcoal\Contracts\Buffers\Sensitive\SensitiveKeyBufferInterface;

/**
 * Interface representing a storage mechanism for managing secrets, allowing
 * organized access, retrieval, insertion, and deletion of secrets by their identifiers.
 */
interface SecretStorageInterface
{
    public function namespace(string $path): SecretNamespaceInterface;

    public function get(string $id, int $version): SecretKeyInterface;

    public function store(string $id, int $version, SensitiveKeyBufferInterface $key): void;

    public function delete(string $id, int $version): void;

    public function has(string $id, int $version): bool;

    /**
     * string[] List of secret keys in the root of storage.
     */
    public function list(): array;
}