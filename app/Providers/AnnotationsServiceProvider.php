<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12.08.18
 * Time: 17:09
 */

namespace App\Providers;


use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class AnnotationsServiceProvider extends ServiceProvider
{
    /**
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(Application $app)
    {
        $this->scanRoutes = [

        ];
        $this->scanModels = [

        ];
        $this->scanEvents = [

        ];
        parent::__construct($app);
    }
}