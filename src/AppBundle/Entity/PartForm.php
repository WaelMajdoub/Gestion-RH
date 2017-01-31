<?php

namespace AppBundle\Entity;

/**
 * PartForm
 */
class PartForm
{
    /**
     * @var \AppBundle\Entity\Salarie
     */
    private $salarie;

    /**
     * @var string
     */
    private $etats;

    /**
     * @var boolean
     */
    private $lu;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Formation
     */
    private $formation;


    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Salarie $salarie
     *
     * @return PartForm
     */
    public function setSalarie($salarie)
    {
        $this->salarie = $salarie;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Salarie
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    /**
     * Set etats
     *
     * @param string $etats
     *
     * @return PartForm
     */
    public function setEtats($etats)
    {
        $this->etats = $etats;

        return $this;
    }

    /**
     * Get etats
     *
     * @return string
     */
    public function getEtats()
    {
        return $this->etats;
    }

    /**
     * Set lu
     *
     * @param boolean $lu
     *
     * @return PartForm
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return boolean
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return PartForm
     */
    public function setFormation(\AppBundle\Entity\Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
