<?php

namespace Symfony\Config\Sentry;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $integrations;
    private $defaultIntegrations;
    private $sendAttempts;
    private $prefixes;
    private $sampleRate;
    private $tracesSampleRate;
    private $tracesSampler;
    private $attachStacktrace;
    private $contextLines;
    private $enableCompression;
    private $environment;
    private $logger;
    private $release;
    private $serverName;
    private $beforeSend;
    private $tags;
    private $errorTypes;
    private $maxBreadcrumbs;
    private $beforeBreadcrumb;
    private $inAppExclude;
    private $inAppInclude;
    private $sendDefaultPii;
    private $maxValueLength;
    private $httpProxy;
    private $httpConnectTimeout;
    private $httpTimeout;
    private $captureSilencedErrors;
    private $maxRequestBodySize;
    private $classSerializers;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function integrations($value): self
    {
        $this->_usedProperties['integrations'] = true;
        $this->integrations = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function defaultIntegrations($value): self
    {
        $this->_usedProperties['defaultIntegrations'] = true;
        $this->defaultIntegrations = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function sendAttempts($value): self
    {
        $this->_usedProperties['sendAttempts'] = true;
        $this->sendAttempts = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function prefixes($value): self
    {
        $this->_usedProperties['prefixes'] = true;
        $this->prefixes = $value;

        return $this;
    }

    /**
     * The sampling factor to apply to events. A value of 0 will deny sending any event, and a value of 1 will send all events.
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function sampleRate($value): self
    {
        $this->_usedProperties['sampleRate'] = true;
        $this->sampleRate = $value;

        return $this;
    }

    /**
     * The sampling factor to apply to transactions. A value of 0 will deny sending any transaction, and a value of 1 will send all transactions.
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function tracesSampleRate($value): self
    {
        $this->_usedProperties['tracesSampleRate'] = true;
        $this->tracesSampleRate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tracesSampler($value): self
    {
        $this->_usedProperties['tracesSampler'] = true;
        $this->tracesSampler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function attachStacktrace($value): self
    {
        $this->_usedProperties['attachStacktrace'] = true;
        $this->attachStacktrace = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function contextLines($value): self
    {
        $this->_usedProperties['contextLines'] = true;
        $this->contextLines = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableCompression($value): self
    {
        $this->_usedProperties['enableCompression'] = true;
        $this->enableCompression = $value;

        return $this;
    }

    /**
     * @default '%kernel.environment%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function environment($value): self
    {
        $this->_usedProperties['environment'] = true;
        $this->environment = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): self
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;

        return $this;
    }

    /**
     * @default '1.0.0+no-version-set@{no ref'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function release($value): self
    {
        $this->_usedProperties['release'] = true;
        $this->release = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serverName($value): self
    {
        $this->_usedProperties['serverName'] = true;
        $this->serverName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function beforeSend($value): self
    {
        $this->_usedProperties['beforeSend'] = true;
        $this->beforeSend = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tag(string $name, $value): self
    {
        $this->_usedProperties['tags'] = true;
        $this->tags[$name] = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function errorTypes($value): self
    {
        $this->_usedProperties['errorTypes'] = true;
        $this->errorTypes = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxBreadcrumbs($value): self
    {
        $this->_usedProperties['maxBreadcrumbs'] = true;
        $this->maxBreadcrumbs = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function beforeBreadcrumb($value): self
    {
        $this->_usedProperties['beforeBreadcrumb'] = true;
        $this->beforeBreadcrumb = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function inAppExclude($value): self
    {
        $this->_usedProperties['inAppExclude'] = true;
        $this->inAppExclude = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function inAppInclude($value): self
    {
        $this->_usedProperties['inAppInclude'] = true;
        $this->inAppInclude = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sendDefaultPii($value): self
    {
        $this->_usedProperties['sendDefaultPii'] = true;
        $this->sendDefaultPii = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxValueLength($value): self
    {
        $this->_usedProperties['maxValueLength'] = true;
        $this->maxValueLength = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpProxy($value): self
    {
        $this->_usedProperties['httpProxy'] = true;
        $this->httpProxy = $value;

        return $this;
    }

    /**
     * The maximum number of seconds to wait while trying to connect to a server. It works only when using the default transport.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function httpConnectTimeout($value): self
    {
        $this->_usedProperties['httpConnectTimeout'] = true;
        $this->httpConnectTimeout = $value;

        return $this;
    }

    /**
     * The maximum execution time for the request+response as a whole. It works only when using the default transport.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function httpTimeout($value): self
    {
        $this->_usedProperties['httpTimeout'] = true;
        $this->httpTimeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function captureSilencedErrors($value): self
    {
        $this->_usedProperties['captureSilencedErrors'] = true;
        $this->captureSilencedErrors = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|'none'|'small'|'medium'|'always' $value
     * @return $this
     */
    public function maxRequestBodySize($value): self
    {
        $this->_usedProperties['maxRequestBodySize'] = true;
        $this->maxRequestBodySize = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function classSerializer(string $class, $value): self
    {
        $this->_usedProperties['classSerializers'] = true;
        $this->classSerializers[$class] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('integrations', $value)) {
            $this->_usedProperties['integrations'] = true;
            $this->integrations = $value['integrations'];
            unset($value['integrations']);
        }

        if (array_key_exists('default_integrations', $value)) {
            $this->_usedProperties['defaultIntegrations'] = true;
            $this->defaultIntegrations = $value['default_integrations'];
            unset($value['default_integrations']);
        }

        if (array_key_exists('send_attempts', $value)) {
            $this->_usedProperties['sendAttempts'] = true;
            $this->sendAttempts = $value['send_attempts'];
            unset($value['send_attempts']);
        }

        if (array_key_exists('prefixes', $value)) {
            $this->_usedProperties['prefixes'] = true;
            $this->prefixes = $value['prefixes'];
            unset($value['prefixes']);
        }

        if (array_key_exists('sample_rate', $value)) {
            $this->_usedProperties['sampleRate'] = true;
            $this->sampleRate = $value['sample_rate'];
            unset($value['sample_rate']);
        }

        if (array_key_exists('traces_sample_rate', $value)) {
            $this->_usedProperties['tracesSampleRate'] = true;
            $this->tracesSampleRate = $value['traces_sample_rate'];
            unset($value['traces_sample_rate']);
        }

        if (array_key_exists('traces_sampler', $value)) {
            $this->_usedProperties['tracesSampler'] = true;
            $this->tracesSampler = $value['traces_sampler'];
            unset($value['traces_sampler']);
        }

        if (array_key_exists('attach_stacktrace', $value)) {
            $this->_usedProperties['attachStacktrace'] = true;
            $this->attachStacktrace = $value['attach_stacktrace'];
            unset($value['attach_stacktrace']);
        }

        if (array_key_exists('context_lines', $value)) {
            $this->_usedProperties['contextLines'] = true;
            $this->contextLines = $value['context_lines'];
            unset($value['context_lines']);
        }

        if (array_key_exists('enable_compression', $value)) {
            $this->_usedProperties['enableCompression'] = true;
            $this->enableCompression = $value['enable_compression'];
            unset($value['enable_compression']);
        }

        if (array_key_exists('environment', $value)) {
            $this->_usedProperties['environment'] = true;
            $this->environment = $value['environment'];
            unset($value['environment']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('release', $value)) {
            $this->_usedProperties['release'] = true;
            $this->release = $value['release'];
            unset($value['release']);
        }

        if (array_key_exists('server_name', $value)) {
            $this->_usedProperties['serverName'] = true;
            $this->serverName = $value['server_name'];
            unset($value['server_name']);
        }

        if (array_key_exists('before_send', $value)) {
            $this->_usedProperties['beforeSend'] = true;
            $this->beforeSend = $value['before_send'];
            unset($value['before_send']);
        }

        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
        }

        if (array_key_exists('error_types', $value)) {
            $this->_usedProperties['errorTypes'] = true;
            $this->errorTypes = $value['error_types'];
            unset($value['error_types']);
        }

        if (array_key_exists('max_breadcrumbs', $value)) {
            $this->_usedProperties['maxBreadcrumbs'] = true;
            $this->maxBreadcrumbs = $value['max_breadcrumbs'];
            unset($value['max_breadcrumbs']);
        }

        if (array_key_exists('before_breadcrumb', $value)) {
            $this->_usedProperties['beforeBreadcrumb'] = true;
            $this->beforeBreadcrumb = $value['before_breadcrumb'];
            unset($value['before_breadcrumb']);
        }

        if (array_key_exists('in_app_exclude', $value)) {
            $this->_usedProperties['inAppExclude'] = true;
            $this->inAppExclude = $value['in_app_exclude'];
            unset($value['in_app_exclude']);
        }

        if (array_key_exists('in_app_include', $value)) {
            $this->_usedProperties['inAppInclude'] = true;
            $this->inAppInclude = $value['in_app_include'];
            unset($value['in_app_include']);
        }

        if (array_key_exists('send_default_pii', $value)) {
            $this->_usedProperties['sendDefaultPii'] = true;
            $this->sendDefaultPii = $value['send_default_pii'];
            unset($value['send_default_pii']);
        }

        if (array_key_exists('max_value_length', $value)) {
            $this->_usedProperties['maxValueLength'] = true;
            $this->maxValueLength = $value['max_value_length'];
            unset($value['max_value_length']);
        }

        if (array_key_exists('http_proxy', $value)) {
            $this->_usedProperties['httpProxy'] = true;
            $this->httpProxy = $value['http_proxy'];
            unset($value['http_proxy']);
        }

        if (array_key_exists('http_connect_timeout', $value)) {
            $this->_usedProperties['httpConnectTimeout'] = true;
            $this->httpConnectTimeout = $value['http_connect_timeout'];
            unset($value['http_connect_timeout']);
        }

        if (array_key_exists('http_timeout', $value)) {
            $this->_usedProperties['httpTimeout'] = true;
            $this->httpTimeout = $value['http_timeout'];
            unset($value['http_timeout']);
        }

        if (array_key_exists('capture_silenced_errors', $value)) {
            $this->_usedProperties['captureSilencedErrors'] = true;
            $this->captureSilencedErrors = $value['capture_silenced_errors'];
            unset($value['capture_silenced_errors']);
        }

        if (array_key_exists('max_request_body_size', $value)) {
            $this->_usedProperties['maxRequestBodySize'] = true;
            $this->maxRequestBodySize = $value['max_request_body_size'];
            unset($value['max_request_body_size']);
        }

        if (array_key_exists('class_serializers', $value)) {
            $this->_usedProperties['classSerializers'] = true;
            $this->classSerializers = $value['class_serializers'];
            unset($value['class_serializers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['integrations'])) {
            $output['integrations'] = $this->integrations;
        }
        if (isset($this->_usedProperties['defaultIntegrations'])) {
            $output['default_integrations'] = $this->defaultIntegrations;
        }
        if (isset($this->_usedProperties['sendAttempts'])) {
            $output['send_attempts'] = $this->sendAttempts;
        }
        if (isset($this->_usedProperties['prefixes'])) {
            $output['prefixes'] = $this->prefixes;
        }
        if (isset($this->_usedProperties['sampleRate'])) {
            $output['sample_rate'] = $this->sampleRate;
        }
        if (isset($this->_usedProperties['tracesSampleRate'])) {
            $output['traces_sample_rate'] = $this->tracesSampleRate;
        }
        if (isset($this->_usedProperties['tracesSampler'])) {
            $output['traces_sampler'] = $this->tracesSampler;
        }
        if (isset($this->_usedProperties['attachStacktrace'])) {
            $output['attach_stacktrace'] = $this->attachStacktrace;
        }
        if (isset($this->_usedProperties['contextLines'])) {
            $output['context_lines'] = $this->contextLines;
        }
        if (isset($this->_usedProperties['enableCompression'])) {
            $output['enable_compression'] = $this->enableCompression;
        }
        if (isset($this->_usedProperties['environment'])) {
            $output['environment'] = $this->environment;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['release'])) {
            $output['release'] = $this->release;
        }
        if (isset($this->_usedProperties['serverName'])) {
            $output['server_name'] = $this->serverName;
        }
        if (isset($this->_usedProperties['beforeSend'])) {
            $output['before_send'] = $this->beforeSend;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->_usedProperties['errorTypes'])) {
            $output['error_types'] = $this->errorTypes;
        }
        if (isset($this->_usedProperties['maxBreadcrumbs'])) {
            $output['max_breadcrumbs'] = $this->maxBreadcrumbs;
        }
        if (isset($this->_usedProperties['beforeBreadcrumb'])) {
            $output['before_breadcrumb'] = $this->beforeBreadcrumb;
        }
        if (isset($this->_usedProperties['inAppExclude'])) {
            $output['in_app_exclude'] = $this->inAppExclude;
        }
        if (isset($this->_usedProperties['inAppInclude'])) {
            $output['in_app_include'] = $this->inAppInclude;
        }
        if (isset($this->_usedProperties['sendDefaultPii'])) {
            $output['send_default_pii'] = $this->sendDefaultPii;
        }
        if (isset($this->_usedProperties['maxValueLength'])) {
            $output['max_value_length'] = $this->maxValueLength;
        }
        if (isset($this->_usedProperties['httpProxy'])) {
            $output['http_proxy'] = $this->httpProxy;
        }
        if (isset($this->_usedProperties['httpConnectTimeout'])) {
            $output['http_connect_timeout'] = $this->httpConnectTimeout;
        }
        if (isset($this->_usedProperties['httpTimeout'])) {
            $output['http_timeout'] = $this->httpTimeout;
        }
        if (isset($this->_usedProperties['captureSilencedErrors'])) {
            $output['capture_silenced_errors'] = $this->captureSilencedErrors;
        }
        if (isset($this->_usedProperties['maxRequestBodySize'])) {
            $output['max_request_body_size'] = $this->maxRequestBodySize;
        }
        if (isset($this->_usedProperties['classSerializers'])) {
            $output['class_serializers'] = $this->classSerializers;
        }

        return $output;
    }

}
