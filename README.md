NzoHoneypotBundle
=================

[![Build Status](https://travis-ci.org/nayzo/NzoHoneypotBundle.svg?branch=master)](https://travis-ci.org/nayzo/NzoHoneypotBundle)
[![Latest Stable Version](https://poser.pugx.org/nzo/honeypot-bundle/v/stable)](https://packagist.org/packages/nzo/honeypot-bundle)

The **NzoHoneypotBundle** is a Symfony bundle that provides a very simple way to handle Honeypot form types.

###### This Bundle is compatible with **Symfony >= 4.4**

Installation
------------

### Through Composer:

```
$ composer require nzo/honeypot-bundle
```
    
Usage
-----

#### Basic usage example in the Form:

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

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

See [LICENSE](https://github.com/nayzo/NzoHoneypotBundle/tree/master/LICENSE)
