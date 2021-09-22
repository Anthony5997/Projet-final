<?php

namespace ContainerUUeVBIC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd8b7b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe6d4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2d6c0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getConnection', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getMetadataFactory', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getExpressionBuilder', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'beginTransaction', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getCache', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'transactional', array('func' => $func), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->transactional($func);
    }

    public function commit()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'commit', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->commit();
    }

    public function rollback()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'rollback', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'createQuery', array('dql' => $dql), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'createQueryBuilder', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'flush', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'clear', array('entityName' => $entityName), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'close', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->close();
    }

    public function persist($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'persist', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'remove', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'refresh', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'detach', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'merge', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'contains', array('entity' => $entity), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getEventManager', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getConfiguration', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'isOpen', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getUnitOfWork', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getProxyFactory', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'getFilters', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'isFiltersStateClean', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'hasFilters', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return $this->valueHolderd8b7b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbe6d4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd8b7b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd8b7b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd8b7b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__get', ['name' => $name], $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        if (isset(self::$publicProperties2d6c0[$name])) {
            return $this->valueHolderd8b7b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b7b;

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

        $targetObject = $this->valueHolderd8b7b;
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
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b7b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd8b7b;
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
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__isset', array('name' => $name), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b7b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd8b7b;
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
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__unset', array('name' => $name), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b7b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd8b7b;
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
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__clone', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        $this->valueHolderd8b7b = clone $this->valueHolderd8b7b;
    }

    public function __sleep()
    {
        $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, '__sleep', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;

        return array('valueHolderd8b7b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe6d4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe6d4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe6d4 && ($this->initializerbe6d4->__invoke($valueHolderd8b7b, $this, 'initializeProxy', array(), $this->initializerbe6d4) || 1) && $this->valueHolderd8b7b = $valueHolderd8b7b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd8b7b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd8b7b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
