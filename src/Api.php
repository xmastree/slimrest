<?php
namespace app;

use app\routes\SampleRoute;
use Slim\Slim;

class Api {
    public function registerRoutes(Slim $slim) {
        $slim->get('/hello/:name', SampleRoute::handler());
    }
} 