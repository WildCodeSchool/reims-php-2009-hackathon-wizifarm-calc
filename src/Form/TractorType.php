<?php

namespace App\Form;

use App\Entity\Tractor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TractorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('licensePlate')
            ->add('purchaseDate')
            ->add('year')
            ->add('consumptionFuel')
            ->add('power')
            ->add('brand')
            ->add('model')
            ->add('value')
            ->add('motorLoadCoefficient')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tractor::class,
        ]);
    }
}
