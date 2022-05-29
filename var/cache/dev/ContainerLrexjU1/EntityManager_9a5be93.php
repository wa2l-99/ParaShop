<?php

namespace ContainerLrexjU1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0624c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf3d7f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties33d9e = [
        
    ];

    public function getConnection()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getConnection', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getMetadataFactory', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getExpressionBuilder', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'beginTransaction', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getCache', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'transactional', array('func' => $func), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->transactional($func);
    }

    public function commit()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'commit', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->commit();
    }

    public function rollback()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'rollback', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'createQuery', array('dql' => $dql), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'createQueryBuilder', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'flush', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'clear', array('entityName' => $entityName), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'close', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->close();
    }

    public function persist($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'persist', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'remove', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'refresh', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'detach', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'merge', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'contains', array('entity' => $entity), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getEventManager', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getConfiguration', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'isOpen', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getUnitOfWork', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getProxyFactory', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'getFilters', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'isFiltersStateClean', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'hasFilters', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return $this->valueHolder0624c->hasFilters();
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

        $instance->initializerf3d7f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0624c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0624c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0624c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__get', ['name' => $name], $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        if (isset(self::$publicProperties33d9e[$name])) {
            return $this->valueHolder0624c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624c;

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

        $targetObject = $this->valueHolder0624c;
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
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0624c;
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
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__isset', array('name' => $name), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0624c;
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
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__unset', array('name' => $name), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0624c;
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
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__clone', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        $this->valueHolder0624c = clone $this->valueHolder0624c;
    }

    public function __sleep()
    {
        $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, '__sleep', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;

        return array('valueHolder0624c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf3d7f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf3d7f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf3d7f && ($this->initializerf3d7f->__invoke($valueHolder0624c, $this, 'initializeProxy', array(), $this->initializerf3d7f) || 1) && $this->valueHolder0624c = $valueHolder0624c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0624c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0624c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
