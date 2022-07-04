<?php

namespace Container6rv1v1A;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4fbfc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93c26 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2ee16 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getConnection', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getMetadataFactory', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getExpressionBuilder', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'beginTransaction', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getCache', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'transactional', array('func' => $func), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'commit', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->commit();
    }

    public function rollback()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'rollback', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getClassMetadata', array('className' => $className), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'createQuery', array('dql' => $dql), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'createNamedQuery', array('name' => $name), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'createQueryBuilder', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'flush', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'clear', array('entityName' => $entityName), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->clear($entityName);
    }

    public function close()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'close', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->close();
    }

    public function persist($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'persist', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'remove', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'refresh', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'detach', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'merge', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'contains', array('entity' => $entity), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getEventManager', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getConfiguration', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'isOpen', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getUnitOfWork', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getProxyFactory', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'initializeObject', array('obj' => $obj), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'getFilters', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'isFiltersStateClean', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'hasFilters', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return $this->valueHolder4fbfc->hasFilters();
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

        $instance->initializer93c26 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4fbfc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4fbfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4fbfc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__get', ['name' => $name], $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        if (isset(self::$publicProperties2ee16[$name])) {
            return $this->valueHolder4fbfc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbfc;

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

        $targetObject = $this->valueHolder4fbfc;
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
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbfc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4fbfc;
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
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__isset', array('name' => $name), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbfc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4fbfc;
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
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__unset', array('name' => $name), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fbfc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4fbfc;
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
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__clone', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        $this->valueHolder4fbfc = clone $this->valueHolder4fbfc;
    }

    public function __sleep()
    {
        $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, '__sleep', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;

        return array('valueHolder4fbfc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93c26 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93c26;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93c26 && ($this->initializer93c26->__invoke($valueHolder4fbfc, $this, 'initializeProxy', array(), $this->initializer93c26) || 1) && $this->valueHolder4fbfc = $valueHolder4fbfc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4fbfc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4fbfc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
