<?php

declare(strict_types=1);

namespace App\Tests;

use App\Addition;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;


final class AdditionTest extends Testcase
{
    public function testDisplayFruits()
    {
        $addition = new Addition();
        $fruitsArray = $addition->displayFruits('Bananes', 'Pommes', 'Oranges');
        $this->assertEquals($fruitsArray, ['Bananes', 'Pommes', 'Oranges']);
        $this->assertArrayHasKey(1, $fruitsArray);
        $this->assertCount(3, $fruitsArray);
        $this->assertContainsOnly('string', ['Bananes', 'Pommes', 'Oranges']);
        $this->assertContains('Bananes', $fruitsArray);
    }
    /*public function testAdd(): void
    {
        $addition  = new Addition();
        $result = $addition->add(5, 11);
        $this->assertSame($result, 16);
    }*/

    public function testPrint(): void
    {

        $addition  = new Addition();
        $print = $addition->print("Hello!");
        if ($print === null) {
            $this->markTestSkipped("You're seing this message because it's null");
        } else {
            $this->expectOutputString("Hellodsq!", $print);
            $this->markTestIncomplete(
                'This test has not been implemented yet.',
            );
        }
    }

    /* public function testArrayElementsAddition(): void
    {
        $array = [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3],
        ];
        foreach ($array as $a) {
            assertSame($a[2], $a[0] + $a[1]);
        }
    }*/
    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [2, 1, 1],
            [1, 0, 1],
            [1, 1, 3],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }
}
