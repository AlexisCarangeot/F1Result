<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('point')
            ->add('country', EntityType::class,[
                'class' => Country::class,
                'choice_label' => 'name',
                'required' => true
            ])
            ->add('teamLogo', FileType::class,[
                'required' => false
            ])
            ->add('teamBanner', FileType::class,[
                'required' => false
            ])
            ->add('teamMonoplace', FileType::class,[
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
