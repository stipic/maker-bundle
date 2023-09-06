<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace; ?>;

use Doctrine\Bundle\FixturesBundle\Fixture;
use <?= $object_manager_class; ?>;

class <?= $class_name ?> extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
