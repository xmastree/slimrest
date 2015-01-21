<?php
namespace app\routes;

class SampleRoute {
    public static function handler() {
        return function($name) {
            print 'Hello, ' . $name;
        };
    }
}