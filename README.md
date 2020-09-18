# NzoHoneypotBundle

A Symfony bundle that provides a very simple way to handle Honeypot form types.

## Prerequisites
This version of the bundle requires Symfony  +5.0

## Installation

```bash
$ composer require nzo/honeypot-bundle
```
    
## Usage

Once installed and configured you can start using `Nzo\HoneypotBundle\Form\Type\HoneypotType`
form type in your forms.

### Basic usage example:

```php
<?php

namespace Acme\DemoBundle\Form\Type;

use Nzo\HoneypotBundle\Form\Type\HoneypotType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FooType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // ...
        // Honeypot field
        $builder->add('SOME-FAKE-NAME', HoneypotType::class);
    }
}
```

This bundle is under the MIT license. See the complete license in the bundle:

See [LICENSE](https://github.com/nayzo/NzoHoneypotBundle/tree/master/LICENSE)
