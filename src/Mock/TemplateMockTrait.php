<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2021 Heimrich & Hannot GmbH
 *
 * @author  Thomas Körner <t.koerner@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


namespace HeimrichHannot\TestUtilitiesBundle\Mock;


use Contao\Template;
use PHPUnit\Framework\MockObject\MockObject;

trait TemplateMockTrait
{
    /**
     * @param string $class
     * @param string $strTemplate
     * @return MockObject|Template
     */
    protected function mockTemplateObject(string $class, string $strTemplate = ''): MockObject
    {
        $properties = [];
        $mock = $this->createMock($class);

        $mock->method('getData')->willReturnCallback(static function () use (&$properties) {
            return $properties;
        });

        $mock->method('setData')->willReturnCallback(static function (array $data) use (&$properties) {
            $properties = $data;
        });

        $mock->method('getName')->willReturnCallback(static function () use (&$strTemplate) {
            return $strTemplate;
        });

        $mock->method('setName')->willReturnCallback(static function (string $value) use (&$strTemplate) {
            $strTemplate = $value;
        });

        $mock->method('__get')->willReturnCallback(static function (string $key) use (&$properties) {
            return $properties[$key] ?? null;
        });

        $mock->method('__set')->willReturnCallback(static function (string $key, $value) use (&$properties) {
            $properties[$key] = $value;
        });

        $mock->method('__isset')->willReturnCallback(static function (string $key) use (&$properties) {
            return isset($properties[$key]);
        });

        return $mock;
    }
}