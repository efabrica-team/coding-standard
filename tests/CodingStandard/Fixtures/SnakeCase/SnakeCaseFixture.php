<?php

namespace CodingStandard\Fixtures\SnakeCase;

class SnakeCaseFixture
{
    private function foo_bar(): string
    {
        return 'foo_bar';
    }

    protected function bar_baz(): int
    {
        return 123;
    }

    public function foo_baz(): array
    {
        return [];
    }
}
