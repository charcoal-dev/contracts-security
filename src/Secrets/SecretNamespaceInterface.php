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
    public function refId(): string;

    public function load(string $id, int $version): SecretKeyInterface;

    public function store(string $id, int $version, SecretGeneratorInterface $generator): void;

    public function delete(string $id, int $version): void;

    public function has(string $id, int $version): bool;

    /**
     * string[] List of secret keys in the namespace.
     */
    public function list(): array;
}