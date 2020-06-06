<?php

namespace App\Form;

use App\Form\CreaType;
use App\Entity\Creatif;
use App\Form\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CreatifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('evenement',TextType::class, [
                'required' => true,
                'label'  => 'Evenement',
                'attr' => array(
                    'label' => 'large')
                    ])
            ->add('auteur',TextType::class, [
                'required' => true,
                'label'  => 'Auteur',
                'attr' => array(
                    'label' => 'large')
            ])
            ->add('crea', CreaType::class, ['label'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Creatif::class,
        ]);
    }
}
