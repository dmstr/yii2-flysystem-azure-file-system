<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2022 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dmstr\flysystem\azureFileSystem;


use Consilience\Flysystem\Azure\AzureFileAdapter;
use creocoder\flysystem\AzureFilesystem;
use MicrosoftAzure\Storage\File\FileRestProxy;

class AzureFileFilesystem extends AzureFilesystem
{
    /**
     * @return AzureFileAdapter
     */
    protected function prepareAdapter()
    {

        $connectionString = sprintf(
            'DefaultEndpointsProtocol=https;AccountName=%s;AccountKey=%s',
            $this->accountName,
            $this->accountKey
        );

        return new AzureFileAdapter(
            FileRestProxy::createFileService($connectionString),
            [
                'endpoint' => $connectionString,
                'container' => $this->container,
            ]
        );
    }

}