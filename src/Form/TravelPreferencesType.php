<?php

namespace App\Form;

use App\Entity\TravelPreferences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TravelPreferencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('discussion', ChoiceType::class, [
                'choices'  => [
                    'Vive le vent' => 'Vive le vent',
                    'Fromage et saucisson' => 'Fromage et saucisson',
                    'J\'adore la soupe' => 'J\'adore la soupe',
                ],
            ])
            ->add('music', ChoiceType::class, [
                'choices'  => [
                    'Vive le vent' => 'Vive le vent',
                    'Fromage et saucisson' => 'Fromage et saucisson',
                    'J\'adore la soupe' => 'J\'adore la soupe',
                ],
            ])
            ->add('smoking', ChoiceType::class, [
                'choices'  => [
                    'Vive le vent' => 'Vive le vent',
                    'Fromage et saucisson' => 'Fromage et saucisson',
                    'J\'adore la soupe' => 'J\'adore la soupe',
                ],
            ])
            ->add('animals', ChoiceType::class, [
                'choices'  => [
                    'Vive le vent' => 'Vive le vent',
                    'Fromage et saucisson' => 'Fromage et saucisson',
                    'J\'adore la soupe' => 'J\'adore la soupe',
                ],
            ])
            ->add('health_pass', ChoiceType::class, [
                'choices'  => [
                    'Vive le vent' => 'Vive le vent',
                    'Fromage et saucisson' => 'Fromage et saucisson',
                    'J\'adore la soupe' => 'J\'adore la soupe',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TravelPreferences::class,
        ]);
    }
}
