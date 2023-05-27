<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="descreption", type="string", length=250, nullable=false)
     */
    private $descreption;

    /**
     * @var int
     *
     * @ORM\Column(name="etoil", type="integer", nullable=false)
     */
    private $etoil;

    /**
     * @var int
     *
     * @ORM\Column(name="old_price", type="integer", nullable=false)
     */
    private $oldPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="new_price", type="integer", nullable=false)
     */
    private $newPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=false)
     */
    private $image;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getDescreption(): string
    {
        return $this->descreption;
    }

    /**
     * @param string $descreption
     */
    public function setDescreption(string $descreption): void
    {
        $this->descreption = $descreption;
    }

    /**
     * @return int
     */
    public function getEtoil(): int
    {
        return $this->etoil;
    }

    /**
     * @param int $etoil
     */
    public function setEtoil(int $etoil): void
    {
        $this->etoil = $etoil;
    }

    /**
     * @return int
     */
    public function getOldPrice(): int
    {
        return $this->oldPrice;
    }

    /**
     * @param int $oldPrice
     */
    public function setOldPrice(int $oldPrice): void
    {
        $this->oldPrice = $oldPrice;
    }

    /**
     * @return int
     */
    public function getNewPrice(): int
    {
        return $this->newPrice;
    }

    /**
     * @param int $newPrice
     */
    public function setNewPrice(int $newPrice): void
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }


}
