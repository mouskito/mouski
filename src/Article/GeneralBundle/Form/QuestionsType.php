<?php

namespace Article\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            //->add('description')
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('url')
           // ->add('date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Article\GeneralBundle\Entity\Questions'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'article_generalbundle_questions';
    }
}
