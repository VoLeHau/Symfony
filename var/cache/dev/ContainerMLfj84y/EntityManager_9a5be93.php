<?php

namespace ContainerMLfj84y;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd4062 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33280 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3598f = [
        
    ];

    public function getConnection()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getConnection', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getMetadataFactory', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getExpressionBuilder', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'beginTransaction', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getCache', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'transactional', array('func' => $func), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'wrapInTransaction', array('func' => $func), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'commit', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->commit();
    }

    public function rollback()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'rollback', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getClassMetadata', array('className' => $className), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'createQuery', array('dql' => $dql), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'createNamedQuery', array('name' => $name), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'createQueryBuilder', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'flush', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'clear', array('entityName' => $entityName), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->clear($entityName);
    }

    public function close()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'close', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->close();
    }

    public function persist($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'persist', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'remove', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'refresh', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'detach', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'merge', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'contains', array('entity' => $entity), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getEventManager', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getConfiguration', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'isOpen', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getUnitOfWork', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getProxyFactory', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'initializeObject', array('obj' => $obj), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'getFilters', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'isFiltersStateClean', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'hasFilters', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return $this->valueHolderd4062->hasFilters();
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

        $instance->initializer33280 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd4062) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd4062 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd4062->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__get', ['name' => $name], $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        if (isset(self::$publicProperties3598f[$name])) {
            return $this->valueHolderd4062->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4062;

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

        $targetObject = $this->valueHolderd4062;
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
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4062;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4062;
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
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__isset', array('name' => $name), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4062;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd4062;
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
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__unset', array('name' => $name), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4062;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd4062;
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
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__clone', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        $this->valueHolderd4062 = clone $this->valueHolderd4062;
    }

    public function __sleep()
    {
        $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, '__sleep', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;

        return array('valueHolderd4062');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33280 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33280;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33280 && ($this->initializer33280->__invoke($valueHolderd4062, $this, 'initializeProxy', array(), $this->initializer33280) || 1) && $this->valueHolderd4062 = $valueHolderd4062;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4062;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4062;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}