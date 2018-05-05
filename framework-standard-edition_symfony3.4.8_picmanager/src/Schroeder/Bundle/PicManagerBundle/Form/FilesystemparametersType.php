<?php

namespace Schroeder\Bundle\PicManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilesystemparametersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('filectime')->add('filesize')->add('md5sum')->add('picturethumbnailpreview')->add('pictureid')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Schroeder\Bundle\PicManagerBundle\Entity\Filesystemparameters'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schroeder_bundle_picmanagerbundle_filesystemparameters';
    }


}
