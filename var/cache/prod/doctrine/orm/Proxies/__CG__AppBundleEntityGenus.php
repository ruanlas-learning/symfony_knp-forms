<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Genus extends \AppBundle\Entity\Genus implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'subFamily', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'speciesCount', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'funFact', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'isPublished', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'firstDiscoveredAt', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'notes'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'subFamily', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'speciesCount', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'funFact', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'isPublished', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'firstDiscoveredAt', '' . "\0" . 'AppBundle\\Entity\\Genus' . "\0" . 'notes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Genus $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubFamily()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubFamily', []);

        return parent::getSubFamily();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubFamily(\AppBundle\Entity\SubFamily $subFamily = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubFamily', [$subFamily]);

        return parent::setSubFamily($subFamily);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeciesCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpeciesCount', []);

        return parent::getSpeciesCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpeciesCount($speciesCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpeciesCount', [$speciesCount]);

        return parent::setSpeciesCount($speciesCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getFunFact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFunFact', []);

        return parent::getFunFact();
    }

    /**
     * {@inheritDoc}
     */
    public function setFunFact($funFact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFunFact', [$funFact]);

        return parent::setFunFact($funFact);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstDiscoveredAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstDiscoveredAt', []);

        return parent::getFirstDiscoveredAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstDiscoveredAt(\DateTime $firstDiscoveredAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstDiscoveredAt', [$firstDiscoveredAt]);

        return parent::setFirstDiscoveredAt($firstDiscoveredAt);
    }

}
