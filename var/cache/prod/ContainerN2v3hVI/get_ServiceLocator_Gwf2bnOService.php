<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gwf2bnO' shared service.

return $this->privates['.service_locator.gwf2bnO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'ppc' => ['privates', 'JMS\\Payment\\CoreBundle\\PluginController\\EntityPluginController', 'getEntityPluginControllerService.php', true],
], [
    'ppc' => '?',
]);