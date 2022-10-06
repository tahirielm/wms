<?php

namespace App\Form;

use App\Entity\Stockage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference')
            // ->add('createdAt')
            // ->add('updatedAt')
            ->add('receival')
            ->add('aisle')
            ->add('shelf')
            ->add('level')
            ->add('place')
            // ->add('aisle', ChoiceType::class, [
            //     'choices'  => [
            //         '1' => '1',
            //         '2' => '2',
            //         '3' => '3',
            //         '4' => '4',
            //         '5' => '5',
            //         '6' => '6',
            //         '7' => '7',
            //         '8' => '8',
            //     ],
            // ])
            // ->add('shelf', ChoiceType::class, [
            //     'choices'  => [
            //         '1' => '1',
            //         '2' => '2',
            //         '3' => '3',
            //         '4' => '4',
            //     ],
            // ])
            // ->add('level', ChoiceType::class, [
            //     'choices'  => [
            //         '1' => '1',
            //         '2' => '2',
            //         '3' => '3',
            //         '4' => '4',
            //         '5' => '5',
            //         '6' => '6',
            //     ],
            // ])
            // ->add('place', ChoiceType::class, [
            //     'choices'  => [
            //         '1' => '1',
            //         '2' => '2',
            //         '3' => '3',
            //         '4' => '4',
            //         '5' => '5',
            //         '6' => '6',
            //         '7' => '7',
            //         '8' => '8',
            //         '9' => '9',
            //         '10' => '10',
            //     ],
            // ])
            // ->add('place', CollectionType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stockage::class,
        ]);
    }
}
