<?php

namespace ContainerO2CcDoH;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbd16b = null;
    private $initializer4f477 = null;
    private static $publicPropertiesa2d30 = [
        
    ];
    public function getConnection()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getConnection', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getMetadataFactory', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getExpressionBuilder', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'beginTransaction', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getCache', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'transactional', array('func' => $func), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->transactional($func);
    }
    public function commit()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'commit', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->commit();
    }
    public function rollback()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'rollback', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'createQuery', array('dql' => $dql), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'createQueryBuilder', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'flush', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'clear', array('entityName' => $entityName), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->clear($entityName);
    }
    public function close()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'close', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->close();
    }
    public function persist($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'persist', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'remove', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'refresh', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'detach', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'merge', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'contains', array('entity' => $entity), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getEventManager', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getConfiguration', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'isOpen', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getUnitOfWork', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getProxyFactory', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'getFilters', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'isFiltersStateClean', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'hasFilters', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return $this->valueHolderbd16b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4f477 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderbd16b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbd16b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderbd16b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__get', ['name' => $name], $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        if (isset(self::$publicPropertiesa2d30[$name])) {
            return $this->valueHolderbd16b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd16b;
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
        $targetObject = $this->valueHolderbd16b;
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
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd16b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbd16b;
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
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__isset', array('name' => $name), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd16b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbd16b;
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
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__unset', array('name' => $name), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd16b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbd16b;
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
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__clone', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        $this->valueHolderbd16b = clone $this->valueHolderbd16b;
    }
    public function __sleep()
    {
        $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, '__sleep', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
        return array('valueHolderbd16b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f477 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f477;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4f477 && ($this->initializer4f477->__invoke($valueHolderbd16b, $this, 'initializeProxy', array(), $this->initializer4f477) || 1) && $this->valueHolderbd16b = $valueHolderbd16b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbd16b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbd16b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
