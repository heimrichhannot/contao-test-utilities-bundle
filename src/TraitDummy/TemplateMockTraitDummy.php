<?php

/*
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\TestUtilitiesBundle\TraitDummy;

use HeimrichHannot\TestUtilitiesBundle\Mock\TemplateMockTrait;
use PHPUnit\Framework\TestCase;

/**
 * @internal This class is used to allow PHPStan to analyze the TemplateMockTrait
 */
class TemplateMockTraitDummy extends TestCase
{
    use TemplateMockTrait;
}
