<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Service\FizzBuzzGenerator;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function testItGeneratesTheCorrectValueForAGivenInput(int $limit, int|string $expected): void
    {
        $generator = (new FizzBuzzGenerator())->fizzBuzz($limit, $limit);
        foreach ($generator as $output) {
            $this->assertEquals($output, $expected);
        }
    }

    /**
     * @return array<array<int, int|string>>
     */
    public function fizzBuzzDataProvider(): array
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [7, 7],
            [8, 8],
            [9, 'Fizz'],
            [10, 'Buzz'],
            [11, 11],
            [12, 'Fizz'],
            [13, 13],
            [14, 14],
            [15, 'FizzBuzz'],
        ];
    }
}
