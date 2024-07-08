<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Couleur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_article')
            ->add('couleur', EntityType::class, [
                'class' => Couleur::class,
                'choice_label' => 'nom_couleur',
            ])
            ->add('types_id')
            ->add('marques_id')
            ->add('prix_achat')
            ->add('volume')
            ->add('titrage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
