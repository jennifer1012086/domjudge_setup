<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ExecutableFile extends \App\Entity\ExecutableFile implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'execfileid', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'filename', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'rank', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'immutableExecutable', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'fileContent', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'hash', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'isExecutable'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'execfileid', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'filename', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'rank', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'immutableExecutable', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'fileContent', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'hash', '' . "\0" . 'App\\Entity\\ExecutableFile' . "\0" . 'isExecutable'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ExecutableFile $proxy) {
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
    public function getExecFileId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExecFileId', []);

        return parent::getExecFileId();
    }

    /**
     * {@inheritDoc}
     */
    public function setExecFileId(int $execfileid): \App\Entity\ExecutableFile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExecFileId', [$execfileid]);

        return parent::setExecFileId($execfileid);
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename(string $filename): \App\Entity\ExecutableFile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setRank(int $rank): \App\Entity\ExecutableFile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRank', [$rank]);

        return parent::setRank($rank);
    }

    /**
     * {@inheritDoc}
     */
    public function getRank(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRank', []);

        return parent::getRank();
    }

    /**
     * {@inheritDoc}
     */
    public function setImmutableExecutable(\App\Entity\ImmutableExecutable $immutableExecutable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImmutableExecutable', [$immutableExecutable]);

        return parent::setImmutableExecutable($immutableExecutable);
    }

    /**
     * {@inheritDoc}
     */
    public function getImmutableExecutable(): \App\Entity\ImmutableExecutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImmutableExecutable', []);

        return parent::getImmutableExecutable();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileContent(string $fileContent): \App\Entity\ExecutableFile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileContent', [$fileContent]);

        return parent::setFileContent($fileContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getHash(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHash', []);

        return parent::getHash();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileContent(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileContent', []);

        return parent::getFileContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsExecutable(bool $isExecutable): \App\Entity\ExecutableFile
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsExecutable', [$isExecutable]);

        return parent::setIsExecutable($isExecutable);
    }

    /**
     * {@inheritDoc}
     */
    public function isExecutable(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExecutable', []);

        return parent::isExecutable();
    }

}
