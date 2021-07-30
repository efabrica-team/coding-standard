# eFabrica coding standard
eFabrica coding standard for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) is based on [PSR2](https://github.com/squizlabs/PHP_CodeSniffer/tree/master/src/Standards/PSR2) with some changes:

1. Allows max. 1 empty line between code lines
1. Doesn't allow any white spaces at the end of lines
1. Requires exactly one space before and after each operator
1. Requires exactly one space before and after . (dot) in string concatenating
1. Requires exactly one blank line before and after each function except first and last
1. Requires exactly one blank line before and after each member var except first and last

## Usage
```shell
composer require efabrica/coding-standard
vendor/bin/phpcs {dirs} --standard="vendor/efabrica/coding-standard/eFabrica" {other-options}
```

for {other-options} see `vendor/bin/phpcs --help` or visit [PHP_CodeSniffer documentation](https://github.com/squizlabs/PHP_CodeSniffer)
