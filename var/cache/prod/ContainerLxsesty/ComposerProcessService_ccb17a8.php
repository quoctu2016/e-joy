<?php

class ComposerProcessService_ccb17a8 extends \Eccube\Service\Composer\ComposerProcessService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderccb17a8 = null;
    private $initializerccb17a8 = null;
    private static $publicPropertiesccb17a8 = [
        
    ];
    public function execRequire($packageName, $output = null)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->execRemove($packageName, $output);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->runCommand($commands, $output, $init);
    }
    public function execConfig($key, $value = null)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->execConfig($key, $value);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->configureRepository($BaseInfo);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return $this->valueHolderccb17a8->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerProcessService $instance) {
            unset($instance->workingDir, $instance->composerApiService, $instance->baseInfoRepository);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerProcessService')->__invoke($instance);
        $instance->initializerccb17a8 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Service\Composer\ComposerApiService $composerApiService, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHolderccb17a8) {
            $reflection = $reflection ?: new \ReflectionClass('Eccube\\Service\\Composer\\ComposerProcessService');
            $this->valueHolderccb17a8 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerProcessService $instance) {
            unset($instance->workingDir, $instance->composerApiService, $instance->baseInfoRepository);
        }, $this, 'Eccube\\Service\\Composer\\ComposerProcessService')->__invoke($this);
        }
        $this->valueHolderccb17a8->__construct($eccubeConfig, $entityManager, $composerApiService, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__get', ['name' => $name], $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        if (isset(self::$publicPropertiesccb17a8[$name])) {
            return $this->valueHolderccb17a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb17a8;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolderccb17a8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb17a8;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderccb17a8;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__isset', array('name' => $name), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb17a8;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderccb17a8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__unset', array('name' => $name), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb17a8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderccb17a8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__clone', array(), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        $this->valueHolderccb17a8 = clone $this->valueHolderccb17a8;
    }
    public function __sleep()
    {
        $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, '__sleep', array(), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
        return array('valueHolderccb17a8');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->entityManager);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerProcessService $instance) {
            unset($instance->workingDir, $instance->composerApiService, $instance->baseInfoRepository);
        }, $this, 'Eccube\\Service\\Composer\\ComposerProcessService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerccb17a8 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerccb17a8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerccb17a8 && ($this->initializerccb17a8->__invoke($valueHolderccb17a8, $this, 'initializeProxy', array(), $this->initializerccb17a8) || 1) && $this->valueHolderccb17a8 = $valueHolderccb17a8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderccb17a8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderccb17a8;
    }
}
