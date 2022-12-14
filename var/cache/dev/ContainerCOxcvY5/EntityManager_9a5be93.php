<?php

namespace ContainerCOxcvY5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1dc37 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer004ee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6ddb9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getConnection', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getMetadataFactory', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getExpressionBuilder', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'beginTransaction', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getCache', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getCache();
    }

    public function transactional($func)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'transactional', array('func' => $func), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'wrapInTransaction', array('func' => $func), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'commit', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->commit();
    }

    public function rollback()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'rollback', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getClassMetadata', array('className' => $className), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'createQuery', array('dql' => $dql), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'createNamedQuery', array('name' => $name), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'createQueryBuilder', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'flush', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'clear', array('entityName' => $entityName), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->clear($entityName);
    }

    public function close()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'close', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->close();
    }

    public function persist($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'persist', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'remove', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'refresh', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'detach', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'merge', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getRepository', array('entityName' => $entityName), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'contains', array('entity' => $entity), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getEventManager', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getConfiguration', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'isOpen', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getUnitOfWork', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getProxyFactory', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'initializeObject', array('obj' => $obj), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'getFilters', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'isFiltersStateClean', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'hasFilters', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return $this->valueHolder1dc37->hasFilters();
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

        $instance->initializer004ee = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1dc37) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1dc37 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1dc37->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__get', ['name' => $name], $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        if (isset(self::$publicProperties6ddb9[$name])) {
            return $this->valueHolder1dc37->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dc37;

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

        $targetObject = $this->valueHolder1dc37;
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
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dc37;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1dc37;
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
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__isset', array('name' => $name), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dc37;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1dc37;
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
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__unset', array('name' => $name), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dc37;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1dc37;
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
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__clone', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        $this->valueHolder1dc37 = clone $this->valueHolder1dc37;
    }

    public function __sleep()
    {
        $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, '__sleep', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;

        return array('valueHolder1dc37');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer004ee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer004ee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer004ee && ($this->initializer004ee->__invoke($valueHolder1dc37, $this, 'initializeProxy', array(), $this->initializer004ee) || 1) && $this->valueHolder1dc37 = $valueHolder1dc37;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1dc37;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1dc37;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
