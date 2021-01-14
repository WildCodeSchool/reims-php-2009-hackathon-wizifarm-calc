<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\TRactor;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
         $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        // $product = new Product();
        // $manager->persist($product);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'the_new_password'
        ));
        $contributor = new User();
        $contributor->setEmail('contributor@monsite.com');
        $contributor->setRoles(['ROLE_CONTRIBUTOR']);
        $contributor->setFirstName('Christophe');
        $contributor->setLastName('Mae');
        $contributor->setPassword($this->passwordEncoder->encodePassword(
            $contributor,
            'contributorpassword'
        ));

        $manager->persist($contributor);

        $tractor = new Tractor();
        $tractor->setLicensePlate('aa-000-bb');
        $tractor->setPurchaseDate(2005);
        $tractor->setYear(2003);
        $tractor->setConsumptionFuel('26');
        $tractor->setPower('264');
        $tractor->setBrand('Renault');
        $tractor->setModele('ATLES 936');
        $tractor->setValue(135647);

        $manager->persist($tractor);

        $tractor2 = new Tractor();
        $tractor2->setLicensePlate('ab-001-bc');
        $tractor2->setPurchaseDate(2016);
        $tractor2->setYear(2016);
        $tractor2->setConsumptionFuel('30');
        $tractor2->setPower('304');
        $tractor2->setBrand('New Holland');
        $tractor2->setModele('t7.315');
        $tractor2->setValue(243443);

        $manager->persist($tractor2);


        $tractor3 = new Tractor();
        $tractor3->setLicensePlate('ba-002-cb');
        $tractor3->setPurchaseDate(2004);
        $tractor3->setYear(2006);
        $tractor3->setConsumptionFuel('26');
        $tractor3->setPower('260');
        $tractor3->setBrand('Lamborghini');
        $tractor3->setModele('Victory Plus');
        $tractor3->setValue(142350);

        $manager->persist($tractor3);
        $manager->flush();
    }
}
