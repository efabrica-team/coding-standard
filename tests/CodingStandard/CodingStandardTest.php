<?php

declare(strict_types=1);

namespace CodingStandard;

use Generator;
use PHPUnit\Framework\TestCase;

final class CodingStandardTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test(string $path, string $expectedOutput): void {
        $standard = realpath(__DIR__ . '/../../eFabrica');
        $command = "vendor/bin/phpcs $path --standard=$standard --extensions=\"php\" -n";
        $output = (string)shell_exec($command);

        $expectedOutput = trim(str_replace('###ROOT_PATH###', realpath(__DIR__ . '/../../'), $expectedOutput));
        $output = trim(preg_replace('/Time: (.*?); Memory: (.*?)$/', '', trim($output)));
        $this->assertSame($expectedOutput, $output);
    }

    public function dataProvider(): Generator
    {
//        yield [__DIR__ . '/Fixtures/SnakeCase', file_get_contents(__DIR__ . '/Fixtures/SnakeCase/output.txt')];
        yield [__DIR__ . '/Fixtures/Spaces', file_get_contents(__DIR__ . '/Fixtures/Spaces/output.txt')];
    }
}
