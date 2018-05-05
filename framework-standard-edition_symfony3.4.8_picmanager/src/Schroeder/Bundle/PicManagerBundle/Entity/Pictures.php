<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pictures
 *
 * @ORM\Table(name="Pictures")
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\PicturesRepository")
 */
class Pictures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PictureId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pictureid;

    /**
     * @var string
     *
     * @ORM\Column(name="PictureName", type="string", length=256, nullable=true)
     */
    private $picturename;

    /**
     * @var string
     *
     * @ORM\Column(name="PicturePath", type="string", length=256, nullable=true)
     */
    private $picturepath;



    /**
     * Set picturename
     *
     * @param string $picturename
     *
     * @return Pictures
     */
    public function setPicturename($picturename)
    {
        $this->picturename = $picturename;

        return $this;
    }

    /**
     * Get picturename
     *
     * @return string
     */
    public function getPicturename()
    {
        return $this->picturename;
    }

    /**
     * Set picturepath
     *
     * @param string $picturepath
     *
     * @return Pictures
     */
    public function setPicturepath($picturepath)
    {
        $this->picturepath = $picturepath;

        return $this;
    }

    /**
     * Get picturepath
     *
     * @return string
     */
    public function getPicturepath()
    {
        return $this->picturepath;
    }

    /**
     * Get pictureid
     *
     * @return integer
     */
    public function getPictureid()
    {
        return $this->pictureid;
    }
}
