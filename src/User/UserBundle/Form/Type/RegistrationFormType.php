
<?php

//namespace User\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use user\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name');
    }

    public function getName()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'user_user_registration';
    }
}