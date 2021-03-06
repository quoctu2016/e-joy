<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerInstallCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\ComposerInstallCommand.php';

$this->services['Eccube\Command\ComposerInstallCommand'] = $instance = new \Eccube\Command\ComposerInstallCommand(${($_ = isset($this->services['Eccube\Service\Composer\ComposerApiService']) ? $this->services['Eccube\Service\Composer\ComposerApiService'] : $this->load('getComposerApiServiceService.php')) && false ?: '_'});

$instance->setName('eccube:composer:install');

return $instance;
