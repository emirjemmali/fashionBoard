<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\FashionbundleRepository' shared autowired service.

return $this->privates['App\\Repository\\FashionbundleRepository'] = new \App\Repository\FashionbundleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
