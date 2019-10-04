<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Students
 *
 * @ORM\Table(name="students")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsRepository")
 */
class Students
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
     * @var array
     *
     * @ORM\Column(name="fk_id_promo", type="array")
     */
    private $fkIdPromo;


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
     * Set fkIdPromo
     *
     * @param array $fkIdPromo
     *
     * @return Students
     */
    public function setFkIdPromo($fkIdPromo)
    {
        $this->fkIdPromo = $fkIdPromo;

        return $this;
    }

    /**
     * Get fkIdPromo
     *
     * @return array
     */
    public function getFkIdPromo()
    {
        return $this->fkIdPromo;
    }
}

