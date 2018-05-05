<?php

namespace Schroeder\Bundle\PicManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="Tags", uniqueConstraints={@ORM\UniqueConstraint(name="Tag", columns={"Tag"})})
 * @ORM\Entity(repositoryClass="Schroeder\Bundle\PicManagerBundle\Repository\TagsRepository")
 */
class Tags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TagId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagid;

    /**
     * @var string
     *
     * @ORM\Column(name="Tag", type="string", length=64, nullable=true)
     */
    private $tag;



    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Tags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Get tagid
     *
     * @return integer
     */
    public function getTagid()
    {
        return $this->tagid;
    }
}
