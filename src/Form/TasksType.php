<?php

namespace App\Form;

use App\Entity\Tasks;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class TasksType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

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
            /*->add('user', EntityType::class, [
                'class' => User::class,
                'label' => 'Share',
                'multiple' => 'true',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->where('s.id NOT LIKE :user') // Id différent de id user présent
                        ->setParameter('user', $this->security->getUser());
                }
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tasks::class,
        ]);
    }
}
