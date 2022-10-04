<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Language extends \App\Entity\Language implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'langid', 'externalid', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'extensions', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'filterCompilerFiles', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'allowSubmit', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'allowJudge', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'timeFactor', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'require_entry_point', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'entry_point_description', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'compile_executable', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'submissions'];
        }

        return ['__isInitialized__', 'langid', 'externalid', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'extensions', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'filterCompilerFiles', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'allowSubmit', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'allowJudge', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'timeFactor', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'require_entry_point', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'entry_point_description', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'compile_executable', '' . "\0" . 'App\\Entity\\Language' . "\0" . 'submissions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Language $proxy) {
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
    public function setLangid(string $langid): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangid', [$langid]);

        return parent::setLangid($langid);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangid(): ?string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getLangid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangid', []);

        return parent::getLangid();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalid(string $externalid): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalid', [$externalid]);

        return parent::setExternalid($externalid);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalid(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalid', []);

        return parent::getExternalid();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getShortDescription(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortDescription', []);

        return parent::getShortDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtensions(array $extensions): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtensions', [$extensions]);

        return parent::setExtensions($extensions);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensions(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtensions', []);

        return parent::getExtensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilterCompilerFiles(bool $filterCompilerFiles): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilterCompilerFiles', [$filterCompilerFiles]);

        return parent::setFilterCompilerFiles($filterCompilerFiles);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilterCompilerFiles(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilterCompilerFiles', []);

        return parent::getFilterCompilerFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowSubmit(bool $allowSubmit): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowSubmit', [$allowSubmit]);

        return parent::setAllowSubmit($allowSubmit);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowSubmit(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowSubmit', []);

        return parent::getAllowSubmit();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowJudge(bool $allowJudge): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowJudge', [$allowJudge]);

        return parent::setAllowJudge($allowJudge);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowJudge(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowJudge', []);

        return parent::getAllowJudge();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeFactor(float $timeFactor): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeFactor', [$timeFactor]);

        return parent::setTimeFactor($timeFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeFactor(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeFactor', []);

        return parent::getTimeFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequireEntryPoint(bool $requireEntryPoint): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequireEntryPoint', [$requireEntryPoint]);

        return parent::setRequireEntryPoint($requireEntryPoint);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequireEntryPoint(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequireEntryPoint', []);

        return parent::getRequireEntryPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntryPointDescription(?string $entryPointDescription): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntryPointDescription', [$entryPointDescription]);

        return parent::setEntryPointDescription($entryPointDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntryPointDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntryPointDescription', []);

        return parent::getEntryPointDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompileExecutable(\App\Entity\Executable $compileExecutable = NULL): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompileExecutable', [$compileExecutable]);

        return parent::setCompileExecutable($compileExecutable);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompileExecutable(): ?\App\Entity\Executable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompileExecutable', []);

        return parent::getCompileExecutable();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\App\Entity\Submission $submission): \App\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubmission', [$submission]);

        return parent::addSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubmission(\App\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubmission', [$submission]);

        return parent::removeSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', []);

        return parent::getSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function getAceLanguage(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAceLanguage', []);

        return parent::getAceLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiIdField(\App\Service\EventLogService $eventLogService): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiIdField', [$eventLogService]);

        return parent::getApiIdField($eventLogService);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId(\App\Service\EventLogService $eventLogService): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', [$eventLogService]);

        return parent::getApiId($eventLogService);
    }

}
