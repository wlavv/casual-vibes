<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder801c8 = null;
    private $initializerbf900 = null;
    private static $publicPropertiesc99e8 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getList', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getInstalledModules', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getMustBeConfiguredModules', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getUpgradableModules', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'setActionUrls', array('collection' => $collection), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerbf900 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder801c8) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder801c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder801c8->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__get', ['name' => $name], $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        if (isset(self::$publicPropertiesc99e8[$name])) {
            return $this->valueHolder801c8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder801c8;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder801c8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder801c8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder801c8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__isset', array('name' => $name), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder801c8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder801c8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__unset', array('name' => $name), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder801c8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder801c8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__clone', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        $this->valueHolder801c8 = clone $this->valueHolder801c8;
    }
    public function __sleep()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__sleep', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return array('valueHolder801c8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf900 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf900;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'initializeProxy', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder801c8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder801c8;
    }
}
