<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Class Wallet
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\WalletRepository")
 * @ORM\Table(name="wallet")
 */
class Wallet
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="uuid")
     *
     * @var string
     */
    private string $id;

    /**
     * @ORM\Id
     * @ORM\Column(name="username", type="string")
     *
     * @var string
     */
    private string $username;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="operations")
     *
     * @var Operation[]
     */
    private array $operations;

    public function __construct()
    {
        $this->id = Uuid::v4();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return Operation[]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * @param string
     *
     * @return $this
     */
    public function setUsername($username): static
    {
        $this->username = $username;

        return $this;
    }
}