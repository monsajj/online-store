<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 29.09.2018
 * Time: 10:25
 */

namespace App\Services\FileStorage;


use App\Contracts\FileStorageInterface;

class RackspaceFileStorage implements FileStorageInterface
{

    /**
     * @return mixed
     */
    public function upload()
    {
        return "Upload file RackspaceFileStorage";
    }

    /**
     * @param int $fileID
     * @return mixed
     */
    public function delete(int $fileID)
    {
        // TODO: Implement delete() method.
    }
}