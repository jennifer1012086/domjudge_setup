<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Rejudging extends \App\Entity\Rejudging implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'rejudgingid', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'starttime', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'endtime', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'reason', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'start_user', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'finish_user', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'judgings', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'submissions', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'autoApply', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'repeat', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'repeatedRejudging'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'rejudgingid', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'starttime', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'endtime', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'reason', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'start_user', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'finish_user', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'judgings', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'submissions', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'autoApply', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'repeat', '' . "\0" . 'App\\Entity\\Rejudging' . "\0" . 'repeatedRejudging'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Rejudging $proxy) {
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
    public function getRejudgingid(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRejudgingid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejudgingid', []);

        return parent::getRejudgingid();
    }

    /**
     * {@inheritDoc}
     */
    public function setStarttime($starttime): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStarttime', [$starttime]);

        return parent::setStarttime($starttime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStarttime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStarttime', []);

        return parent::getStarttime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndtime($endtime): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndtime', [$endtime]);

        return parent::setEndtime($endtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndtime', []);

        return parent::getEndtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setReason(string $reason): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReason', [$reason]);

        return parent::setReason($reason);
    }

    /**
     * {@inheritDoc}
     */
    public function getReason(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReason', []);

        return parent::getReason();
    }

    /**
     * {@inheritDoc}
     */
    public function setValid(bool $valid): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValid', [$valid]);

        return parent::setValid($valid);
    }

    /**
     * {@inheritDoc}
     */
    public function getValid(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValid', []);

        return parent::getValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartUser(\App\Entity\User $startUser = NULL): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartUser', [$startUser]);

        return parent::setStartUser($startUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartUser', []);

        return parent::getStartUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinishUser(\App\Entity\User $finishUser = NULL): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinishUser', [$finishUser]);

        return parent::setFinishUser($finishUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinishUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinishUser', []);

        return parent::getFinishUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addJudging(\App\Entity\Judging $judging): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJudging', [$judging]);

        return parent::addJudging($judging);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJudging(\App\Entity\Judging $judging)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJudging', [$judging]);

        return parent::removeJudging($judging);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgings', []);

        return parent::getJudgings();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\App\Entity\Submission $submission): \App\Entity\Rejudging
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
    public function setAutoApply(bool $autoApply): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutoApply', [$autoApply]);

        return parent::setAutoApply($autoApply);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoApply(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutoApply', []);

        return parent::getAutoApply();
    }

    /**
     * {@inheritDoc}
     */
    public function setRepeat(int $repeat): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRepeat', [$repeat]);

        return parent::setRepeat($repeat);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepeat(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepeat', []);

        return parent::getRepeat();
    }

    /**
     * {@inheritDoc}
     */
    public function setRepeatedRejudging(?\App\Entity\Rejudging $repeatedRejudging): \App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRepeatedRejudging', [$repeatedRejudging]);

        return parent::setRepeatedRejudging($repeatedRejudging);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepeatedRejudging(): ?\App\Entity\Rejudging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepeatedRejudging', []);

        return parent::getRepeatedRejudging();
    }

}
