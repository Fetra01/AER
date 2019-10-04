<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answers
 *
 * @ORM\Table(name="answers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswersRepository")
 */
class Answers
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
     * @var int
     *
     * @ORM\Column(name="fk_id_question", type="integer")
     */
    private $fkIdQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=255)
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="fk_id_user", type="string", length=255)
     */
    private $fkIdUser;


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
     * Set fkIdQuestion
     *
     * @param integer $fkIdQuestion
     *
     * @return Answers
     */
    public function setFkIdQuestion($fkIdQuestion)
    {
        $this->fkIdQuestion = $fkIdQuestion;

        return $this;
    }

    /**
     * Get fkIdQuestion
     *
     * @return int
     */
    public function getFkIdQuestion()
    {
        return $this->fkIdQuestion;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return Answers
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set fkIdUser
     *
     * @param string $fkIdUser
     *
     * @return Answers
     */
    public function setFkIdUser($fkIdUser)
    {
        $this->fkIdUser = $fkIdUser;

        return $this;
    }

    /**
     * Get fkIdUser
     *
     * @return string
     */
    public function getFkIdUser()
    {
        return $this->fkIdUser;
    }
}

