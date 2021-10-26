<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Currency
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\CurrencyRepository")
 * @ORM\Table(name="currency")
 */
class Currency
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
}