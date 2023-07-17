<?php

defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use Aws\S3\S3Client;

class S3Upload
{


    public function UploadImage($Image)
    {
        if (isset($Image)) {
            $file_name = $Image['name'];
            $temp_file_location = $Image['tmp_name'];

            $new_name = time() . md5($file_name);
            $config['file_name'] = $new_name;

            $client = S3Client::factory([
                'version' => 'latest',
                'region'  => 'id-jkt-1-default',
                'endpoint' => 'https://is3.cloudhost.id/images',
                'credentials' => [
                    'key'    => "8QWJP2P85ZX21Z7S3DTG",
                    'secret' => "jfISoA6pQJjoCQYUPtrKeoniDLUQDNzxEwNPPxff"
                ]
            ]);

            $client->putObject([
                'Bucket'     => 'xibo',
                'Key'        => $file_name,
                'SourceFile' => $temp_file_location,    // like /var/www/vhosts/mysite/file.csv
                'ContentType' => 'application/png',
                'ACL'        => 'public-read',
            ]);
            return "https://is3.cloudhost.id/xibo/images/" . $file_name;
        } else {
            return "No Image";
        }
    }

    public function UploadFile($files_name, $file_tmp, $folder)
    {
        if (isset($files_name) && isset($file_tmp)) {
            $file_name = $files_name;
            $temp_file_location = $file_tmp;

            $new_name = time() . md5($file_name);
            $config['file_name'] = $new_name;

            $client = S3Client::factory([
                'version' => 'latest',
                'region'  => 'id-jkt-1-default',
                'endpoint' => 'https://is3.cloudhost.id/' . $folder,
                'credentials' => [
                    'key'    => "8QWJP2P85ZX21Z7S3DTG",
                    'secret' => "jfISoA6pQJjoCQYUPtrKeoniDLUQDNzxEwNPPxff"
                ]
            ]);

            $client->putObject([
                'Bucket'        => 'tbh-v2',
                'Key'           => $file_name,
                'Body'          => $temp_file_location,
                'ContentType'   => 'application/pdf',
                'ACL'           => 'public-read',
            ]);

            return "https://is3.cloudhost.id/tbh-v2/" . $folder . "/" . $file_name;
        }
    }
}
