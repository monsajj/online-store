<?php
/**
 * Created by PhpStorm.
 * User: monsajj
 * Date: 03.10.18
 * Time: 15:45
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class Health extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        //parent::getFacadeAccessor(); // TODO: Change the autogenerated stub
        return 'health';
    }

}