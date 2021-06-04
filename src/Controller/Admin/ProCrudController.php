<?php

namespace App\Controller\Admin;

use App\Entity\Pro;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ProCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pro::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('user');
        yield AssociationField::new('job');
        yield TextEditorField::new('presentation');
    }
}
