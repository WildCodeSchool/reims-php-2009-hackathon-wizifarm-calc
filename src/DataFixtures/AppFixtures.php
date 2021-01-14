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


        $user3 = new User();
        $user3->setEmail('XxdarkdenisxX@agricultor.com');
        $user3->setRoles(['AGRICULTOR']);
        $user3->setFirstName('Denis');
        $user3->setLastName('AGRICULTOR');
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            'denis'
        ));

        $manager->persist($user3);

        $user2 = new User();
        $user2->setEmail('mass@agricultor.com');
        $user2->setRoles(['AGRICULTOR']);
        $user2->setFirstName('Mass');
        $user2->setLastName('AGRICULTOR2');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'mass'
        ));

        $manager->persist($user2);

        $tractor = new Tractor();
        $tractor->setLicensePlate('aa-000-bb');
        $tractor->setPurchaseDate(2005);
        $tractor->setYear(2003);
        $tractor->setConsumptionFuel('26');
        $tractor->setPower('264');
        $tractor->setBrand('Renault');
        $tractor->setModel('ATLES 936');
        $tractor->setValue(135647);
        $tractor->setMotorLoadCoefficient(35);
        $tractor->setUser($user2);
        $tractor->setImage('https://www.voitureenfantexpo.fr/media/catalog/product/cache/12/image/1800x/040ec09b1e35df139433887a97daa66f/X/M/XMX611R-rocmain.png');
        $tractor->setCost(53);

        $manager->persist($tractor);

        
        $tractor2 = new Tractor();
        $tractor2->setLicensePlate('ab-001-bc');
        $tractor2->setPurchaseDate(2016);
        $tractor2->setYear(2016);
        $tractor2->setConsumptionFuel('30');
        $tractor2->setPower('304');
        $tractor2->setBrand('New Holland');
        $tractor2->setModel('t7.315');
        $tractor2->setValue(243443);
        $tractor2->setMotorLoadCoefficient(35);
        $tractor2->setUser($user2);
        $tractor2->setImage('https://www.voitures-electriques-pour-enfants.fr/media/catalog/product/cache/26/image/1800x/040ec09b1e35df139433887a97daa66f/X/M/XMX611G-rocmain.png');
        $tractor2->setCost(68);

        $manager->persist($tractor2);


        $tractor3 = new Tractor();
        $tractor3->setLicensePlate('ba-002-cb');
        $tractor3->setPurchaseDate(2004);
        $tractor3->setYear(2006);
        $tractor3->setConsumptionFuel('26');
        $tractor3->setPower('260');
        $tractor3->setBrand('Lamborghini');
        $tractor3->setModel('Victory Plus');
        $tractor3->setValue(142350);
        $tractor3->setMotorLoadCoefficient(35);
        $tractor3->setUser($user3);
        $tractor3->setImage('https://www.voitureenfantexpo.fr/media/catalog/product/cache/12/image/1800x/040ec09b1e35df139433887a97daa66f/X/M/XMX611B-rocmain.png');
        $tractor3->setCost(56);

        $manager->persist($tractor3);
        $manager->flush();
    }
}
