<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.AnVRYeU' shared service.

return $this->privates['.service_locator.AnVRYeU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'activity' => ['privates', '.errored..service_locator.AnVRYeU.App\\Entity\\Activity', NULL, 'Cannot autowire service ".service_locator.AnVRYeU": it references class "App\\Entity\\Activity" but no such service exists.'],
]);
