<?php

/*
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\TestUtilitiesBundle\TraitDummy;

use HeimrichHannot\TestUtilitiesBundle\Singleton\ResetFilesSingletonTrait;

/**
 * @internal This class is used to allow PHPStan to analyze the ResetFilesSingletonTrait
 */
class ResetFilesSingletonTraitDummy
{
    use ResetFilesSingletonTrait;
}
