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
    /**
     * A unique identifier of sorts for the storage provider
     */
    public function metaId(): string;

    /**
     * Return the trust FQCN register for this storage/provider.
     */
    public function trustedFqcn(): TrustedFqcnInterface;

    /**
     * Returns a namespace for managing secrets.
     */
    public function namespace(string $path): SecretNamespaceInterface;

    /**
     * Loads a secret key from the storage.
     */
    public function load(
        string                    $id,
        int                       $version,
        ?SecretNamespaceInterface $namespace
    ): SecretKeyInterface;

    /**
     * Deletes a secret key from the storage.
     */
    public function delete(
        string                    $id,
        int                       $version,
        ?SecretNamespaceInterface $namespace
    ): void;

    /**
     * Checks for the existence of a secret key in the storage.
     */
    public function has(
        string                    $id,
        int                       $version,
        ?SecretNamespaceInterface $namespace
    ): bool;

    /**
     * Stores a secret key in the storage.
     */
    public function store(
        ?SecretNamespaceInterface $namespace,
        string                    $id,
        int                       $version,
        SecretGeneratorInterface  $key
    ): void;

    /**
     * string[] List of secret keys in the root of storage.
     */
    public function list(?SecretNamespaceInterface $namespace): array;
}