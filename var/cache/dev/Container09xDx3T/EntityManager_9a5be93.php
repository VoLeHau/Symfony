<?php

namespace Container09xDx3T;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7fbfe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89806 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties95395 = [
        
    ];

    public function getConnection()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getConnection', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getMetadataFactory', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getExpressionBuilder', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'beginTransaction', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getCache', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'transactional', array('func' => $func), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'commit', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->commit();
    }

    public function rollback()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'rollback', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getClassMetadata', array('className' => $className), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'createQuery', array('dql' => $dql), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'createNamedQuery', array('name' => $name), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'createQueryBuilder', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'flush', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'clear', array('entityName' => $entityName), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->clear($entityName);
    }

    public function close()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'close', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->close();
    }

    public function persist($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'persist', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'remove', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'refresh', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'detach', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'merge', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'contains', array('entity' => $entity), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getEventManager', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getConfiguration', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'isOpen', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getUnitOfWork', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getProxyFactory', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'initializeObject', array('obj' => $obj), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'getFilters', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'isFiltersStateClean', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'hasFilters', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return $this->valueHolder7fbfe->hasFilters();
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

        $instance->initializer89806 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7fbfe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7fbfe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7fbfe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__get', ['name' => $name], $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        if (isset(self::$publicProperties95395[$name])) {
            return $this->valueHolder7fbfe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbfe;

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

        $targetObject = $this->valueHolder7fbfe;
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
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbfe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7fbfe;
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
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__isset', array('name' => $name), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbfe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7fbfe;
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
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__unset', array('name' => $name), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbfe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7fbfe;
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
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__clone', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        $this->valueHolder7fbfe = clone $this->valueHolder7fbfe;
    }

    public function __sleep()
    {
        $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, '__sleep', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;

        return array('valueHolder7fbfe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89806 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89806;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89806 && ($this->initializer89806->__invoke($valueHolder7fbfe, $this, 'initializeProxy', array(), $this->initializer89806) || 1) && $this->valueHolder7fbfe = $valueHolder7fbfe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fbfe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fbfe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
