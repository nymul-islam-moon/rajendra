<?php

namespace App\Service;

use DB;
use Intervention\Image\Facades\Image;
use App\Interface\FileUploaderServiceInterface;
use Exception;

class FileUploaderService implements FileUploaderServiceInterface
{


    public function uploadMultiple(?array $files, string $filesPath = 'uploads/'): ?string
    {
        $name = 'Moon';
        return $name;
    }


}
