<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PurchaseFlow\Processor\EmptyItemsValidator' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ValidatorTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemHolderValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\EmptyItemsValidator.php';

return $this->services['Eccube\Service\PurchaseFlow\Processor\EmptyItemsValidator'] = new \Eccube\Service\PurchaseFlow\Processor\EmptyItemsValidator(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
