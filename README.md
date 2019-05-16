# Contao Test Utilities Bundle

This bundle helps with recurring tasks when testing bundles for contao cms.

## Content

### Mocking objects

#### Mock Model instance

```php
\HeimrichHannot\TestUtilitiesBundle\Mock\ModelMockTrait::mockModelObject()
```

Returns a model mock with magic getter, setter, isset and row.

### Singletons

#### Reset Files singleton

It is recommend to always reset the Files (singleton) class when testing code interacting with it, as it can store data from past tests (for example the container). So you don't need to run a test method in another process.

```php
\HeimrichHannot\TestUtilitiesBundle\Singleton\ResetFilesSingletonTrait::resetFileSingletonInstance()
```
`\Contao\Files:.getInstance()` will return a fresh instance.