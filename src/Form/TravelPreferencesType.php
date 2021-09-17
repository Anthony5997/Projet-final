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
                    'Je suis un vrai moulin à paroles!' => 'Je suis un vrai moulin à paroles!',
                    'J\'aime bien discuter quand je me sens à l\'aise' => 'J\'aime bien discuter quand je me sens à l\'aise',
                    'Je suis plutôt du genre discret' => 'Je suis plutôt du genre discret',
                ],
            ])
            ->add('music', ChoiceType::class, [
                'choices'  => [
                    'Musique tout le long !' => 'Musique tout le long !',
                    'Ca dépend de la musique' => 'Ca dépend de la musique',
                    'Le silence est d\'or !' => 'Le silence est d\'or !',
                ],
            ])
            ->add('smoking', ChoiceType::class, [
                'choices'  => [
                    'Voyager avec des fumeurs ne me dérange pas' => 'Voyager avec des fumeurs ne me dérange pas',
                    'Les pauses cigarette hors de la voiture ne me dérangent pas' => 'Les pauses cigarette hors de la voiture ne me dérangent pas',
                    'Je ne voyage pas avec des fumeurs' => 'Je ne voyage pas avec des fumeurs',
                ],
            ])
            ->add('animals', ChoiceType::class, [
                'choices'  => [
                    'J\'adore les animaux. Ouaf !' => 'J\'adore les animaux. Ouaf !',
                    'Je peux voyager avec certains animaux' => 'Je peux voyager avec certains animaux',
                    'Je ne préfère pas voyages avec des animaux' => 'Je ne préfère pas voyages avec des animaux',
                ],
            ])
            ->add('health_pass', ChoiceType::class, [
                'choices'  => [
                    'Si besoin, j\'accepte de montrer un pass sanitaire au départ' => 'Si besoin, j\'accepte de montrer un pass sanitaire au départ',
                    'Je ne veux pas présenter de pass sanitaire au départ' => 'Je ne veux pas présenter de pass sanitaire au départ',
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
