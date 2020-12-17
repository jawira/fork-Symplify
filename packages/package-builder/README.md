# Package Builder

[![Downloads total](https://img.shields.io/packagist/dt/symplify/package-builder.svg?style=flat-square)](https://packagist.org/packages/symplify/package-builder/stats)

This tools helps you with Collectors in DependecyInjection, Console shortcuts, ParameterProvider as service and many more.

## Install

```bash
composer require symplify/package-builder
```

## Use

### Get All Parameters via Service

```yaml
# app/config/services.yaml
parameters:
    source: "src"

services:
    _defaults:
        autowire: true

    Symplify\PackageBuilder\Parameter\ParameterProvider: ~
```

Then require in `__construct()` where needed:

```php
namespace App\Configuration;

use Symplify\PackageBuilder\Parameter\ParameterProvider;

final class ProjectConfiguration
{
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;

    public function __construct(ParameterProvider $parameterProvider)
    {
        $this->parameterProvider = $parameterProvider;
    }

    public function getSource(): string
    {
        // returns "src"
        return $this->parameterProvider->provideParameter('source');
    }
}
```

<br>

### Get Vendor Directory from Anywhere

```php
$vendorDirProvider = new Symplify\PackageBuilder\Composer\VendorDirProvider();
// returns path to vendor directory
$vendorDirProvider->provide();
```

<br>

### Smart Compiler Passes for Lazy Programmers ↓

[How to add compiler pass](https://symfony.com/doc/current/service_container/compiler_passes.html#working-with-compiler-passes-in-bundles)?

<br>

### Always Autowire this Type

Do you want to allow users to register services without worrying about autowiring? After all, they might forget it and that would break their code. Set types to always autowire:

```php
namespace App;

use PhpCsFixer\Fixer\FixerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symplify\PackageBuilder\DependencyInjection\CompilerPass\AutowireInterfacesCompilerPass;

final class AppKernel extends Kernel
{
    protected function build(ContainerBuilder $containerBuilder): void
    {
        $containerBuilder->addCompilerPass(new AutowireInterfacesCompilerPass([FixerInterface::class]));
    }
}
```

This will make sure, that `PhpCsFixer\Fixer\FixerInterface` instances are always autowired.

<br>

That's all :)

<br>

## Report Issues

In case you are experiencing a bug or want to request a new feature head over to the [Symplify monorepo issue tracker](https://github.com/symplify/symplify/issues)

## Contribute

The sources of this package are contained in the Symplify monorepo. We welcome contributions for this package on [symplify/symplify](https://github.com/symplify/symplify).
