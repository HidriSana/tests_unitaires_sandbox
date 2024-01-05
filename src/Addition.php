<?php

declare(strict_types=1);

namespace App;

final class Addition
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function print($something): void
    {
        echo ($something);
    }

    public function displayFruits($fruit1, $fruit2, $fruit3): array
    {
        return [$fruit1, $fruit2, $fruit3];
    }
}
