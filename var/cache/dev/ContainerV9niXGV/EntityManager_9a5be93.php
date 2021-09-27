<?php

namespace ContainerV9niXGV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85856 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer60e0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6f36 = [
        
    ];

    public function getConnection()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getConnection', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getMetadataFactory', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getExpressionBuilder', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'beginTransaction', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getCache', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getCache();
    }

    public function transactional($func)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'transactional', array('func' => $func), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->transactional($func);
    }

    public function commit()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'commit', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->commit();
    }

    public function rollback()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'rollback', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getClassMetadata', array('className' => $className), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'createQuery', array('dql' => $dql), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'createNamedQuery', array('name' => $name), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'createQueryBuilder', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'flush', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'clear', array('entityName' => $entityName), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->clear($entityName);
    }

    public function close()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'close', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->close();
    }

    public function persist($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'persist', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'remove', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'refresh', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'detach', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'merge', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getRepository', array('entityName' => $entityName), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'contains', array('entity' => $entity), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getEventManager', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getConfiguration', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'isOpen', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getUnitOfWork', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getProxyFactory', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'initializeObject', array('obj' => $obj), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'getFilters', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'isFiltersStateClean', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'hasFilters', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return $this->valueHolder85856->hasFilters();
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

        $instance->initializer60e0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder85856) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85856 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85856->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__get', ['name' => $name], $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        if (isset(self::$publicPropertiesb6f36[$name])) {
            return $this->valueHolder85856->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85856;

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

        $targetObject = $this->valueHolder85856;
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
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85856;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85856;
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
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__isset', array('name' => $name), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85856;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85856;
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
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__unset', array('name' => $name), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85856;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85856;
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
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__clone', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        $this->valueHolder85856 = clone $this->valueHolder85856;
    }

    public function __sleep()
    {
        $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, '__sleep', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;

        return array('valueHolder85856');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer60e0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer60e0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer60e0a && ($this->initializer60e0a->__invoke($valueHolder85856, $this, 'initializeProxy', array(), $this->initializer60e0a) || 1) && $this->valueHolder85856 = $valueHolder85856;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85856;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85856;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
