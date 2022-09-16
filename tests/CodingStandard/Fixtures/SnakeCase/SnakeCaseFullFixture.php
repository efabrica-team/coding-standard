<?php

namespace CodingStandard\Fixtures\SnakeCase;

use stdClass;

class SnakeCaseFullFixture
{
    private string $foo_bar;

    protected int $bar_baz;

    public array $foo_baz;

    protected stdClass $class;

    public function __construct(string $foo_bar)
    {
        $this->foo_bar = $foo_bar;
    }

    private function foo_bar(): string
    {
        return $this->foo_bar;
    }

    protected function bar_baz(): int
    {
        return $this->bar_baz;
    }

    public function foo_baz(): array
    {
        return $this->foo_baz;
    }

    public function hereShouldBeNoError(): array
    {
        return [
            $this->class->test,
            $this->class->test_2,
            $this->class->foo_bar,
        ];
    }
}
