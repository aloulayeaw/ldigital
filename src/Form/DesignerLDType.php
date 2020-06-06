<?php

namespace App\Form;

use App\Form\ImageType;
use App\Entity\Designerld;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DesignerLDType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auteur',TextType::class, [
                'required' => true,
                'label'  => 'Auteur',
                'attr' => array(
                    'label' => 'large')
            ])
            ->add('lieu',TextType::class, [
                'required' => true,
                'label'  => 'Lieu',
                'attr' => array(
                    'label' => 'large')
            ])
            ->add('date',DateType::class, [
                'required' => true,
                'label'  => 'Date',
            ])
            ->add('image', ImageType::class, ['label'=>false])            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Designerld::class,
        ]);
    }
}
