<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace; ?>;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent()]
final class <?= $class_name."\n" ?>
{
    use DefaultActionTrait;
}
