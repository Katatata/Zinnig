<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._yUaljH' shared service.

return $this->privates['.service_locator._yUaljH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService.php', true],
]);
