# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

PRs and issues are linked, so you can find more about it. Thanks to [ChangelogLinker](https://github.com/symplify/changelog-linker).

<!-- changelog-linker -->

<!-- dumped content start -->
## [8.3.5] - 2020-09-17

### Added

#### CodingStandard

- [#2188] Fix [#2173] : Add No static properties rule for PHPStan, Thanks to [@samsonasik]

#### Unknown Package

- [#2189] Add NoStaticPropertyRule to symplify.neon, Thanks to [@samsonasik]

### Changed

#### CodingStandard

- [#2186] Make AnnotateRegexClassConstWithRegexLinkRule look only for _REGEX|_PATTERN suffix

#### Unknown Package

- [#2196] static removal

### Removed

- [#2190] remove static properties where possible

## [8.3.3] - 2020-09-16

### Changed

#### CodingStandard

- [#2182] Rename NoDebugFuncCallRule to ForbiddenFuncCallRule and make generic

#### Unknown Package

- [#2183] Correct when to pluralise word, Thanks to [@u01jmg3]

### Removed

#### EasyCodingStandard

- [#2184] Remove unary/not-operator conflicts, false positive

## [8.3.2] - 2020-09-15

### Added

#### CodingStandard

- [#2180] Add RemovePHPStormAnnotationFixer

#### EasyCodingStandard

- [#2178] Add markdown command gif to README

## [8.3.0] - 2020-09-14

### Changed

- [#2174] Decouple sub-package SnippetFormatter

## 8.3.6 - 2020-09-17

### Added

#### SmartFileSystem

- [#2198] Add JsonFileSystem

### Deprecated

#### AutoBindParameter

- [#2201] Deprecated compiler pass

### Removed

#### EasyCodingStandard

- [#2200] Drop autobind, use ParameterProvider with pre-defined constants instead

<!-- dumped content end -->

<!-- dumped content start -->
## [8.3.0]

### Added

#### CodingStandard

- [#2151] Add NoInlineStringRegexRule
- [#2164] Add CheckDirPathExistanceRule
- [#2156] Add StandardizeHereNowDocKeywordFixer and SpaceAfterCommaHereNowDocFixer
- [#2160] Add NoNewOutsideFactoryRule
- [#2150] Add NoPostIncPostDecRule
- [#2161] Add RequireDataProviderTestMethodRule
- [#2165] Add parent if check to NoMissingDirPathRule

#### EasyCodingStandard

- [#2170] Add multiple files/directories support to check-markdown command

#### PHPStanExtensions

- [#2155] Add argument swap check

#### SmartFileSystem

- [#2162] Add SmartFinder

#### rector

- [#2171] Add naming set

### Changed

#### CodingStandard

- [#2154] Make fixture dir always Fixture
- [#2153] 3 new PHPStan rules

#### EasyCodingStandard

- [#2174] Decouple sub-package SnippetFormatter
- [#2157] Report conflicting unary

#### Unknown Package

- [#2163] composer: be open about PHP 8 and beyond

### Fixed

#### ChangelogLinker

- [#2175] Fix url resolving for repos in SSH format, Thanks to [@jawira]

#### CodingStandard

- [#2166] Fix AnnotateRegexClassConstWithRegexLinkRule for letter

#### Unknown Package

- [#2159] Typo fix: packakges to packages, Thanks to [@samsonasik]

## [8.2.27] - 2020-09-09

### Added

- [#2143] Add --fix option to formatter markdown/heredoc-nowdoc command, Thanks to [@samsonasik]

### Changed

- [#2146] Failure test case for regex bug in heredoc-nowdoc formatter on multi snippet, Thanks to [@samsonasik]

### Fixed

- [#2147] Fix heredoc/nowdoc formatter regex for multiple code snippet in single php file, Thanks to [@samsonasik]

## [8.2.26] - 2020-09-08

### Added

#### CodingStandard

- [#2144] Add NoAbstractMethodRule

#### Unknown Package

- [#2141] Added --no-strict-types-declaration option to Formatter, Thanks to [@samsonasik]
- [#2140] Formatter: don't add <?php open tag if not exists in code snippet, Thanks to [@samsonasik]

## [8.2.25] - 2020-09-08

#### CodingStandard

- [#2138] Add various Object Calisthenics rules

## [8.2.24] - 2020-09-07

#### Unknown Package

- [#2137] Add HeredocNowdocPHPCodeFormatter to format php code inside heredoc, Thanks to [@samsonasik]

## [8.2.22] - 2020-09-07

#### CodingStandard

- [#2122] Add NoStaticCall rule
- [#2136] Add UppercaseConstantRule
- [#2135] Add TooLongVariableRule
- [#2132] Add TooManyFieldsRule
- [#2131] Add ExcessivePublicCountRule
- [#2128] Add PrefferedStaticCallOverFuncCallRule
- [#2127] Add ExcessiveParameterListRule

#### Unknown Package

- [#2118] Fixes [#2055] add MarkdownCodeFormatter to format markdown code, Thanks to [@samsonasik]

### Changed

#### CodingStandard

- [#2124] Rename max_cognitive_complexity to max_method_cognitive_complexity

#### EasyCodingStandard

- [#2116] Simplify README
- [#2125] Align rule-sets with PHP-CS-Fixer sets, Thanks to [@ckrack]

### Deprecated

- [#2129] Drop deprecated find command, move to ecs.php

### Fixed

#### CodingStandard

- [#2123] Fix preffered class rule for static calls

#### EasyCodingStandard

- [#2133] Fix spacing in MarkdownPHPCodeFormatter

#### EasyTesting

- [#2117] Fix StaticFixtureUpdater

## [8.2.20] - 2020-09-02

#### SetConfigResolver

- [#2112] Fix set loading in realpath phar

## [8.2.18] - 2020-09-01

### Changed

#### PHPStanExtensions

- [#2107] Show files if multiple per message

## [8.2.17] - 2020-08-31

### Added

#### ChangelogLinker

- [#2103] Add config constants REPOSITORY_URL, Thanks to [@zingimmick]

### Changed

#### Unknown Package

- [#2106] Allow PHP 8.0
- [#2104] Allow PHP 8.0

<!-- dumped content end -->

<!-- dumped content start -->
## [v8.2.15] - 2020-08-28

### Added

#### PHPStanExtensions

- [#2099] Add NoReturnArrayVariableList

### Changed

#### CodingStandard

- [#2097] Skip parent-enforced reference in NoReferenceRule

#### Unknown Package

- [#2101] restore slevomat, finally working with new phpdoc-parser
- [#2098] From arrays to value objects

## [v8.2.14] - 2020-08-26

### Added

#### CodingStandard

- [#2094] Add ForbiddenComplexArrayConfigInSetRule, ForbiddenArrayDestructRule, ForbiddenArrayWithStringKeysRule, RequireStringArgumentInMethodCallRule

### Changed

- [#2095] Skip closure use in NoReferenceRule

## [v8.2.12] - 2020-08-24

- [#2093] Improve array list indents

#### Unknown Package

- [#2091] Move dependencies to require-dev, Thanks to [@enumag]

## [v8.2.10] - 2020-08-22

### Added

#### CodingStandard

- [#2086] Add NoEntityManagerInControllerRule, NoGetRepositoryOutsideConstructorRule

### Changed

- [#2089] README update with coding-standard registrations

### Fixed

#### EasyCodingStandard

- [#2088] Fix config example showing usage of CACHE_DIRECTORY option as array, Thanks to [@nclsHart]

## [v8.2.8] - 2020-08-18

### Changed

#### CodingStandard

- [#2084] Various NewlineInNestedAnnotationFixer improvements

## [v8.2.6] - 2020-08-18

#### Unknown Package

- [#2082] do not show output if not needed

## [v8.2.5] - 2020-08-18

#### CodingStandard

- [#2081] Improve nested array annotations

#### static

- [#2080] Stricter params

<!-- dumped content end -->

<!-- dumped content start -->
## [v8.2.4] - 2020-08-18

### Added

#### CI

- [#2060] Add Rector CI

#### CodingStandard

- [#2078] Add anntotation new-line indent rule

#### EasyCodingStandard

- [#2071] Add missing require in scoper config, Thanks to [@nclsHart]
- [#2069] Add doctrine annotations set, switch set strings to constants

#### MonorepoBuilder

- [#2073] Add asterisk split support

#### Unknown Package

- [#2070] add constant dashes string method

### Changed

#### ChangelogLinker

- [#2074] YAML to PHP

#### CodingStandard

- [#2079] Improving README

#### PHPStanExtensions

- [#2072] Clear trait path in report

### Fixed

#### EasyCodingStandard

- [#2075] Fix common.php, Thanks to [@enumag]

## [v8.2.3] - 2020-08-14

### Added

#### CodingStandard

- [#2066] Add no array access rule to README and set
- [#2062] Add NoArrayAccessOnObjectRule

### Changed

#### Unknown Package

- [#2057] Update symfony-risky.php, Thanks to [@seb-jean]

<!-- dumped content end -->

<!-- dumped content start -->
## [v8.2.2]

### Added

#### CodingStandard

- [#2054] Add PreventParentMethodVisibilityOverrideRule

### Changed

#### Unknown Package

- [#2051] Update php-cs-fixer-psr2.php, Thanks to [@seb-jean]
- [#2050] Update symfony.php, Thanks to [@seb-jean]
- [#2049] Update symfony-risky.php, Thanks to [@seb-jean]

### Deprecated

#### ParameterNameGuard

- [#2056] Deprecated for PHP config with constants

## [v8.1.21] - 2020-08-07

### Added

#### EasyCodingStandard

- [#2044] Add rest of config constants

#### Unknown Package

- [#2045] Add PHP syntax to README
- [#2042] add "strict" set to EasyCodingStandardSetProvider, Thanks to [@hustlahusky]

### Changed

- [#2043] Update ecs.php, Thanks to [@cafferata]

### Deprecated

#### EasyCodingStandard

- [#2046] Warn about deprecated YAML syntax
- [#2040] Deprecate "find" command

## [v8.1.20] - 2020-08-06

### Removed

- [#2039] remove slevomat cs, breaking build for too many months

## [v8.1.19] - 2020-07-30

### Added

#### EasyTesting

- [#2035] Add directory compare assertion and fixture updater

<!-- dumped content end -->

<!-- dumped content start -->
## [v8.1.18] - 2020-07-29

### Changed

#### CodingStandard

- [#2030] Make NoFunctionCallInMethodCallRule skip fqn names

#### Unknown Package

- [#2034] Update guzzlehttp/guzzle requirement from ^6.5 to ^6.5|^7.0, Thanks to [@zingimmick]
- [#2032] Wording, Thanks to [@u01jmg3]

#### cs

- [#2029] apply

## [v8.1.15] - 2020-07-21

#### MonorepoBuilder

- [#2027] Allow monorepo-builder.php

## [v8.1.14] - 2020-07-21

#### EasyCodingStandard

- [#2026] Use static map for sets

#### Unknown Package

- [#2025] switch Rector YAML to PHP

## [v8.1.12] - 2020-07-18

#### SetConfigResolver

- [#2024] Prefer .php version, return instant match

## [v8.1.11] - 2020-07-18

#### Unknown Package

- [#2023] correct config.php namespace

### Removed

- [#2021] Delete null, Thanks to [@shyim]

## [v8.1.10] - 2020-07-16

### Changed

- [#2018] Correct the type of the configuration., Thanks to [@stefangr]

### Fixed

#### EasyCodingStandard

- [#2020] Fix file hash computer for php file

## [v8.1.9] - 2020-07-16

- [#2017] fix YAML config sets parsing in case of atypical fixer/sniff registration

## [v8.1.8] - 2020-07-16

### Changed

- [#2014] Allow ecs.php config
- [#2012] Move sets from YAML to PHP, keep BC configs

## [v8.1.7] - 2020-07-15

### Added

#### SmartFileSystem

- [#2004] Add readFile() method + use PHP config over YAML

#### Unknown Package

- [#2002] Add a new conflict resolution, Thanks to [@u01jmg3]

### Changed

#### CodingStandard

- [#2007] Switch symplify coding standard from YAML to PHP

#### EasyCodingStandard

- [#2008] Move config from YAML to PHP
- [#2010] Prepare sets for switch to PHP

#### MonorepoBuilder

- [#2009] Switch config YAML to PHP

#### Unknown Package

- [#2005] YAML to PHP configs
- [#1997] switch YAML configuration to PHP
- [#1995] Find only docblocks that are parseable by phpdoc-parser, Thanks to [@JarJak]

### Fixed

- [#1998] Fix link to CategoryResolver, Thanks to [@jschaedl]

### Removed

#### ComposerJsonManipulator

- [#2003] Removing empty keys from json content before dumping to file, Thanks to [@liarco]

## [v8.1.6] - 2020-07-08

### Added

#### SmartFileSystem

- [#1993] Add getRealPathWithoutSuffix() method

### Fixed

#### Unknown Package

- [#1992] Fix broken URL in monorepo-builder Readme, Thanks to [@EnCz]

## [v8.1.4] - 2020-07-06

### Added

#### CodingStandard

- [#1990] Add NoFunctionCallInMethodCallRule
- [#1987] Add NoEmptyRule

### Changed

#### CI

- [#1988] Use Github Actions as a matrix - from 11 files to 2 🎉

## [v8.1.3] - 2020-07-04

### Added

#### CodingStandard

- [#1985] Add NoIssetOrEmptyOnObjectRule

## [v8.1.0] - 2020-06-25

### Changed

#### EasyTesting

- [#1984] Init new package

## [v8.0.1] - 2020-06-15

### Added

#### MonorepoBuilder

- [#1979] Add prefixed version

<!-- dumped content end -->

## [v8.0.0-beta3]

### Added

#### ChangelogLinker

- [#1966] added failing test with expected result in ChangelogLinkerTest, Thanks to [@pesektomas]

#### ParamaterNameGuard

- [#1968] Dislocate ParameterNameGuardBundle to prevent auto-adding on ECS install

### Changed

#### ChangelogLinker

- [#1965] Simplify ChangelogLinkerTest

### Fixed

- [#1967] Fix inner-link of words to link

## [v8.0.0-beta2]

#### MonorepoBuilder

- [#1964] Fix pre-release versioning for next version

## [v8.0.0-beta1]

### Added

- [#1944] add config class presence

### Changed

- [#1959] bump Rector 0.7.26

#### CodingStandard

- [#1943] Improve SeeAnnotationToTestRule

#### EasyCodingStandard

- [#1951] improve basic sets with new slevomat rules
- [#1957] Dislocate bundle locations to prevent symfony/flex autoregistration [BC break]

#### MonorepoBuilder

- [#1934] Switch from default workers to manually registered workers

#### PHPStanExtensions

- [#1942] Reduce dependencies

#### SmartFileSystem

- [#1955] Move separateFilesAndDirectories() from FileSystem here [BC break]

### Deprecated

- [#1945] Remove deprecated content
- [#1902] [Symplify 8] Remove deprecated code

### Fixed

- [#1941] Fix typos, Thanks to [@staabm]

### Removed

#### PackageBuilder

- [#1956] Drop too magic AutoReturnFactoryCompilerPass [BC break]

[#1968]: https://github.com/symplify/symplify/pull/1968
[#1967]: https://github.com/symplify/symplify/pull/1967
[#1966]: https://github.com/symplify/symplify/pull/1966
[#1965]: https://github.com/symplify/symplify/pull/1965
[#1964]: https://github.com/symplify/symplify/pull/1964
[#1959]: https://github.com/symplify/symplify/pull/1959
[#1957]: https://github.com/symplify/symplify/pull/1957
[#1956]: https://github.com/symplify/symplify/pull/1956
[#1955]: https://github.com/symplify/symplify/pull/1955
[#1951]: https://github.com/symplify/symplify/pull/1951
[#1945]: https://github.com/symplify/symplify/pull/1945
[#1944]: https://github.com/symplify/symplify/pull/1944
[#1943]: https://github.com/symplify/symplify/pull/1943
[#1942]: https://github.com/symplify/symplify/pull/1942
[#1941]: https://github.com/symplify/symplify/pull/1941
[#1934]: https://github.com/symplify/symplify/pull/1934
[#1902]: https://github.com/symplify/symplify/pull/1902
[v8.0.0-beta3]: https://github.com/symplify/symplify/compare/v8.0.0-beta2...v8.0.0-beta3
[v8.0.0-beta2]: https://github.com/symplify/symplify/compare/v8.0.0-beta1...v8.0.0-beta2
[@staabm]: https://github.com/staabm
[@pesektomas]: https://github.com/pesektomas
[#2034]: https://github.com/symplify/symplify/pull/2034
[#2032]: https://github.com/symplify/symplify/pull/2032
[#2030]: https://github.com/symplify/symplify/pull/2030
[#2029]: https://github.com/symplify/symplify/pull/2029
[#2027]: https://github.com/symplify/symplify/pull/2027
[#2026]: https://github.com/symplify/symplify/pull/2026
[#2025]: https://github.com/symplify/symplify/pull/2025
[#2024]: https://github.com/symplify/symplify/pull/2024
[#2023]: https://github.com/symplify/symplify/pull/2023
[#2021]: https://github.com/symplify/symplify/pull/2021
[#2020]: https://github.com/symplify/symplify/pull/2020
[#2018]: https://github.com/symplify/symplify/pull/2018
[#2017]: https://github.com/symplify/symplify/pull/2017
[#2014]: https://github.com/symplify/symplify/pull/2014
[#2012]: https://github.com/symplify/symplify/pull/2012
[#2010]: https://github.com/symplify/symplify/pull/2010
[#2009]: https://github.com/symplify/symplify/pull/2009
[#2008]: https://github.com/symplify/symplify/pull/2008
[#2007]: https://github.com/symplify/symplify/pull/2007
[#2005]: https://github.com/symplify/symplify/pull/2005
[#2004]: https://github.com/symplify/symplify/pull/2004
[#2003]: https://github.com/symplify/symplify/pull/2003
[#2002]: https://github.com/symplify/symplify/pull/2002
[#1998]: https://github.com/symplify/symplify/pull/1998
[#1997]: https://github.com/symplify/symplify/pull/1997
[#1995]: https://github.com/symplify/symplify/pull/1995
[#1993]: https://github.com/symplify/symplify/pull/1993
[#1992]: https://github.com/symplify/symplify/pull/1992
[#1990]: https://github.com/symplify/symplify/pull/1990
[#1988]: https://github.com/symplify/symplify/pull/1988
[#1987]: https://github.com/symplify/symplify/pull/1987
[#1985]: https://github.com/symplify/symplify/pull/1985
[#1984]: https://github.com/symplify/symplify/pull/1984
[#1979]: https://github.com/symplify/symplify/pull/1979
[v8.1.9]: https://github.com/symplify/symplify/compare/v8.1.8...v8.1.9
[v8.1.8]: https://github.com/symplify/symplify/compare/v8.1.7...v8.1.8
[v8.1.7]: https://github.com/symplify/symplify/compare/v8.1.6...v8.1.7
[v8.1.6]: https://github.com/symplify/symplify/compare/v8.1.4...v8.1.6
[v8.1.4]: https://github.com/symplify/symplify/compare/v8.1.3...v8.1.4
[v8.1.3]: https://github.com/symplify/symplify/compare/v8.1.0...v8.1.3
[v8.1.15]: https://github.com/symplify/symplify/compare/v8.1.14...v8.1.15
[v8.1.14]: https://github.com/symplify/symplify/compare/v8.1.12...v8.1.14
[v8.1.12]: https://github.com/symplify/symplify/compare/v8.1.11...v8.1.12
[v8.1.11]: https://github.com/symplify/symplify/compare/v8.1.10...v8.1.11
[v8.1.10]: https://github.com/symplify/symplify/compare/v8.1.9...v8.1.10
[v8.1.0]: https://github.com/symplify/symplify/compare/v8.0.1...v8.1.0
[v8.0.1]: https://github.com/symplify/symplify/compare/v8.0.0-beta3...v8.0.1
[@zingimmick]: https://github.com/zingimmick
[@u01jmg3]: https://github.com/u01jmg3
[@stefangr]: https://github.com/stefangr
[@shyim]: https://github.com/shyim
[@liarco]: https://github.com/liarco
[@jschaedl]: https://github.com/jschaedl
[@JarJak]: https://github.com/JarJak
[@EnCz]: https://github.com/EnCz
[#2056]: https://github.com/symplify/symplify/pull/2056
[#2054]: https://github.com/symplify/symplify/pull/2054
[#2051]: https://github.com/symplify/symplify/pull/2051
[#2050]: https://github.com/symplify/symplify/pull/2050
[#2049]: https://github.com/symplify/symplify/pull/2049
[#2046]: https://github.com/symplify/symplify/pull/2046
[#2045]: https://github.com/symplify/symplify/pull/2045
[#2044]: https://github.com/symplify/symplify/pull/2044
[#2043]: https://github.com/symplify/symplify/pull/2043
[#2042]: https://github.com/symplify/symplify/pull/2042
[#2040]: https://github.com/symplify/symplify/pull/2040
[#2039]: https://github.com/symplify/symplify/pull/2039
[#2035]: https://github.com/symplify/symplify/pull/2035
[v8.2.2]: https://github.com/symplify/symplify/compare/v8.1.21...v8.2.2
[v8.1.21]: https://github.com/symplify/symplify/compare/v8.1.20...v8.1.21
[v8.1.20]: https://github.com/symplify/symplify/compare/v8.1.19...v8.1.20
[v8.1.19]: https://github.com/symplify/symplify/compare/v8.1.18...v8.1.19
[v8.1.18]: https://github.com/symplify/symplify/compare/v8.1.15...v8.1.18
[@seb-jean]: https://github.com/seb-jean
[@hustlahusky]: https://github.com/hustlahusky
[@cafferata]: https://github.com/cafferata
[#2079]: https://github.com/symplify/symplify/pull/2079
[#2078]: https://github.com/symplify/symplify/pull/2078
[#2075]: https://github.com/symplify/symplify/pull/2075
[#2074]: https://github.com/symplify/symplify/pull/2074
[#2073]: https://github.com/symplify/symplify/pull/2073
[#2072]: https://github.com/symplify/symplify/pull/2072
[#2071]: https://github.com/symplify/symplify/pull/2071
[#2070]: https://github.com/symplify/symplify/pull/2070
[#2069]: https://github.com/symplify/symplify/pull/2069
[#2066]: https://github.com/symplify/symplify/pull/2066
[#2062]: https://github.com/symplify/symplify/pull/2062
[#2060]: https://github.com/symplify/symplify/pull/2060
[#2057]: https://github.com/symplify/symplify/pull/2057
[v8.2.3]: https://github.com/symplify/symplify/compare/v8.2.2...v8.2.3
[@nclsHart]: https://github.com/nclsHart
[@enumag]: https://github.com/enumag
[#2101]: https://github.com/symplify/symplify/pull/2101
[#2099]: https://github.com/symplify/symplify/pull/2099
[#2098]: https://github.com/symplify/symplify/pull/2098
[#2097]: https://github.com/symplify/symplify/pull/2097
[#2095]: https://github.com/symplify/symplify/pull/2095
[#2094]: https://github.com/symplify/symplify/pull/2094
[#2093]: https://github.com/symplify/symplify/pull/2093
[#2091]: https://github.com/symplify/symplify/pull/2091
[#2089]: https://github.com/symplify/symplify/pull/2089
[#2088]: https://github.com/symplify/symplify/pull/2088
[#2086]: https://github.com/symplify/symplify/pull/2086
[#2084]: https://github.com/symplify/symplify/pull/2084
[#2082]: https://github.com/symplify/symplify/pull/2082
[#2081]: https://github.com/symplify/symplify/pull/2081
[#2080]: https://github.com/symplify/symplify/pull/2080
[v8.2.8]: https://github.com/symplify/symplify/compare/v8.2.6...v8.2.8
[v8.2.6]: https://github.com/symplify/symplify/compare/v8.2.5...v8.2.6
[v8.2.5]: https://github.com/symplify/symplify/compare/v8.2.4...v8.2.5
[v8.2.4]: https://github.com/symplify/symplify/compare/v8.2.3...v8.2.4
[v8.2.14]: https://github.com/symplify/symplify/compare/v8.2.12...v8.2.14
[v8.2.12]: https://github.com/symplify/symplify/compare/v8.2.10...v8.2.12
[v8.2.10]: https://github.com/symplify/symplify/compare/v8.2.8...v8.2.10
[#2175]: https://github.com/symplify/symplify/pull/2175
[#2174]: https://github.com/symplify/symplify/pull/2174
[#2171]: https://github.com/symplify/symplify/pull/2171
[#2170]: https://github.com/symplify/symplify/pull/2170
[#2166]: https://github.com/symplify/symplify/pull/2166
[#2165]: https://github.com/symplify/symplify/pull/2165
[#2164]: https://github.com/symplify/symplify/pull/2164
[#2163]: https://github.com/symplify/symplify/pull/2163
[#2162]: https://github.com/symplify/symplify/pull/2162
[#2161]: https://github.com/symplify/symplify/pull/2161
[#2160]: https://github.com/symplify/symplify/pull/2160
[#2159]: https://github.com/symplify/symplify/pull/2159
[#2157]: https://github.com/symplify/symplify/pull/2157
[#2156]: https://github.com/symplify/symplify/pull/2156
[#2155]: https://github.com/symplify/symplify/pull/2155
[#2154]: https://github.com/symplify/symplify/pull/2154
[#2153]: https://github.com/symplify/symplify/pull/2153
[#2151]: https://github.com/symplify/symplify/pull/2151
[#2150]: https://github.com/symplify/symplify/pull/2150
[#2147]: https://github.com/symplify/symplify/pull/2147
[#2146]: https://github.com/symplify/symplify/pull/2146
[#2144]: https://github.com/symplify/symplify/pull/2144
[#2143]: https://github.com/symplify/symplify/pull/2143
[#2141]: https://github.com/symplify/symplify/pull/2141
[#2140]: https://github.com/symplify/symplify/pull/2140
[#2138]: https://github.com/symplify/symplify/pull/2138
[#2137]: https://github.com/symplify/symplify/pull/2137
[#2136]: https://github.com/symplify/symplify/pull/2136
[#2135]: https://github.com/symplify/symplify/pull/2135
[#2133]: https://github.com/symplify/symplify/pull/2133
[#2132]: https://github.com/symplify/symplify/pull/2132
[#2131]: https://github.com/symplify/symplify/pull/2131
[#2129]: https://github.com/symplify/symplify/pull/2129
[#2128]: https://github.com/symplify/symplify/pull/2128
[#2127]: https://github.com/symplify/symplify/pull/2127
[#2125]: https://github.com/symplify/symplify/pull/2125
[#2124]: https://github.com/symplify/symplify/pull/2124
[#2123]: https://github.com/symplify/symplify/pull/2123
[#2122]: https://github.com/symplify/symplify/pull/2122
[#2118]: https://github.com/symplify/symplify/pull/2118
[#2117]: https://github.com/symplify/symplify/pull/2117
[#2116]: https://github.com/symplify/symplify/pull/2116
[#2112]: https://github.com/symplify/symplify/pull/2112
[#2107]: https://github.com/symplify/symplify/pull/2107
[#2106]: https://github.com/symplify/symplify/pull/2106
[#2104]: https://github.com/symplify/symplify/pull/2104
[#2103]: https://github.com/symplify/symplify/pull/2103
[#2055]: https://github.com/symplify/symplify/pull/2055
[v8.2.15]: https://github.com/symplify/symplify/compare/v8.2.14...v8.2.15
[@samsonasik]: https://github.com/samsonasik
[@jawira]: https://github.com/jawira
[@ckrack]: https://github.com/ckrack
[8.3.0]: https://github.com/symplify/symplify/compare/8.2.27...8.3.0
[8.2.27]: https://github.com/symplify/symplify/compare/8.2.26...8.2.27
[8.2.26]: https://github.com/symplify/symplify/compare/8.2.25...8.2.26
[8.2.25]: https://github.com/symplify/symplify/compare/8.2.24...8.2.25
[8.2.24]: https://github.com/symplify/symplify/compare/8.2.22...8.2.24
[8.2.22]: https://github.com/symplify/symplify/compare/8.2.20...8.2.22
[8.2.20]: https://github.com/symplify/symplify/compare/8.2.18...8.2.20
[8.2.18]: https://github.com/symplify/symplify/compare/8.2.17...8.2.18
[8.2.17]: https://github.com/symplify/symplify/compare/v8.2.15...8.2.17
[#2201]: https://github.com/symplify/symplify/pull/2201
[#2200]: https://github.com/symplify/symplify/pull/2200
[#2198]: https://github.com/symplify/symplify/pull/2198
[#2196]: https://github.com/symplify/symplify/pull/2196
[#2190]: https://github.com/symplify/symplify/pull/2190
[#2189]: https://github.com/symplify/symplify/pull/2189
[#2188]: https://github.com/symplify/symplify/pull/2188
[#2186]: https://github.com/symplify/symplify/pull/2186
[#2184]: https://github.com/symplify/symplify/pull/2184
[#2183]: https://github.com/symplify/symplify/pull/2183
[#2182]: https://github.com/symplify/symplify/pull/2182
[#2180]: https://github.com/symplify/symplify/pull/2180
[#2178]: https://github.com/symplify/symplify/pull/2178
[#2173]: https://github.com/symplify/symplify/pull/2173
[8.3.5]: https://github.com/symplify/symplify/compare/8.3.3...8.3.5
[8.3.3]: https://github.com/symplify/symplify/compare/8.3.2...8.3.3
[8.3.2]: https://github.com/symplify/symplify/compare/8.3.0...8.3.2
