<?php

namespace App\Form;

use App\Entity\Typebiere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypebiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_typebiere', TextType::class,[
                'label'=> 'Nom du Type de Bière : ',
                'required'=> true,
                'attr' => [
                    'class'=> 'mt-1',
                    ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Typebiere::class,
        ]);
    }
}
