# Yii2 Azure Filesystem Adapter

An Yii2 Azure Filesystem Adapter for [creocoder\flysystem](https://github.com/creocoder/yii2-flysystem)

## Installation

```bash
composer require dmstr/yii2-flysystem-azure-file-system
```

## Configuration

Add this to your existing Yii2 config
```php

use dmstr\flysystem\azureFileSystem\AzureFileFilesystem;

return [
    'components' => [
        'fsAzureStorage' => [
            'class' => AzureFileFilesystem::class,
            'accountName' => getenv('AZURE_STORAGE_ACCOUNT_NAME'),
            'accountKey' => getenv('AZURE_STORAGE_ACCOUNT_KEY'),
            'container' => getenv('AZURE_STORAGE_CONTAINER')
        ]
    ]
];
```