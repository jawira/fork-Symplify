# PHPStan Extensions

[![Downloads total](https://img.shields.io/packagist/dt/symplify/phpstan-extensions.svg?style=flat-square)](https://packagist.org/packages/symplify/phpstan-extensions/stats)

## Install

```bash
composer require symplify/phpstan-extensions --dev
```

Update config:

```yaml
# phpstan.neon
includes:
    - 'vendor/symplify/phpstan-extensions/config/config.neon'
```

## Use

### Symplify Error Formatter

*Works best with [anthraxx/intellij-awesome-console](https://github.com/anthraxx/intellij-awesome-console)*

- Do you want to **click the error and get right to the line in the file** it's reported at?
- Do you want to **copy-paste regex escaped error to your `ignoreErrors`**?

```bash
vendor/bin/phpstan analyse src --level max --error-format symplify
```

↓

```bash
------------------------------------------------------------------------------------------
src/Command/ReleaseCommand.php:51
------------------------------------------------------------------------------------------
- "Call to an undefined method Symplify\\Command\\ReleaseCommand\:\:nonExistingCall\(\)"
------------------------------------------------------------------------------------------
```

The config also loads few return type extensions.

### Return Type Extensions

#### `Symplify\PHPStanExtensions\ReturnTypeExtension\ContainerGetTypeExtension`

With Symfony container and type as an argument, you always know **the same type is returned**:

```php
use Symfony\Component\DependencyInjection\Container;

/** @var Container $container */
// PHPStan: object ❌
$container->get(Type::class);
// Reality: Type ✅
$container->get(Type::class);

// same for in-controller/container-aware context
$this->get(Type::class);
```

#### `Symplify\PHPStanExtensions\ReturnTypeExtension\KernelGetContainerAfterBootReturnTypeExtension`

After Symfony Kernel boot, `getContainer()` always returns the container:

```php
use Symfony\Component\HttpKernel\Kernel;

final class AppKernel extends Kernel
{
    // ...
}

$kernel = new AppKernel('prod', false);
$kernel->boot();

// PHPStan: null|ContainerInterface ❌
$kernel->getContainer();
// Reality: ContainerInterface ✅
$kernel->getContainer();
 // Reality: ContainerInterface ✅
```

#### `Symplify\PHPStanExtensions\ReturnTypeExtension\SplFileInfoTolerantReturnTypeExtension`

Symfony Finder finds only existing files (obviously), so the `getRealPath()` always return `string`:

```php
use Symfony\Component\Finder\Finder;

$finder = new Finder();

foreach ($finder as $fileInfo) {
    // PHPStan: false|string ❌
    $fileInfo->getRealPath();
    // Reality: string ✅
    $fileInfo->getRealPath();
}
```

<br>

## Report Issues

In case you are experiencing a bug or want to request a new feature head over to the [Symplify monorepo issue tracker](https://github.com/symplify/symplify/issues)

## Contribute

The sources of this package are contained in the Symplify monorepo. We welcome contributions for this package on [symplify/symplify](https://github.com/symplify/symplify).
