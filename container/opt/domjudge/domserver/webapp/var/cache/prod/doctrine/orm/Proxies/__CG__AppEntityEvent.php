<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'eventid', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'eventtime', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'endpointtype', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'endpointid', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'action', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'contest'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'eventid', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'eventtime', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'endpointtype', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'endpointid', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'action', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'contest'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setEventid(int $eventid): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventid', [$eventid]);

        return parent::setEventid($eventid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventid(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEventid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventid', []);

        return parent::getEventid();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventtime($eventtime): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventtime', [$eventtime]);

        return parent::setEventtime($eventtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventtime', []);

        return parent::getEventtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndpointtype(string $endpointtype): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndpointtype', [$endpointtype]);

        return parent::setEndpointtype($endpointtype);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpointtype(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndpointtype', []);

        return parent::getEndpointtype();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndpointid(string $endpointid): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndpointid', [$endpointid]);

        return parent::setEndpointid($endpointid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpointid(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndpointid', []);

        return parent::getEndpointid();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction(string $action): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(?\App\Entity\Contest $contest): \App\Entity\Event
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest(): ?\App\Entity\Contest
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

}
