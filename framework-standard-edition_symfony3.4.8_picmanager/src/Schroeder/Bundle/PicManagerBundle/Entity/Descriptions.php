<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descriptions
 *
 * @ORM\Table(name="Descriptions", uniqueConstraints={@ORM\UniqueConstraint(name="Description", columns={"Description"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\DescriptionsRepository")
 */
class Descriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DescriptionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descriptionid;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=64, nullable=true)
     */
    private $description;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Descriptions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get descriptionid
     *
     * @return integer
     */
    public function getDescriptionid()
    {
        return $this->descriptionid;
    }
}
