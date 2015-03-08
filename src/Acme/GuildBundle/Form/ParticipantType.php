<?php

namespace Acme\GuildBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParticipantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('role', 'choice', array(
    'choices' => array(
        'Heal' => 'Heal',
        'Tank' => 'Tank',
        'DPS' => 'DPS'
    )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\GuildBundle\Entity\Participant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_guildbundle_participant';
    }
}
