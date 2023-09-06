<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace; ?>;

use PHPUnit\Framework\TestCase;

class <?= $class_name ?> extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }
}
