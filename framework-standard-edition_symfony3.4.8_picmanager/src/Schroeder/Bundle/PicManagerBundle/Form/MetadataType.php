<?php

namespace Schroeder\Bundle\PicManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetadataType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('exifImageModel')->add('exifPhotoFocallength')->add('exifPhotoDatetimeoriginal')->add('exifPhotoFnumber')->add('exifPhotoExposuretime')->add('pictureid')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Schroeder\Bundle\PicManagerBundle\Entity\Metadata'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schroeder_bundle_picmanagerbundle_metadata';
    }


}
