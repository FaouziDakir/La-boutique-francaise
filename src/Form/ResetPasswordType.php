<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 30
                ]),
                'invalid_message' => 'Les mdp ne correspondent pas',
                'label' => 'Mon nouveau mdp',
                'required' => true,
                'first_options' => ['label' => 'Nouveau mot de passe', 'attr' => ['placeholder' => 'Votre nouveau mdp']],
                'second_options' => ['label' => 'Confirmation du mot de passe', 'attr' => ['placeholder' => 'Merci de confirmer votre nouveau mdp ']]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Mettre à jour mot de passe",
                'attr' => [
                    'class' => 'btn-block btn-info'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
