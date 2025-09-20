<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder801c8 = null;
    private $initializerbf900 = null;
    private static $publicPropertiesc99e8 = [
        
    ];
    public function getConnection()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getConnection', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getMetadataFactory', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getExpressionBuilder', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'beginTransaction', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getCache', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getCache();
    }
    public function transactional($func)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'transactional', array('func' => $func), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'commit', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->commit();
    }
    public function rollback()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'rollback', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'createQuery', array('dql' => $dql), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'createQueryBuilder', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'flush', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'clear', array('entityName' => $entityName), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->clear($entityName);
    }
    public function close()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'close', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->close();
    }
    public function persist($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'persist', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'remove', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'refresh', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'detach', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'merge', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'contains', array('entity' => $entity), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getEventManager', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getConfiguration', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'isOpen', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getUnitOfWork', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getProxyFactory', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'getFilters', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'isFiltersStateClean', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, 'hasFilters', array(), $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        return $this->valueHolder801c8->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerbf900 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder801c8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder801c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder801c8->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerbf900 && ($this->initializerbf900->__invoke($valueHolder801c8, $this, '__get', ['name' => $name], $this->initializerbf900) || 1) && $this->valueHolder801c8 = $valueHolder801c8;
        if (isset(self::$publicPropertiesc99e8[$name])) {
            return $this->valueHolder801c8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
