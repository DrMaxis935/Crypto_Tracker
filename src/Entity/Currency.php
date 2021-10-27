<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

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
    private string $id;

    /**
     * @ORM\Id
     * @ORM\Column(name="name", type="string")
     *
     * @var string
     */
    private string $name;

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