<?php

namespace JavierEguiluz\Bundle\EasyAdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

@trigger_error('The '.__NAMESPACE__.'\EasyAdminGroupType class is deprecated since version 1.16 and will be removed in 2.0. Use the EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType class instead.', E_USER_DEPRECATED);

class_exists('EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType');

if (\false) {
    class EasyAdminGroupType extends AbstractType
    {
    }
}
