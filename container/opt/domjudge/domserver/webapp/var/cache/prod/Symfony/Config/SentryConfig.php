<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sentry'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sentry'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sentry'.\DIRECTORY_SEPARATOR.'TracingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SentryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $dsn;
    private $registerErrorListener;
    private $logger;
    private $transportFactory;
    private $options;
    private $messenger;
    private $tracing;
    private $_usedProperties = [];

    /**
     * If this value is not provided, the SDK will try to read it from the SENTRY_DSN environment variable. If that variable also does not exist, the SDK will just not send any events.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dsn($value): self
    {
        $this->_usedProperties['dsn'] = true;
        $this->dsn = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function registerErrorListener($value): self
    {
        $this->_usedProperties['registerErrorListener'] = true;
        $this->registerErrorListener = $value;

        return $this;
    }

    /**
     * The service ID of the PSR-3 logger used to log messages coming from the SDK client. Be aware that setting the same logger of the application may create a circular loop when an event fails to be sent.
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
     * The service ID of the transport factory used by the default SDK client.
     * @default 'Sentry\\Transport\\TransportFactoryInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function transportFactory($value): self
    {
        $this->_usedProperties['transportFactory'] = true;
        $this->transportFactory = $value;

        return $this;
    }

    public function options(array $value = []): \Symfony\Config\Sentry\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Sentry\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    /**
     * @return \Symfony\Config\Sentry\MessengerConfig|$this
     */
    public function messenger($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = $value;

            return $this;
        }

        if (!$this->messenger instanceof \Symfony\Config\Sentry\MessengerConfig) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\Sentry\MessengerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }

        return $this->messenger;
    }

    public function tracing(array $value = []): \Symfony\Config\Sentry\TracingConfig
    {
        if (null === $this->tracing) {
            $this->_usedProperties['tracing'] = true;
            $this->tracing = new \Symfony\Config\Sentry\TracingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tracing()" has already been initialized. You cannot pass values the second time you call tracing().');
        }

        return $this->tracing;
    }

    public function getExtensionAlias(): string
    {
        return 'sentry';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('dsn', $value)) {
            $this->_usedProperties['dsn'] = true;
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }

        if (array_key_exists('register_error_listener', $value)) {
            $this->_usedProperties['registerErrorListener'] = true;
            $this->registerErrorListener = $value['register_error_listener'];
            unset($value['register_error_listener']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('transport_factory', $value)) {
            $this->_usedProperties['transportFactory'] = true;
            $this->transportFactory = $value['transport_factory'];
            unset($value['transport_factory']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Sentry\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if (array_key_exists('messenger', $value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = \is_array($value['messenger']) ? new \Symfony\Config\Sentry\MessengerConfig($value['messenger']) : $value['messenger'];
            unset($value['messenger']);
        }

        if (array_key_exists('tracing', $value)) {
            $this->_usedProperties['tracing'] = true;
            $this->tracing = new \Symfony\Config\Sentry\TracingConfig($value['tracing']);
            unset($value['tracing']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['dsn'])) {
            $output['dsn'] = $this->dsn;
        }
        if (isset($this->_usedProperties['registerErrorListener'])) {
            $output['register_error_listener'] = $this->registerErrorListener;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['transportFactory'])) {
            $output['transport_factory'] = $this->transportFactory;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }
        if (isset($this->_usedProperties['messenger'])) {
            $output['messenger'] = $this->messenger instanceof \Symfony\Config\Sentry\MessengerConfig ? $this->messenger->toArray() : $this->messenger;
        }
        if (isset($this->_usedProperties['tracing'])) {
            $output['tracing'] = $this->tracing->toArray();
        }

        return $output;
    }

}
