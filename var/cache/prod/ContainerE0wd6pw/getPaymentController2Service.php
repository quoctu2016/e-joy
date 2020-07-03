<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\SamplePayment\Controller\PaymentController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\app\\Plugin\\SamplePayment\\Controller\\PaymentController.php';

$this->services['Plugin\SamplePayment\Controller\PaymentController'] = $instance = new \Plugin\SamplePayment\Controller\PaymentController(${($_ = isset($this->services['Eccube\Repository\OrderRepository']) ? $this->services['Eccube\Repository\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\OrderStatusRepository']) ? $this->services['Eccube\Repository\Master\OrderStatusRepository'] : $this->load('getOrderStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\SamplePayment\Repository\PaymentStatusRepository']) ? $this->services['Plugin\SamplePayment\Repository\PaymentStatusRepository'] : $this->load('getPaymentStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\SamplePayment\Repository\CvsPaymentStatusRepository']) ? $this->services['Plugin\SamplePayment\Repository\CvsPaymentStatusRepository'] : $this->load('getCvsPaymentStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['eccube.purchase.flow.shopping']) ? $this->services['eccube.purchase.flow.shopping'] : $this->load('getEccube_Purchase_Flow_ShoppingService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\CartService']) ? $this->services['Eccube\Service\CartService'] : $this->getCartServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\OrderStateMachine']) ? $this->services['Eccube\Service\OrderStateMachine'] : $this->load('getOrderStateMachineService.php')) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : ($this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

return $instance;