<?php

namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use USer\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserType extends AbstractType
{   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
                    'required' => true,
                    'max_length' => 25,
                    'attr' => array(
                        'class' => 'form-control input-md',
                        'id' => 'username',
                        'name' => '_username',
                        'placeholder' => 'Nom d\'utilisateur / Email',
                    ),
                    'label' => 'Nom d\'utilisateur / Email',
                    'label_attr' => array(
                        'class' => 'col-md-4 control-label',
                        'for' => 'username',
                    )
                )
            )
            ->add('password', 'password', array(
                'required' => true, 'attr' => array(
                    'class' => 'form-control input-md',
                    'id' => 'password',
                    'name' => '_password',
                    'placeholder' => 'Mot de passe',
                ),
                'label' => 'Mot de passe', 'label_attr' => array(
                    'class' => 'col-md-4 control-label',
                    'for' => 'password',
                )
            ))
            ->add('send', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary',
                ),
                'label' => 'Connexion'
            ))
        ;
    }
     
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_userbundle_user';
    }
}
