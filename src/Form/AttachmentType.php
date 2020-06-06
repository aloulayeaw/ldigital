<?php

namespace App\Form;

use App\Form\ImagesType;
use App\Entity\Attachment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AttachmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                'required' => false,
                'label'  => 'Evenement',
                'attr' => array(
                    'label' => 'large')
            ])

            ->add('images', ImagesType::class, ['label'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Attachment::class,
        ]);
    }
}
