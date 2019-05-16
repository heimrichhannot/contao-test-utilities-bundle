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
     * @param ContainerBuilder $container
     *
     * @throws \ReflectionException
     */
    protected function resetFileSingletonInstance(ContainerBuilder $container)
    {
        $filesReflection = new \ReflectionClass(Files::class);
        $instanceProperty = $filesReflection->getProperty('objInstance');
        $instanceProperty->setAccessible(true);
        $instanceProperty->setValue(null, null);
        System::setContainer($container);
        Files::getInstance();
    }
}
