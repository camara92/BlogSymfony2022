<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use App\DataFixtures;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
// create a French faker

        $faker = Factory::create('fr_FR');
        for ($i = 0; $i <= 15; $i++) {
            $post = new Post();

            $post->setTitle($faker->sentence($nbWords =2, $varibleNbWords =true));
            $post->setContent($faker->sentence($nbWords =15, $varibleNbWords =true));
            $post->setAuthor($faker->name());
            $post->setCreatedAt($faker->dateTimeBetween('-6 month'));
            $manager->persist($post);
        }
        $manager->flush();
    }
}
