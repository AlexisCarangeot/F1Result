<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Pilote;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PiloteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surname')
            ->add('firstname')
            ->add('age')
            ->add('number')
            ->add('pilotePortrait', FileType::class,[
                'required' =>false
            ])
            ->add('point')
            ->add('team', EntityType::class,[
                'class' => Team::class,
                'choice_label' => 'name',
                'required' => false
            ])
            ->add('country', EntityType::class,[
                'class' => Country::class,
                'choice_label' => 'name',
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pilote::class,
        ]);
    }
}
