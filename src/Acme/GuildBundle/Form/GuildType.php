<?php

namespace Acme\GuildBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuildType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('guildName', null, array('label' => 'Nom de la guild'))
            ->add('gM', null, array('label' => 'GM'))
            ->add('coGM', null, array('label' => 'Co-GM'))
            ->add('mMOPrincipale', null, array('label' => 'Jeux Principale'))
            ->add('serveur', null, array('label' => 'Serveur'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\GuildBundle\Entity\Guild'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_guildbundle_guild';
    }
}
