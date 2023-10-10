<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house2.jpg');
$manager->persist($Projects);
$Projects = new Projects();
 $Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house3.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house4.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house5.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house2.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house3.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house2.jpg');
$manager->persist($Projects);
$Projects = new Projects();
$Projects->setTitre('SummerHouse');
$Projects->setImage('assets/img/house5.jpg'); 


$manager->persist($Projects);
$manager->flush();

        
    }
}
