<?php

namespace App\Form;

use App\Entity\FriendsSearch;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FriendsSearchType extends AbstractType
{
    public function getBlockPrefix()
    {
        return "";
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('friends', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom de votre ami(e)'
                ]
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FriendsSearch::class,
            'method' => 'get',
            'csrf_protection' => false /* Pas besoin de token pour la recherche */
        ]);
    }
}
