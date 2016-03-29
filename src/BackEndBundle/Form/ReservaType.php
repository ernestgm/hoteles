<?php

namespace BackEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('fechaReserva')
            ->add('fechaEntrada')
            ->add('fechaSalida')
            ->add('moneda')
            ->add('monto')
            ->add('estadoReserva')
            ->add('estadoPago')
            ->add('agencia')
            ->add('cliente')
            ->add('hotelcodigo')
            ->add('userid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackEndBundle\Entity\Reserva'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backendbundle_reserva';
    }
}
