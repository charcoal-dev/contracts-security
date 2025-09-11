<?php
/**
 * Part of the "charcoal-dev/contracts-security" package.
 * @link https://github.com/charcoal-dev/contracts-security
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Security\Secrets;

/**
 * This interface defines methods to retrieve, store, delete, and check for the existence of secret keys.
 * It also includes a method for listing all available keys within the namespace.
 */
interface SecretNamespaceInterface
{
    public function get(string $id): SecretKeyInterface;

    public function put(string $id, SecretKeyInterface $key): void;

    public function delete(string $id): void;

    public function has(string $id): bool;

    /**
     * string[] List of secret keys in the namespace.
     */
    public function list(): array;
}