<?php

namespace Astrogoat\Cleanhub;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Cleanhub\Cleanhub
 */
class CleanhubFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cleanhub';
    }
}
