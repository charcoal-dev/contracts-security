<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

/**
 * Interface representing a storage mechanism for managing secrets, allowing
 * organized access, retrieval, insertion, and deletion of secrets by their identifiers.
 */
interface SecretStorageInterface
{
    public function namespace(string $id): SecretNamespaceInterface;

    public function get(string $id): SecretKeyInterface;

    public function put(string $id, SecretKeyInterface $key): void;

    public function delete(string $id): void;

    public function has(string $id): bool;

    /**
     * string[] List of secret keys in the root of storage.
     */
    public function list(): array;
}