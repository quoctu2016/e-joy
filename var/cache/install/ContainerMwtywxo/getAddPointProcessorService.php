<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PurchaseFlow\Processor\AddPointProcessor' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ValidatorTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemHolderPostValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor.php';

return $this->services['Eccube\Service\PurchaseFlow\Processor\AddPointProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\AddPointProcessor(${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->load('getBaseInfoRepositoryService.php')) && false ?: '_'});
