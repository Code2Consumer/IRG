<?php

namespace Acme\MessagerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameDest', null, array('label' => 'Destinataire:'))
            ->add('titre', null, array('label' => 'Titre'))
            ->add('message', null, array('label' => 'Message'))

/*          ->add('idEnv')
            ->add('nameEnv')
            ->add('idDest')
            ->add('nameDest')
            ->add('titre')
            ->add('message')
            ->add('date')
            ->add('vue')*/

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\MessagerieBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_messageriebundle_message';
    }
}
