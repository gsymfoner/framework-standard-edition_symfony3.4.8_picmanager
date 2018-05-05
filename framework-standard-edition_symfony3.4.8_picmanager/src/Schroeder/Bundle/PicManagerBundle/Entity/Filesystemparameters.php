<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filesystemparameters
 *
 * @ORM\Table(name="FilesystemParameters", indexes={@ORM\Index(name="PictureId", columns={"PictureId"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\FilesystemparametersRepository")
 */
class Filesystemparameters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FilesystemParameterId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filesystemparameterid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FileCTime", type="datetime", nullable=true)
     */
    private $filectime;

    /**
     * @var integer
     *
     * @ORM\Column(name="FileSize", type="bigint", nullable=true)
     */
    private $filesize;

    /**
     * @var string
     *
     * @ORM\Column(name="Md5Sum", type="string", length=256, nullable=true)
     */
    private $md5sum;

    /**
     * @var string
     *
     * @ORM\Column(name="PictureThumbnailPreview", type="blob", length=16777215, nullable=true)
     */
    private $picturethumbnailpreview;

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
     * Set filectime
     *
     * @param \DateTime $filectime
     *
     * @return Filesystemparameters
     */
    public function setFilectime($filectime)
    {
        $this->filectime = $filectime;

        return $this;
    }

    /**
     * Get filectime
     *
     * @return \DateTime
     */
    public function getFilectime()
    {
        return $this->filectime;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return Filesystemparameters
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set md5sum
     *
     * @param string $md5sum
     *
     * @return Filesystemparameters
     */
    public function setMd5sum($md5sum)
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    /**
     * Get md5sum
     *
     * @return string
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }

    /**
     * Set picturethumbnailpreview
     *
     * @param string $picturethumbnailpreview
     *
     * @return Filesystemparameters
     */
    public function setPicturethumbnailpreview($picturethumbnailpreview)
    {
        $this->picturethumbnailpreview = $picturethumbnailpreview;

        return $this;
    }

    /**
     * Get picturethumbnailpreview
     *
     * @return string
     */
    public function getPicturethumbnailpreview()
    {
        return $this->picturethumbnailpreview;
    }

    /**
     * Get filesystemparameterid
     *
     * @return integer
     */
    public function getFilesystemparameterid()
    {
        return $this->filesystemparameterid;
    }

    /**
     * Set pictureid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid
     *
     * @return Filesystemparameters
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
}
