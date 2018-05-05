<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metadata
 *
 * @ORM\Table(name="MetaData", indexes={@ORM\Index(name="PictureId", columns={"PictureId"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\MetadataBundleRepository")
 */
class Metadata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MetaDataId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metadataid;

    /**
     * @var string
     *
     * @ORM\Column(name="Exif_Image_Model", type="string", length=32, nullable=true)
     */
    private $exifImageModel;

    /**
     * @var string
     *
     * @ORM\Column(name="Exif_Photo_FocalLength", type="string", length=20, nullable=true)
     */
    private $exifPhotoFocallength;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Exif_Photo_DateTimeOriginal", type="datetime", nullable=true)
     */
    private $exifPhotoDatetimeoriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="Exif_Photo_FNumber", type="string", length=20, nullable=true)
     */
    private $exifPhotoFnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Exif_Photo_ExposureTime", type="string", length=20, nullable=true)
     */
    private $exifPhotoExposuretime;

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
     * Set exifImageModel
     *
     * @param string $exifImageModel
     *
     * @return Metadata
     */
    public function setExifImageModel($exifImageModel)
    {
        $this->exifImageModel = $exifImageModel;

        return $this;
    }

    /**
     * Get exifImageModel
     *
     * @return string
     */
    public function getExifImageModel()
    {
        return $this->exifImageModel;
    }

    /**
     * Set exifPhotoFocallength
     *
     * @param string $exifPhotoFocallength
     *
     * @return Metadata
     */
    public function setExifPhotoFocallength($exifPhotoFocallength)
    {
        $this->exifPhotoFocallength = $exifPhotoFocallength;

        return $this;
    }

    /**
     * Get exifPhotoFocallength
     *
     * @return string
     */
    public function getExifPhotoFocallength()
    {
        return $this->exifPhotoFocallength;
    }

    /**
     * Set exifPhotoDatetimeoriginal
     *
     * @param \DateTime $exifPhotoDatetimeoriginal
     *
     * @return Metadata
     */
    public function setExifPhotoDatetimeoriginal($exifPhotoDatetimeoriginal)
    {
        $this->exifPhotoDatetimeoriginal = $exifPhotoDatetimeoriginal;

        return $this;
    }

    /**
     * Get exifPhotoDatetimeoriginal
     *
     * @return \DateTime
     */
    public function getExifPhotoDatetimeoriginal()
    {
        return $this->exifPhotoDatetimeoriginal;
    }

    /**
     * Set exifPhotoFnumber
     *
     * @param string $exifPhotoFnumber
     *
     * @return Metadata
     */
    public function setExifPhotoFnumber($exifPhotoFnumber)
    {
        $this->exifPhotoFnumber = $exifPhotoFnumber;

        return $this;
    }

    /**
     * Get exifPhotoFnumber
     *
     * @return string
     */
    public function getExifPhotoFnumber()
    {
        return $this->exifPhotoFnumber;
    }

    /**
     * Set exifPhotoExposuretime
     *
     * @param string $exifPhotoExposuretime
     *
     * @return Metadata
     */
    public function setExifPhotoExposuretime($exifPhotoExposuretime)
    {
        $this->exifPhotoExposuretime = $exifPhotoExposuretime;

        return $this;
    }

    /**
     * Get exifPhotoExposuretime
     *
     * @return string
     */
    public function getExifPhotoExposuretime()
    {
        return $this->exifPhotoExposuretime;
    }

    /**
     * Get metadataid
     *
     * @return integer
     */
    public function getMetadataid()
    {
        return $this->metadataid;
    }

    /**
     * Set pictureid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid
     *
     * @return Metadata
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
