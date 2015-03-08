<?php

namespace Acme\GuildBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaningType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('titre', null, array('label' => "Titre de l'event"))
            ->add('infos', null, array('label' => 'Description et Remarque'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\GuildBundle\Entity\Planing'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_guildbundle_planing';
    }
}
