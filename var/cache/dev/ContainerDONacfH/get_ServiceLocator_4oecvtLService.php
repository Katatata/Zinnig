<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4oecvtL' shared service.

return $this->privates['.service_locator.4oecvtL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'eventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService.php', true],
]);