<?php

/*
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\TestUtilitiesBundle\TraitDummy;

use HeimrichHannot\TestUtilitiesBundle\Mock\ModelMockTrait;
use PHPUnit\Framework\TestCase;

/**
 * @internal This class is used to allow PHPStan to analyze the ModelMockTrait
 */
class ModelMockTraitDummy extends TestCase
{
    use ModelMockTrait;
}
