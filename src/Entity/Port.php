<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Port
 *
 * @ORM\Table(name="Port")
 * @ORM\Entity
 */
class Port
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_port", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPort;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_port", type="string", length=255, nullable=false)
     */
    private $nomPort;

    /**
     * @var int
     *
     * @ORM\Column(name="surface_port", type="integer", nullable=false)
     */
    private $surfacePort;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_salarie", type="integer", nullable=false)
     */
    private $nbSalarie;

    public function getIdPort(): ?int
    {
        return $this->idPort;
    }

    public function getNomPort(): ?string
    {
        return $this->nomPort;
    }

    public function setNomPort(string $nomPort): self
    {
        $this->nomPort = $nomPort;

        return $this;
    }

    public function getSurfacePort(): ?int
    {
        return $this->surfacePort;
    }

    public function setSurfacePort(int $surfacePort): self
    {
        $this->surfacePort = $surfacePort;

        return $this;
    }

    public function getNbSalarie(): ?int
    {
        return $this->nbSalarie;
    }

    public function setNbSalarie(int $nbSalarie): self
    {
        $this->nbSalarie = $nbSalarie;

        return $this;
    }


}
