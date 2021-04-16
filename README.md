# Contao Test Utilities Bundle

This bundle helps with recurring tasks when testing bundles for contao cms.

## Install

```
composer require --dev heimrichhannot/contao-test-utilities-bundle
```

## Content

### Mocking objects

This bundle provide some traits to mock following contao types:
- models
- templates

```php
class Test {
    use \HeimrichHannot\TestUtilitiesBundle\Mock\ModelMockTrait;
    use \HeimrichHannot\TestUtilitiesBundle\Mock\TemplateMockTrait;
    
    public function testMockTemplate() {
        $templateMock = $this->mockTemplateObject(\Contao\FrontendTemplate::class, 'ce_test');
        $templateMock->setName('ce_skip');
        $templateMock->getName();
        $templateMock->setData(['foo' => 'bar']);
        $templateMock->getData();
        // and __get, __set, __isset
    }
    
    public function testModelMock() {
        $model = $this->mockModelObject(\Contao\PageModel::class, []);
        $model->row();
        // and __get, __set, __isset
    }
}
```

### Singletons

#### Reset Files singleton

It is recommend to always reset the Files (singleton) class when testing code interacting with it, as it can store data from past tests (for example the container). So you don't need to run a test method in another process.

```php
\HeimrichHannot\TestUtilitiesBundle\Singleton\ResetFilesSingletonTrait::resetFileSingletonInstance()
```
`\Contao\Files:.getInstance()` will return a fresh instance.