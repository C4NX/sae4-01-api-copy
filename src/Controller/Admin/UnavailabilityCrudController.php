<?php

namespace App\Controller\Admin;

use App\Entity\Unavailability;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UnavailabilityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Unavailability::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
//            BooleanField::new('isRepeated', label: 'répété ?'),
            TextField::new('lib', label: 'Raison'),
            DateTimeField::new('startDate', label: 'Date de l\'indisponibilité'),
            DateTimeField::new('endDate', label: 'Date de fin de l\'indisponibilité'),
        ];
    }
}
