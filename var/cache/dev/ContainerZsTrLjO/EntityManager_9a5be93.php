<?php

namespace ContainerZsTrLjO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbbccb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer57550 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdf194 = [
        
    ];

    public function getConnection()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getConnection', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getMetadataFactory', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getExpressionBuilder', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'beginTransaction', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getCache', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'transactional', array('func' => $func), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->transactional($func);
    }

    public function commit()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'commit', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->commit();
    }

    public function rollback()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'rollback', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getClassMetadata', array('className' => $className), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'createQuery', array('dql' => $dql), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'createNamedQuery', array('name' => $name), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'createQueryBuilder', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'flush', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'clear', array('entityName' => $entityName), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->clear($entityName);
    }

    public function close()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'close', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->close();
    }

    public function persist($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'persist', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'remove', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'refresh', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'detach', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'merge', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'contains', array('entity' => $entity), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getEventManager', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getConfiguration', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'isOpen', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getUnitOfWork', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getProxyFactory', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'initializeObject', array('obj' => $obj), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'getFilters', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'isFiltersStateClean', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'hasFilters', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return $this->valueHolderbbccb->hasFilters();
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

        $instance->initializer57550 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbbccb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbccb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbbccb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__get', ['name' => $name], $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        if (isset(self::$publicPropertiesdf194[$name])) {
            return $this->valueHolderbbccb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbccb;

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

        $targetObject = $this->valueHolderbbccb;
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
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbccb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbccb;
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
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__isset', array('name' => $name), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbccb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbbccb;
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
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__unset', array('name' => $name), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbccb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbbccb;
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
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__clone', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        $this->valueHolderbbccb = clone $this->valueHolderbbccb;
    }

    public function __sleep()
    {
        $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, '__sleep', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;

        return array('valueHolderbbccb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer57550 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer57550;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer57550 && ($this->initializer57550->__invoke($valueHolderbbccb, $this, 'initializeProxy', array(), $this->initializer57550) || 1) && $this->valueHolderbbccb = $valueHolderbbccb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbccb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbccb;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
