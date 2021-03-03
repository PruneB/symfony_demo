<?php

namespace ContainerSxU1ozY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee7d8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer331c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa462 = [
        
    ];

    public function getConnection()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getConnection', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getMetadataFactory', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getExpressionBuilder', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'beginTransaction', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getCache', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'transactional', array('func' => $func), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->transactional($func);
    }

    public function commit()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'commit', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->commit();
    }

    public function rollback()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'rollback', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getClassMetadata', array('className' => $className), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'createQuery', array('dql' => $dql), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'createNamedQuery', array('name' => $name), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'createQueryBuilder', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'flush', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'clear', array('entityName' => $entityName), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->clear($entityName);
    }

    public function close()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'close', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->close();
    }

    public function persist($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'persist', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'remove', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'refresh', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'detach', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'merge', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'contains', array('entity' => $entity), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getEventManager', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getConfiguration', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'isOpen', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getUnitOfWork', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getProxyFactory', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'initializeObject', array('obj' => $obj), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'getFilters', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'isFiltersStateClean', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'hasFilters', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return $this->valueHolderee7d8->hasFilters();
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

        $instance->initializer331c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee7d8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee7d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee7d8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__get', ['name' => $name], $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        if (isset(self::$publicPropertiesaa462[$name])) {
            return $this->valueHolderee7d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7d8;

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

        $targetObject = $this->valueHolderee7d8;
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
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7d8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee7d8;
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
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__isset', array('name' => $name), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7d8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee7d8;
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
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__unset', array('name' => $name), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7d8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee7d8;
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
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__clone', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        $this->valueHolderee7d8 = clone $this->valueHolderee7d8;
    }

    public function __sleep()
    {
        $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, '__sleep', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;

        return array('valueHolderee7d8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer331c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer331c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer331c0 && ($this->initializer331c0->__invoke($valueHolderee7d8, $this, 'initializeProxy', array(), $this->initializer331c0) || 1) && $this->valueHolderee7d8 = $valueHolderee7d8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee7d8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee7d8;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}