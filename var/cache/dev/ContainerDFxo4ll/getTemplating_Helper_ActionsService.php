<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.actions' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\Helper\\ActionsHelper.php';

return $this->privates['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(($this->privates['fragment.handler'] ?? $this->load('getFragment_HandlerService.php')));