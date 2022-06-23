# eFabrica coding standard
eFabrica coding standard for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) is based on [PSR2](https://github.com/squizlabs/PHP_CodeSniffer/tree/master/src/Standards/PSR2) with some changes:

1. Allows max. 1 empty line between code lines
2. Doesn't allow any whitespace at the end of lines
3. Doesn't allow any whitespace between closing parenthesis and return type colon
4. Requires exactly one space between return type colon and return type
5. Requires exactly one space before and after each operator
6. Requires exactly one space before and after . (dot) in string concatenating
7. Requires exactly one blank line before and one blank line after namespace statement
8. Requires max. one namespace per file
9. Doesn't allow any blank lines between uses and trait uses
10. Requires one line before first use and one line after last use (not applied if it is trait use and it is first / last in class)
11. Requires exactly one blank line before and after each function except first and last
12. Requires exactly one blank line before and after each member var except first and last
13. Requires `new` with parentheses.
14. Prefer to use single quotes over double quotes. Double quotes are allowed if string contains variable
15. Requires trailing comma after the last element of multi-line array
16. Requires all names as reference (no fully qualified or partial names - everything is in uses)
17. Requires all uses to be used
18. Requires alphabetically sorted uses
19. Disallows leading backslash for uses

## Usage
```shell
composer require efabrica/coding-standard --dev
vendor/bin/phpcs {dirs} --standard="vendor/efabrica/coding-standard/eFabrica" {other-options}
```

for {dirs} use space-separated list of directories
for {other-options} see `vendor/bin/phpcs --help` or visit [PHP_CodeSniffer documentation](https://github.com/squizlabs/PHP_CodeSniffer)
