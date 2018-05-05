<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PicturesTags
 *
 * @ORM\Table(name="Pictures_Tags", uniqueConstraints={@ORM\UniqueConstraint(name="PictureId", columns={"PictureId", "TagId"})}, indexes={@ORM\Index(name="TagId", columns={"TagId"}), @ORM\Index(name="IDX_D16142F5A46EA889", columns={"PictureId"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\PicturesTagsRepository")
 */
class PicturesTags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Pictures_TagsId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $picturesTagsid;

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
     * @var \Tags
     *
     * @ORM\ManyToOne(targetEntity="Tags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TagId", referencedColumnName="TagId")
     * })
     */
    private $tagid;



    /**
     * Get picturesTagsid
     *
     * @return integer
     */
    public function getPicturesTagsid()
    {
        return $this->picturesTagsid;
    }

    /**
     * Set pictureid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Pictures $pictureid
     *
     * @return PicturesTags
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
     * Set tagid
     *
     * @param \Schroeder\Bundle\PicManagerBundle\Entity\Tags $tagid
     *
     * @return PicturesTags
     */
    public function setTagid(\Schroeder\Bundle\PicManagerBundle\Entity\Tags $tagid = null)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return \Schroeder\Bundle\PicManagerBundle\Entity\Tags
     */
    public function getTagid()
    {
        return $this->tagid;
    }
}
