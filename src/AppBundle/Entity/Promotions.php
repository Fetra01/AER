<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotions
 *
 * @ORM\Table(name="promotions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionsRepository")
 */
class Promotions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="promo", type="string", length=255)
     */
    private $promo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entry_Date", type="datetime")
     */
    private $entryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leaving_Date", type="datetime")
     */
    private $leavingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="localization", type="string", length=255)
     */
    private $localization;

    /**
     * @var string
     *
     * @ORM\Column(name="fk_teacher_name", type="string", length=255)
     */
    private $fkTeacherName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set promo
     *
     * @param string $promo
     *
     * @return Promotions
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     *
     * @return Promotions
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set leavingDate
     *
     * @param \DateTime $leavingDate
     *
     * @return Promotions
     */
    public function setLeavingDate($leavingDate)
    {
        $this->leavingDate = $leavingDate;

        return $this;
    }

    /**
     * Get leavingDate
     *
     * @return \DateTime
     */
    public function getLeavingDate()
    {
        return $this->leavingDate;
    }

    /**
     * Set localization
     *
     * @param string $localization
     *
     * @return Promotions
     */
    public function setLocalization($localization)
    {
        $this->localization = $localization;

        return $this;
    }

    /**
     * Get localization
     *
     * @return string
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Set fkTeacherName
     *
     * @param string $fkTeacherName
     *
     * @return Promotions
     */
    public function setFkTeacherName($fkTeacherName)
    {
        $this->fkTeacherName = $fkTeacherName;

        return $this;
    }

    /**
     * Get fkTeacherName
     *
     * @return string
     */
    public function getFkTeacherName()
    {
        return $this->fkTeacherName;
    }
}

