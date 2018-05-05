<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PicturesClassifications
 *
 * @ORM\Table(name="Pictures_Classifications", uniqueConstraints={@ORM\UniqueConstraint(name="PictureId", columns={"PictureId", "ClassificationId"})}, indexes={@ORM\Index(name="ClassificationId", columns={"ClassificationId"}), @ORM\Index(name="IDX_A813B7ACA46EA889", columns={"PictureId"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\PicturesClassificationsRepository")
 */
class PicturesClassifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Pictures_ClassificationsId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $picturesClassificationsid;

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
     * @var \Classifications
     *
     * @ORM\ManyToOne(targetEntity="Classifications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ClassificationId", referencedColumnName="ClassificationId")
     * })
     */
    private $classificationid;



    /**
     * Get picturesClassificationsid
     *
     * @return integer
     */
    public function getPicturesClassificationsid()
    {
        return $this->picturesClassificationsid;
    }

    /**
     * Set pictureid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid
     *
     * @return PicturesClassifications
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
     * Set classificationid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Classifications $classificationid
     *
     * @return PicturesClassifications
     */
    public function setClassificationid(\Schroeder\Bundle\PicManagerBundle\Entity\Classifications $classificationid = null)
    {
        $this->classificationid = $classificationid;

        return $this;
    }

    /**
     * Get classificationid
     *
     * @return \Schroeder\Bundle\PicManagerBundle\Entity\Classifications
     */
    public function getClassificationid()
    {
        return $this->classificationid;
    }
}
