<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PicturesDescriptions
 *
 * @ORM\Table(name="Pictures_Descriptions", uniqueConstraints={@ORM\UniqueConstraint(name="PictureId", columns={"PictureId", "DescriptionId"})}, indexes={@ORM\Index(name="DescriptionId", columns={"DescriptionId"}), @ORM\Index(name="IDX_88B850B2A46EA889", columns={"PictureId"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\PicturesDescriptionsRepository")
 */
class PicturesDescriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Pictures_DescriptionsId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $picturesDescriptionsid;

    /**
     * @var \Pictures
     *
     * @ORM\ManyToOne(targetEntity="Pictures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PictureId", referencedColumnName="PictureId")
     * })
     */
    private $pictureid;

    /**
     * @var \Descriptions
     *
     * @ORM\ManyToOne(targetEntity="Descriptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DescriptionId", referencedColumnName="DescriptionId")
     * })
     */
    private $descriptionid;



    /**
     * Get picturesDescriptionsid
     *
     * @return integer
     */
    public function getPicturesDescriptionsid()
    {
        return $this->picturesDescriptionsid;
    }

    /**
     * Set pictureid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid
     *
     * @return PicturesDescriptions
     */
    public function setPictureid(\Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid = null)
    {
        $this->pictureid = $pictureid;

        return $this;
    }

    /**
     * Get pictureid
     *
     * @return \Schroeder\Bundle\PicManagerBundle\Entity\Pictures
     */
    public function getPictureid()
    {
        return $this->pictureid;
    }

    /**
     * Set descriptionid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Descriptions $descriptionid
     *
     * @return PicturesDescriptions
     */
    public function setDescriptionid(\Schroeder\Bundle\PicManagerBundle\Entity\Descriptions $descriptionid = null)
    {
        $this->descriptionid = $descriptionid;

        return $this;
    }

    /**
     * Get descriptionid
     *
     * @return \Schroeder\Bundle\PicManagerBundle\Entity\Descriptions
     */
    public function getDescriptionid()
    {
        return $this->descriptionid;
    }
}
