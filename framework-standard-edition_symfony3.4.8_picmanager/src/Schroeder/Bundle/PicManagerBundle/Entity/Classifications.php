ppenh<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classifications
 *
 * @ORM\Table(name="Classifications", uniqueConstraints={@ORM\UniqueConstraint(name="Classification", columns={"Classification"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\ClassificationsRepository")
 */
class Classifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ClassificationId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classificationid;

    /**
     * @var string
     *
     * @ORM\Column(name="Classification", type="string", length=64, nullable=true)
     */
    private $classification;



    /**
     * Set classification
     *
     * @param string $classification
     *
     * @return Classifications
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Get classificationid
     *
     * @return integer
     */
    public function getClassificationid()
    {
        return $this->classificationid;
    }
}
