<?php

/*
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\TestUtilitiesBundle\Singleton;

use Contao\Files;
use Contao\System;
use Symfony\Component\DependencyInjection\ContainerBuilder;

trait ResetFilesSingletonTrait
{
    /**
     * Reset the contao Files singleton.
     *
     * @throws \ReflectionException
     */
    protected function resetFileSingletonInstance(ContainerBuilder $container): void
    {
        $filesReflection = new \ReflectionClass(Files::class);
        $instanceProperty = $filesReflection->getProperty('objInstance');
        $instanceProperty->setValue(null, null);
        System::setContainer($container);
        Files::getInstance();
    }
}
