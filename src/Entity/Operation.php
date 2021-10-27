<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Class Operation
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\OperationRepository")
 * @ORM\Table(name="Operation")
 */
class Operation
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
     * @ORM\Column(name="operation_type", type="string")
     *
     * @var string
     */
    private string $operationType;

    /**
     * @ORM\Id
     * @ORM\Column(name="amout", type="integer")
     *
     * @var integer
     */
    private int $amount;

    /**
     * @ORM\ManyToOne(targetEntity="Wallet")
     * @ORM\JoinColumn(name="wallet__id", referencedColumnName="id")
     * @var Wallet
     */
    private Wallet $wallet;

    /**
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency__id", referencedColumnName="id")
     * @var Currency
     */
    private Currency $currency;

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
    public function getOperationType(): string
    {
        return $this->operationType;
    }

    /**
     * @param string
     *
     * @return $this
     */
    public function setOperationType($operation_type): static
    {
        $this->operationType = $operation_type;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**z
     * @param integer
     *
     * @return $this
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return Wallet
     */
    public function getWallet(): Wallet
    {
        return $this->wallet;
    }

    /**z
     * @param Wallet
     *
     * @return $this
     */
    public function setWallet($wallet): static
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**z
     * @param Currency
     *
     * @return $this
     */
    public function setCurrency($currency): static
    {
        $this->currency = $currency;

        return $this;
    }
}