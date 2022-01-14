<?php

namespace ContainerHvbx0fM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf394 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc0a46 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07558 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getConnection', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getMetadataFactory', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getExpressionBuilder', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'beginTransaction', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getCache', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'transactional', array('func' => $func), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->transactional($func);
    }

    public function commit()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'commit', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->commit();
    }

    public function rollback()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'rollback', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getClassMetadata', array('className' => $className), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'createQuery', array('dql' => $dql), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'createNamedQuery', array('name' => $name), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'createQueryBuilder', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'flush', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'clear', array('entityName' => $entityName), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->clear($entityName);
    }

    public function close()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'close', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->close();
    }

    public function persist($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'persist', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'remove', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'refresh', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'detach', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'merge', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'contains', array('entity' => $entity), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getEventManager', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getConfiguration', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'isOpen', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getUnitOfWork', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getProxyFactory', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'initializeObject', array('obj' => $obj), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'getFilters', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'isFiltersStateClean', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'hasFilters', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return $this->valueHoldercf394->hasFilters();
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

        $instance->initializerc0a46 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf394) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf394 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf394->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__get', ['name' => $name], $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        if (isset(self::$publicProperties07558[$name])) {
            return $this->valueHoldercf394->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf394;

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

        $targetObject = $this->valueHoldercf394;
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
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf394;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf394;
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
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__isset', array('name' => $name), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf394;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf394;
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
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__unset', array('name' => $name), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf394;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf394;
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
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__clone', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        $this->valueHoldercf394 = clone $this->valueHoldercf394;
    }

    public function __sleep()
    {
        $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, '__sleep', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;

        return array('valueHoldercf394');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc0a46 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc0a46;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc0a46 && ($this->initializerc0a46->__invoke($valueHoldercf394, $this, 'initializeProxy', array(), $this->initializerc0a46) || 1) && $this->valueHoldercf394 = $valueHoldercf394;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf394;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf394;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
