<?php

namespace GetCode\TestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetCode\TestPackage\Skeleton\SkeletonClass
 */
class TestPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'test-package';
    }
}
