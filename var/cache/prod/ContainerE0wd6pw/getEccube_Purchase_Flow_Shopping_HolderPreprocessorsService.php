<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.shopping.holder_preprocessors' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\DeliveryFeePreprocessor.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\DeliveryFeeFreeByShippingPreprocessor.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\PaymentChargePreprocessor.php';

$a = ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\TaxProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\TaxProcessor'] : $this->load('getTaxProcessorService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'};

return $this->services['eccube.purchase.flow.shopping.holder_preprocessors'] = new \Doctrine\Common\Collections\ArrayCollection([0 => $a, 1 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor'] : $this->load('getOrderNoProcessorService.php')) && false ?: '_'}, 2 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeePreprocessor($b, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\TaxRuleRepository']) ? $this->services['Eccube\Repository\TaxRuleRepository'] : $this->load('getTaxRuleRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\DeliveryFeeRepository']) ? $this->services['Eccube\Repository\DeliveryFeeRepository'] : $this->load('getDeliveryFeeRepositoryService.php')) && false ?: '_'}), 3 => new \Eccube\Service\PurchaseFlow\Processor\DeliveryFeeFreeByShippingPreprocessor($b), 4 => new \Eccube\Service\PurchaseFlow\Processor\PaymentChargePreprocessor(${($_ = isset($this->services['Eccube\Repository\Master\OrderItemTypeRepository']) ? $this->services['Eccube\Repository\Master\OrderItemTypeRepository'] : $this->load('getOrderItemTypeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\TaxDisplayTypeRepository']) ? $this->services['Eccube\Repository\Master\TaxDisplayTypeRepository'] : $this->load('getTaxDisplayTypeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\TaxTypeRepository']) ? $this->services['Eccube\Repository\Master\TaxTypeRepository'] : $this->load('getTaxTypeRepositoryService.php')) && false ?: '_'}), 5 => $a]);
