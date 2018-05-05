<?php

namespace Schroeder\Bundle\PicManagerBundle\Controller;

use Schroeder\Bundle\PicManagerBundle;
use Schroeder\Bundle\PicManagerBundle\Entity\PicManager;
#use Schroeder\Bundle\PicManagerBundle\Entity\Pictures;
#use Schroeder\Bundle\PicManagerBundle\Form\PicturesType;

#use Schroeder\Bundle\PicManagerBundle\Entity\Descriptions;
#use Schroeder\Bundle\PicManagerBundle\Entity\Filesystemparameters;
#use Schroeder\Bundle\PicManagerBundle\Entity\Metadata;
#use Schroeder\Bundle\PicManagerBundle\Entity\PicturesClassifications;
#use Schroeder\Bundle\PicManagerBundle\Entity\PicturesDescriptions;
#use Schroeder\Bundle\PicManagerBundle\Entity\Pictures;
#use Schroeder\Bundle\PicManagerBundle\Entity\PicturesTags;
#use Schroeder\Bundle\PicManagerBundle\Entity\Tags;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Schroeder\Bundle\PicManagerBundle\Repository;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
#use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('SchroederPicManagerBundle:Default:index.html.twig');
    }

    /**
     * @Route("/picman1", name="pictures_list")
     */
    public function listAction()
    {

        $repository = $this->getDoctrine()->getRepository('SchroederPicManagerBundle:Pictures');
        $pictures = $repository->findAll();
        return $this->render(
            'SchroederPicManagerBundle::picturesTable1.html.twig',         # Achtung:zwei ':'
            array('pictures' => $pictures)
        );
    }
    /**
     * @Route("/picman2", name="pictures_list2")
     */
    public function findOnePicture()
    {
        ##$pictures_repository= $this->getDoctrine()->getRepository('SchroederPicManagerBundle:Pictures');
        #$pictures_repository= $this->getDoctrine()->getManager()->getRepository('SchroederPicManagerBundle:Pictures');

        $pictures_repository = $this->get('picmanager_pictures_repository');
        $pictures = $pictures_repository->findOnePicture();

        return $this->render(
            'SchroederPicManagerBundle::picturesTable2.html.twig',         # Achtung:zwei ':'
            array('pictures' => $pictures)
        );
    }
    /**
     * @Route("/picman3", name="pictures_list3")
     */
    public function findSeveralPictures()
    {
        $pictures_repository = $this->get('picmanager_pictures_repository');
        $pictures = $pictures_repository->findSeveralPictures();

        return $this->render(
            'SchroederPicManagerBundle::picturesTable3.html.twig',         # Achtung:zwei ':'
            array('pictures' => $pictures)
        );
    }


    /**
     * @Route("/picman4", name="pictures_list4")
     */
    public function findAllPicturesJoinedToDescriptions()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('SchroederPicManagerBundle:Pictures');
        $picturesDescriptions = $repository->findAllPicturesJoinedToDescriptions();
        return $this->render(
            'SchroederPicManagerBundle::picturesTable4.html.twig',         # Achtung:zwei ':'
            array('picturesdescriptions' => $picturesDescriptions)
        );
    }

    /**
     * @Route("/picman5", name="pictures_list5")
     */
    public function findAllPicturesJoinedToDescriptionsJoinedToSomeFilesystemParametersJoinedToSomeMetadata()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('SchroederPicManagerBundle:Pictures');
        $picturesDescriptionsFilesysteparametersMetadata = $repository->findAllPicturesJoinedToDescriptionsJoinedToSomeFilesystemParametersJoinedToSomeMetadata();
        return $this->render(
            'SchroederPicManagerBundle::picturesTable5.html.twig',         # Achtung:zwei ':'
            array('picturesdescriptionsfilesysteparametersmetadata' => $picturesDescriptionsFilesysteparametersMetadata)
        );
    }
    /**
     * @Route("/picman10", name="pictures_list10")
     */
    public function choiceType_selectDropDown( Request $request)
    {

        # Einige Bildnamen aus PictureDB, erst mal feste Namen,  (später alle) ermitteln
        $pictures_repository = $this->get('picmanager_pictures_repository');
        $pictures = $pictures_repository->findAllPictures();
        #var_dump( $pictures);
        $array = array();
        for ($i = 0, $size = count($pictures); $i < $size; ++$i)
        {
            $p = $pictures[$i]['picturename'];
            $array[$p] = $p;
        }
        # var_dump($array)
        # array(6) { ["_DSC4511.JPG"]=> string(12) "_DSC4511.JPG"
        #            ["_DSC8028.jpg"]=> string(12) "_DSC8028.jpg"
        #            ...
        #            ["_DSC9652b.jpg"]=> string(13) "_DSC9652b.jpg" }
        #


        # Idee: Form erzeugen mit neuer PicManager-Klasse
        # Select drop-down box erzeugen, mit Möglichkeit, Bildnamen auszuwählen
        # Erst mal getürkt: Unten feste Bildnamen eingetragen, später: dynamisch aufgebaute Liste, gespeist von $pictures (siehe oben)
        # Button zur Übernahme der Selektion(en)
        $picmanager = new PicManager();
        $form = $this->createFormBuilder($picmanager)
            #->add('picturename', ChoiceType::class, array( 'choices' => array ('_DSC4511.JPG' => '_DSC4511.JPG', '_DSC8028.jpg' => '_DSC8028.jpg')))
            ->add('picturename', ChoiceType::class, array( 'choices' => $array))
            ->add('getchoice', SubmitType::class, array('label' => 'Adopt selection'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {

            ## In $picmanager müsste jetzt meine Auswahl (selektiertes Bild stehen)
            $picture_ = $picmanager  ->getPicturename(); # Selektierten Bildnamen holen
            ###return $this->redirectToRoute('picmanager_success'); # Wozu gut?

            $selected_picture = $pictures_repository->findThisPicture($picture_);
            $data = $pictures_repository->getImageData( $picture_);

            # Internetrecherchen + Trial and error
            $im = imagecreatefromstring(stream_get_contents($data["picturethumbnailpreview"]));

            if ($im !== false) {
                ob_start();

                #header('Content-Type: image/jpeg');
                #imagejpeg($im);

                # oder z.B.:
                header('Content-Type: image/jpeg;base64');
                base64_encode(imagejpeg($im));


                echo "?>";
                $out1 = ob_get_contents();
                imagedestroy($im);
                ob_end_flush(); # output contents to browser and turn off buffering: das will ich auch nicht!
                ### Marc Schroeder 29.10.2010 : WORKAROUND, DAMIT ICH BILD SEHE: Direkte Ausgabe an Browswer!
                ### HIER WEITER MACHEN: Dafür sorgen, dass Buffer-Inhalt (=Bild) über twig angezeigt werden kann.

                ob_end_clean();   # verwirft Daten und schaltet Buffering ab; ok, da Daten vorher in Variable übernommen

            }
            else {
                echo 'An error occurred.';
            }

            return $this->render('new.html.twig', array('form' => $form->createView(),'picture' => $selected_picture, 'picture_data' => $out1));

        }
        else
        {
            return $this->render('new.html.twig', array('form' => $form->createView() ));
        }
    }

}
