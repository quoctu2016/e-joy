<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.order.holder_post_validators' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ValidatorTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemHolderPostValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator.php';

return $this->services['eccube.purchase.flow.order.holder_post_validators'] = new \Doctrine\Common\Collections\ArrayCollection([0 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\AddPointProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\AddPointProcessor'] : $this->load('getAddPointProcessorService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\PaymentTotalLimitValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\PaymentTotalLimitValidator'] : $this->load('getPaymentTotalLimitValidatorService.php')) && false ?: '_'}, 2 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator'] : ($this->services['Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator())) && false ?: '_'}]);
