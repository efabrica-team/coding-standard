# Change Log

## [Unreleased][unreleased]

## [0.7.0] - 2024-04-03
### Changed
- eFabricaStrict rules - allowed using mixed typehint

## [0.6.0] - 2023-12-08
### Added
- eFabricaStrict rules
  - declare(strict_types=1); at the top of each PHP file
  - each class have to be abstract or final
  - disallows using mixed typehint

## [0.5.0] - 2023-03-21
### Added
- snakecase rules
  - no underscore in method names
- spacing rules
  - no duplicate spaces between type and property / variable / parameter
- strucure rules
  - class structure is defined as follows: uses, enum cases, constants, properties, constructor, methods 
  - all constants with visibility
  - exactly one blank line between methods
- comments
  - no useless comments

## [0.4.0] - 2022-08-09
### Changed
- slevomat/coding-standard ^8.4

## [0.3.0] - 2022-06-23
### Added
- rules for uses
  - no FQN
  - no unused uses
  - alphabetically sorted uses
  - no leading backslash in uses
- require trailing comma in multi-line array

## [0.2.0] - 2021-08-02
### Added
- namespace rules
  - require one blank line before and one blank line after namespace statement
  - only one namespace per file
- uses rules
  - no blank lines between uses
  - one line before first use and one line after last use
- trait uses rules
  - no blank lines between trait uses
- requires new with parentheses.

## [0.1.0] - 2021-08-02
- created eFabrica coding standard based on PSR-2
- added Slevomat codngin standard - rule ReturnTypeHintSpacing 

[unreleased]: https://github.com/efabrica-team/coding-standard/compare/0.7.0...HEAD
[0.7.0]: https://github.com/efabrica-team/coding-standard/compare/0.6.0...0.7.0
[0.6.0]: https://github.com/efabrica-team/coding-standard/compare/0.5.0...0.6.0
[0.5.0]: https://github.com/efabrica-team/coding-standard/compare/0.4.0...0.5.0
[0.4.0]: https://github.com/efabrica-team/coding-standard/compare/0.3.0...0.4.0
[0.3.0]: https://github.com/efabrica-team/coding-standard/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/efabrica-team/coding-standard/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/efabrica-team/coding-standard/compare/2c01d023e7e5b89b2f0da19734a57516eae3a7ff...0.1.0
