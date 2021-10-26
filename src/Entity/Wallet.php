<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    protected string $id;

    /**
     * @ORM\Id
     * @ORM\Column(name="userName", type="uuid")
     *
     * @var string
     */
    protected string $username;

    /**
     * @return string
     */
    public function getuserId(): string
    {
        return $this->id;
    }

       /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->username;
    }

    /**
     * @param string
     *
     * @return $this
     */
    public function setUserName($username): static
    {
        $this->username = $username;

        return $this;
    }
}