# eFabrica coding standards

eFabrica coding standards for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) are based on [PSR2](https://github.com/squizlabs/PHP_CodeSniffer/tree/master/src/Standards/PSR2).

## eFabrica coding standard
Is based on PSR2 and adds some rules:

1. Allows max. 1 empty line between code lines
1. Doesn't allow any whitespace at the end of lines
1. Doesn't allow any whitespace between closing parenthesis and return type colon
1. Requires exactly one space between type and variable
1. Requires exactly one space between return type colon and return type
1. Requires exactly one space before and after each operator
1. Requires exactly one space before and after . (dot) in string concatenating
1. Requires exactly one space after keywords private, protected, public, abstract, final
1. Requires exactly one blank line before and one blank line after namespace statement
1. Requires max. one namespace per file
1. Doesn't allow any blank lines between uses and trait uses
1. Requires one line before first use and one line after last use (not applied if it is trait use and it is first / last in class)
1. Requires exactly one blank line before and after each function except first and last
1. Requires exactly one blank line before and after each member var except first and last
1. Requires `new` with parentheses.
1. Prefer to use single quotes over double quotes. Double quotes are allowed if string contains variable
1. Requires trailing comma after the last element of multi-line array
1. Requires all names as reference (no fully qualified or partial names - everything is in uses)
1. Requires all uses to be used
1. Requires alphabetically sorted uses
1. Disallows leading backslash for uses
1. Disallows snake_case for properties, variables, function names, method names 
1. Doesn't allow underscore in method names
1. Doesn't allow multiple spaces between type and property / variable / parameter
1. Class structure is defined as follows: uses, enum cases, constants, properties, constructor, methods 
1. Requires visibility for all constants
1. Requires exactly one blank line between methods
1. Doesn't allow any useless comments

### Usage
```shell
composer require efabrica/coding-standard --dev
vendor/bin/phpcs {dirs} --standard="vendor/efabrica/coding-standard/eFabrica" {other-options}
```

> for {dirs} use space-separated list of directories \
> for {other-options} see `vendor/bin/phpcs --help` or visit [PHP_CodeSniffer documentation](https://github.com/squizlabs/PHP_CodeSniffer)

## eFabricaStrict coding standard
Is based on eFabrica coding standard and adds some strict rules:

1. Use `declare(strict_types=1);` at the top of each PHP file. Use one empty line before and also after declare 
1. Requires each class to be declared either as abstract or as final

### Usage
```shell
composer require efabrica/coding-standard --dev
vendor/bin/phpcs {dirs} --standard="vendor/efabrica/coding-standard/eFabricaStrict" {other-options}
```

> for {dirs} use space-separated list of directories \
> for {other-options} see `vendor/bin/phpcs --help` or visit [PHP_CodeSniffer documentation](https://github.com/squizlabs/PHP_CodeSniffer)
