<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\Composer\ComposerApiService' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\Composer\\ComposerServiceInterface.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\Composer\\ComposerApiService.php';

return $this->services['Eccube\Service\Composer\ComposerApiService'] = new \Eccube\Service\Composer\ComposerApiService(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : ($this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'});
