<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\GenerateProxyCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\GenerateProxyCommand.php';

$this->services['Eccube\Command\GenerateProxyCommand'] = $instance = new \Eccube\Command\GenerateProxyCommand(${($_ = isset($this->services['Eccube\Service\EntityProxyService']) ? $this->services['Eccube\Service\EntityProxyService'] : $this->load('getEntityProxyServiceService.php')) && false ?: '_'});

$instance->setName('eccube:generate:proxies');

return $instance;
