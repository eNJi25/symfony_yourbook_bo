<?php

namespace App\Controller\Admin;

use App\Entity\Exemplaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ExemplaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Exemplaire::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield AssociationField::new('usure');
        yield AssociationField::new('stock');
        yield AssociationField::new('livre');
    }
}
