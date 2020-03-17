<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TasksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Que faut t-il faire ?',
                'required' => true,
                'attr' => [
                    'class' => 'field',
                    'placeholder' => "Ex : Faire les courses",
                    ]

            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Quel est le status de votre tâche ? ',
                'attr' => [
                    'class' => 'field'
                    ],
                'choices' => [
                    'Urgent' => 'Urgent',
                    'Important' => 'Important',
                    'Autres' => 'Autres'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
