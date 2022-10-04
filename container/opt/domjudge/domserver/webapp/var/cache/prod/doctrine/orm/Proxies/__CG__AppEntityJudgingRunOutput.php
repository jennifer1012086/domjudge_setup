<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class JudgingRunOutput extends \App\Entity\JudgingRunOutput implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'run', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_run', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_diff', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_error', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_system', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'metadata'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'run', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_run', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_diff', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_error', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'output_system', '' . "\0" . 'App\\Entity\\JudgingRunOutput' . "\0" . 'metadata'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (JudgingRunOutput $proxy) {
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
    public function setRun(\App\Entity\JudgingRun $run): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRun', [$run]);

        return parent::setRun($run);
    }

    /**
     * {@inheritDoc}
     */
    public function getRun(): \App\Entity\JudgingRun
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRun', []);

        return parent::getRun();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputRun($outputRun): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputRun', [$outputRun]);

        return parent::setOutputRun($outputRun);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputRun(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputRun', []);

        return parent::getOutputRun();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputDiff(string $outputDiff): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputDiff', [$outputDiff]);

        return parent::setOutputDiff($outputDiff);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputDiff(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputDiff', []);

        return parent::getOutputDiff();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputError(string $outputError): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputError', [$outputError]);

        return parent::setOutputError($outputError);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputError(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputError', []);

        return parent::getOutputError();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputSystem(string $outputSystem): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputSystem', [$outputSystem]);

        return parent::setOutputSystem($outputSystem);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputSystem(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputSystem', []);

        return parent::getOutputSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', []);

        return parent::getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadata($metadata): \App\Entity\JudgingRunOutput
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadata', [$metadata]);

        return parent::setMetadata($metadata);
    }

}
