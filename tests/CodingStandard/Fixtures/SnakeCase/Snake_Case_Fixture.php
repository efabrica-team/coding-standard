<?php

namespace CodingStandard\Fixtures\SnakeCase;

use stdClass;

class Snake_Case_Fixture
{
    private string $foo_bar;

    protected int $bar_baz;

    public array $foo_baz;

    protected stdClass $class;

    public function __construct(string $foo_bar)
    {
        $this->foo_bar = $foo_bar;
    }
}
