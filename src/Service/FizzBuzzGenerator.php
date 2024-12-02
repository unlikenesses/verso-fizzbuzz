<?php

declare(strict_types=1);

namespace App\Service;

final class FizzBuzzGenerator
{
    public function fizzBuzz(int $start, int $end): \Generator
    {
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                yield 'FizzBuzz';
            } else if ($i % 3 === 0) {
                yield 'Fizz';
            } else if ($i % 5 === 0) {
                yield 'Buzz';
            } else {
                yield $i;
            }
        }
    }
}
