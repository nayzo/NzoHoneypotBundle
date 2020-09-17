<?php

declare(strict_types=1);

namespace Nzo\HoneypotBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Blank;

class HoneypotType extends AbstractType
{
    const HONEYPOT_GROUP = 'honeypot';

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'required' => false,
                'mapped' => false,
                'data' => '',
                'attr' => array(
                    'autocomplete' => 'off',
                    'tabindex' => -1,
                    'aria-hidden' => 'true',
                    'style' => 'position: absolute; left: -500%; top: -500%;',
                ),
                'constraints' => array(
                    new Blank(
                        array(
                            'groups' => array(
                                Constraint::DEFAULT_GROUP,
                                self::HONEYPOT_GROUP,
                            ),
                            'message' => 'An error has occurred, please refresh the page and try again.',
                        )
                    ),
                ),
                'error_bubbling' => true,
                'label' => false,
            )
        );
    }

    public function getParent(): string
    {
        return TextType::class;
    }

    public function getBlockPrefix(): string
    {
        return 'nzo_honeypot';
    }
}
