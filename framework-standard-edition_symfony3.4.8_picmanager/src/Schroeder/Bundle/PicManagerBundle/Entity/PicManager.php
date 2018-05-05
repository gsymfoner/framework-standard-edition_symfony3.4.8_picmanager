<?php
//src/Schroeder/Bundle/PicManagerBundle/Entity/PicManager.php
/**
 * Created by PhpStorm.
 * User: mschroeder
 * Date: 28.08.17
 * Time: 09:15
 */

namespace Schroeder\Bundle\PicManagerBundle\Entity;


class PicManager
{

    protected $picturename;
    public function getPicturename()
    {
        return $this->picturename;
    }
    public function setPicturename( $picturename)
    {
        $this->picturename = $picturename;
    }

}