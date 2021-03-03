<?php

namespace Container9upNBxf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere4218 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf3e69 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties582d7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getConnection', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getMetadataFactory', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getExpressionBuilder', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'beginTransaction', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getCache', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'transactional', array('func' => $func), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->transactional($func);
    }

    public function commit()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'commit', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->commit();
    }

    public function rollback()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'rollback', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getClassMetadata', array('className' => $className), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'createQuery', array('dql' => $dql), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'createNamedQuery', array('name' => $name), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'createQueryBuilder', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'flush', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'clear', array('entityName' => $entityName), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->clear($entityName);
    }

    public function close()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'close', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->close();
    }

    public function persist($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'persist', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'remove', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'refresh', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'detach', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'merge', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'contains', array('entity' => $entity), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getEventManager', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getConfiguration', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'isOpen', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getUnitOfWork', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getProxyFactory', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'initializeObject', array('obj' => $obj), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'getFilters', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'isFiltersStateClean', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'hasFilters', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return $this->valueHoldere4218->hasFilters();
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

        $instance->initializerf3e69 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere4218) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere4218 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere4218->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__get', ['name' => $name], $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        if (isset(self::$publicProperties582d7[$name])) {
            return $this->valueHoldere4218->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4218;

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

        $targetObject = $this->valueHoldere4218;
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
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4218;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere4218;
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
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__isset', array('name' => $name), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4218;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere4218;
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
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__unset', array('name' => $name), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4218;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere4218;
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
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__clone', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        $this->valueHoldere4218 = clone $this->valueHoldere4218;
    }

    public function __sleep()
    {
        $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, '__sleep', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;

        return array('valueHoldere4218');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf3e69 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf3e69;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf3e69 && ($this->initializerf3e69->__invoke($valueHoldere4218, $this, 'initializeProxy', array(), $this->initializerf3e69) || 1) && $this->valueHoldere4218 = $valueHoldere4218;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere4218;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere4218;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
