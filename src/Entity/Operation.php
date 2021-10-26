<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    protected string $id;

    /**
     * @ORM\Id
     * @ORM\Column(name="name", type="string")
     *
     * @var string
     */
    protected string $name;

    /**
     * @ORM\Id
     * @ORM\Column(name="operation_type", type="string")
     *
     * @var string
     */
    protected string $operation_type;

    /**
     * @ORM\Id
     * @ORM\Column(name="amout", type="integer")
     *
     * @var integer
     */
    protected string $amout;

    /**
     * @ORM\Id
     * @ORM\Column(name="price", type="integer")
     *
     * @var integer
     */
    protected string $price;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string
     *
     * @return $this
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

     /**
     * @return string
     */
    public function getOperationType(): string
    {
        return $this->operation_type;
    }

    /**
     * @param string
     *
     * @return $this
     */
    public function setOperationType($operation_type): static
    {
        $this->operation_type = $operation_type;

        return $this;
    }

     /**
     * @return integer
     */
    public function getAmount(): integer
    {
        return $this->amount;
    }

    /**
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
     * @return integer
     */
    public function getPrice(): integer
    {
        return $this->price;
    }

    /**
     * @param integer
     *
     * @return $this
     */
    public function setPrice($price): static
    {
        $this->price = $price;

        return $this;
    }
}