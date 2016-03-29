<?php

namespace BackEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiciosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('icono')
            ->add('horario')
            ->add('diasHabiles')
            ->add('principal')
            ->add('orden')
            ->add('imagenid')
            ->add('hotelcodigo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackEndBundle\Entity\Servicios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backendbundle_servicios';
    }
}
