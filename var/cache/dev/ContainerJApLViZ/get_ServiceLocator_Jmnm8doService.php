<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.jmnm8do' shared service.

return $this->privates['.service_locator.jmnm8do'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService.php', true],
]);