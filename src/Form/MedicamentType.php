<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medNomcommercial',null,['label'=>'Nom commercial'])
            ->add('medComposition',null,['label'=>'Composition'])
            ->add('medEffets',null,['label'=>'Effets'])
            ->add('medContreindic',null,['label'=>'medicament contre indiqué'])
            ->add('medPrixechantillon',null,['label'=>'Prix'])
            ->add('famCode',null,['label'=>'Code famille'])
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}
