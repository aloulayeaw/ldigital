<?php

namespace App\Form;

use App\Entity\Designerld;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchCarType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auteur', TextType::class, [
                'required' => false,
                'label'  => 'Auteur',
                'attr' => array(
                    'label' => 'large')
            ])
            ->add('lieu', TextType::class, [
                'required' => false,
                'label'  => 'Lieu',
                'attr' => array(
                    'label' => 'large')
            ])
            ->add('Recherche', SubmitType::class)
            ;
    }
    
}
