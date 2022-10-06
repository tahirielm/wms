<?php

namespace ContainerXtV3UjC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder879fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera5cd7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5776e = [
        
    ];

    public function getConnection()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getConnection', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getMetadataFactory', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getExpressionBuilder', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'beginTransaction', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getCache', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'transactional', array('func' => $func), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'commit', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->commit();
    }

    public function rollback()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'rollback', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getClassMetadata', array('className' => $className), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'createQuery', array('dql' => $dql), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'createNamedQuery', array('name' => $name), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'createQueryBuilder', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'flush', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'clear', array('entityName' => $entityName), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->clear($entityName);
    }

    public function close()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'close', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->close();
    }

    public function persist($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'persist', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'remove', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'refresh', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'detach', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'merge', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'contains', array('entity' => $entity), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getEventManager', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getConfiguration', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'isOpen', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getUnitOfWork', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getProxyFactory', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'initializeObject', array('obj' => $obj), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'getFilters', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'isFiltersStateClean', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'hasFilters', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return $this->valueHolder879fd->hasFilters();
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

        $instance->initializera5cd7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder879fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder879fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder879fd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__get', ['name' => $name], $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        if (isset(self::$publicProperties5776e[$name])) {
            return $this->valueHolder879fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder879fd;

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

        $targetObject = $this->valueHolder879fd;
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
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder879fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder879fd;
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
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__isset', array('name' => $name), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder879fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder879fd;
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
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__unset', array('name' => $name), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder879fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder879fd;
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
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__clone', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        $this->valueHolder879fd = clone $this->valueHolder879fd;
    }

    public function __sleep()
    {
        $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, '__sleep', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;

        return array('valueHolder879fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera5cd7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera5cd7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera5cd7 && ($this->initializera5cd7->__invoke($valueHolder879fd, $this, 'initializeProxy', array(), $this->initializera5cd7) || 1) && $this->valueHolder879fd = $valueHolder879fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder879fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder879fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
