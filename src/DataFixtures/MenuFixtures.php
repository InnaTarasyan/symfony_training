<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Menus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MenuFixtures extends Fixture
{
    public function load(ObjectManager $manager){

        $menu = new Menus();
        $menu->setTitle('Home');
        $menu->setPath('#home');
        $menu->setParent(0);
        $manager->persist($menu);

        $menu = new Menus();
        $menu->setTitle('About Us');
        $menu->setPath('#aboutUs');
        $menu->setParent(0);
        $manager->persist($menu);

        $menu = new Menus();
        $menu->setTitle('Education and Experience');
        $menu->setPath('#education');
        $menu->setParent(0);
        $manager->persist($menu);

        $menu = new Menus();
        $menu->setTitle('Portfolio');
        $menu->setPath('#portfolio');
        $menu->setParent(0);
        $manager->persist($menu);

        $menu = new Menus();
        $menu->setTitle('Contact Us');
        $menu->setPath('#contactUs');
        $menu->setParent(0);
        $manager->persist($menu);

        $menu = new Menus();
        $menu->setTitle('Skills');
        $menu->setPath('#skills');
        $menu->setParent(0);
        $manager->persist($menu);

        $manager->flush();

    }
}