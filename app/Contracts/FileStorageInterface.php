<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 29.09.2018
 * Time: 10:23
 */

namespace App\Contracts;


interface FileStorageInterface
{
    /**
     * @return mixed
     */
    public function upload();

    /**
     * @param int $fileID
     * @return mixed
     */
    public function delete(int $fileID);
}