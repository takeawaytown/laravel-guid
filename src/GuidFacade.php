<?php

namespace TakeawayTown\LaravelGuid;

use Illuminate\Support\Facades\Facade;

/**
 * Class GuidFacade
 * @package takeawaytown\laravel-guid
 * @author Alex Scott <alex.scott@takeawaytown.co.uk>
 */
class GuidFacade extends Facade
{
    /**
     * Name of the IoC container binding
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Guid';
    }
}
