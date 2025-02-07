<?php

namespace App\Form;

use App\Entity\User;
use App\Enum\GenderStatus;
use App\Enum\HeightStatus;
use App\Enum\MorphologyStatus;
use App\Enum\WeightStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class)
            ->add('last_name', TextType::class)
            ->add('gender', EnumType::class, [
                'class' => GenderStatus::class,
                'required' => false,
                'placeholder' => 'Select Gender',
                'expanded' => true,
                'multiple' => false
            ])
            ->add('height', EnumType::class, [
                'class' => HeightStatus::class,
                'required' => false,
                'placeholder' => 'Select Height',
                'expanded' => true,
                'multiple' => false, '
                label' => 'Height'
            ])
            ->add('weight', EnumType::class, [
                'class' => WeightStatus::class,
                'required' => false,
                'placeholder' => 'Select Weight',
                'expanded' => true,
                'multiple' => false,
                'label' => 'Weight'
            ])
            ->add('morphology', EnumType::class, [
                'class' => MorphologyStatus::class,
                'required' => false,
                'placeholder' => 'Select Morphology',
                'expanded' => true,
                'multiple' => false,
                'label' => 'Morphology'
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
