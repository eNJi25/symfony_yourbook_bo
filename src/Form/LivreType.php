<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Editeur;
use App\Entity\Genre;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('isbn')
            ->add('description')
            ->add('archive')
            ->add('imageName')
            ->add('imageSize')
            ->add('updatedAt', null, [
                'widget' => 'single_text'
            ])
            ->add('auteur', EntityType::class, [
                'class' => Auteur::class,
'choice_label' => 'id',
            ])
            ->add('editeur', EntityType::class, [
                'class' => Editeur::class,
'choice_label' => 'id',
            ])
            ->add('genres', EntityType::class, [
                'class' => Genre::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}