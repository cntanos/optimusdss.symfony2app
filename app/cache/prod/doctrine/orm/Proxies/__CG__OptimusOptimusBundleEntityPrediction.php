<?php

namespace Proxies\__CG__\Optimus\OptimusBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Prediction extends \Optimus\OptimusBundle\Entity\Prediction implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'id', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'name', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'dateCreate', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'dateUser', 'fk_Building');
        }

        return array('__isInitialized__', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'id', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'name', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'dateCreate', '' . "\0" . 'Optimus\\OptimusBundle\\Entity\\Prediction' . "\0" . 'dateUser', 'fk_Building');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Prediction $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreate($dateCreate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreate', array($dateCreate));

        return parent::setDateCreate($dateCreate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreate', array());

        return parent::getDateCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUser($dateUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUser', array($dateUser));

        return parent::setDateUser($dateUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUser', array());

        return parent::getDateUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkBuilding(\Optimus\OptimusBundle\Entity\Building $fkBuilding = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkBuilding', array($fkBuilding));

        return parent::setFkBuilding($fkBuilding);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkBuilding()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkBuilding', array());

        return parent::getFkBuilding();
    }

}
