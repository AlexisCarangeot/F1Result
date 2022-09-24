<?php

namespace ContainerTrD9RCQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd9ca1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf6c2f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0ad7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getConnection', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getMetadataFactory', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getExpressionBuilder', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'beginTransaction', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getCache', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'transactional', array('func' => $func), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->transactional($func);
    }

    public function commit()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'commit', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->commit();
    }

    public function rollback()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'rollback', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'createQuery', array('dql' => $dql), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'createQueryBuilder', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'flush', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'clear', array('entityName' => $entityName), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->clear($entityName);
    }

    public function close()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'close', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->close();
    }

    public function persist($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'persist', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'remove', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'refresh', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'detach', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'merge', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'contains', array('entity' => $entity), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getEventManager', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getConfiguration', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'isOpen', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getUnitOfWork', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getProxyFactory', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'getFilters', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'isFiltersStateClean', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'hasFilters', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return $this->valueHolderd9ca1->hasFilters();
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

        $instance->initializerf6c2f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd9ca1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9ca1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd9ca1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__get', ['name' => $name], $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        if (isset(self::$publicPropertiesb0ad7[$name])) {
            return $this->valueHolderd9ca1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ca1;

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

        $targetObject = $this->valueHolderd9ca1;
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
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ca1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9ca1;
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
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__isset', array('name' => $name), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ca1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd9ca1;
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
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__unset', array('name' => $name), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ca1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd9ca1;
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
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__clone', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        $this->valueHolderd9ca1 = clone $this->valueHolderd9ca1;
    }

    public function __sleep()
    {
        $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, '__sleep', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;

        return array('valueHolderd9ca1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6c2f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6c2f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf6c2f && ($this->initializerf6c2f->__invoke($valueHolderd9ca1, $this, 'initializeProxy', array(), $this->initializerf6c2f) || 1) && $this->valueHolderd9ca1 = $valueHolderd9ca1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9ca1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd9ca1;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
