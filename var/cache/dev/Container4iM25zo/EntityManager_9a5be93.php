<?php

namespace Container4iM25zo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2654b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer52bf5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d6d9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getConnection', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getMetadataFactory', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getExpressionBuilder', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'beginTransaction', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getCache', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'transactional', array('func' => $func), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'commit', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->commit();
    }

    public function rollback()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'rollback', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getClassMetadata', array('className' => $className), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'createQuery', array('dql' => $dql), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'createNamedQuery', array('name' => $name), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'createQueryBuilder', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'flush', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'clear', array('entityName' => $entityName), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->clear($entityName);
    }

    public function close()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'close', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->close();
    }

    public function persist($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'persist', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'remove', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'refresh', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'detach', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'merge', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'contains', array('entity' => $entity), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getEventManager', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getConfiguration', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'isOpen', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getUnitOfWork', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getProxyFactory', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'initializeObject', array('obj' => $obj), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'getFilters', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'isFiltersStateClean', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'hasFilters', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return $this->valueHolder2654b->hasFilters();
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

        $instance->initializer52bf5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2654b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2654b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2654b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__get', ['name' => $name], $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        if (isset(self::$publicProperties1d6d9[$name])) {
            return $this->valueHolder2654b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2654b;

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

        $targetObject = $this->valueHolder2654b;
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
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2654b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2654b;
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
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__isset', array('name' => $name), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2654b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2654b;
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
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__unset', array('name' => $name), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2654b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2654b;
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
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__clone', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        $this->valueHolder2654b = clone $this->valueHolder2654b;
    }

    public function __sleep()
    {
        $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, '__sleep', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;

        return array('valueHolder2654b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52bf5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52bf5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer52bf5 && ($this->initializer52bf5->__invoke($valueHolder2654b, $this, 'initializeProxy', array(), $this->initializer52bf5) || 1) && $this->valueHolder2654b = $valueHolder2654b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2654b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2654b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
