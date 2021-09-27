<?php

namespace App\Controller\Admin;

use App\Entity\Chef;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ChefCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chef::class;


    }

    
    public function configureFields(string $pageName): iterable
    {


      
        return [
            TextField::new('name'),
            TextField::new('email'),
            TextField::new('password'),
            ImageField::new('photo') ->setBasePath('chef/')
            ->setUploadDir('public/chef')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('menus'),
        ];
    }
    
}
