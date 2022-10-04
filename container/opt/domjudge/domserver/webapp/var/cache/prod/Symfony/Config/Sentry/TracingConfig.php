<?php

namespace Symfony\Config\Sentry;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Tracing'.\DIRECTORY_SEPARATOR.'DbalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Tracing'.\DIRECTORY_SEPARATOR.'TwigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Tracing'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Tracing'.\DIRECTORY_SEPARATOR.'ConsoleConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TracingConfig 
{
    private $enabled;
    private $dbal;
    private $twig;
    private $cache;
    private $console;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function dbal(array $value = []): \Symfony\Config\Sentry\Tracing\DbalConfig
    {
        if (null === $this->dbal) {
            $this->_usedProperties['dbal'] = true;
            $this->dbal = new \Symfony\Config\Sentry\Tracing\DbalConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dbal()" has already been initialized. You cannot pass values the second time you call dbal().');
        }

        return $this->dbal;
    }

    public function twig(array $value = []): \Symfony\Config\Sentry\Tracing\TwigConfig
    {
        if (null === $this->twig) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\Sentry\Tracing\TwigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }

        return $this->twig;
    }

    public function cache(array $value = []): \Symfony\Config\Sentry\Tracing\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Sentry\Tracing\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    public function console(array $value = []): \Symfony\Config\Sentry\Tracing\ConsoleConfig
    {
        if (null === $this->console) {
            $this->_usedProperties['console'] = true;
            $this->console = new \Symfony\Config\Sentry\Tracing\ConsoleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "console()" has already been initialized. You cannot pass values the second time you call console().');
        }

        return $this->console;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('dbal', $value)) {
            $this->_usedProperties['dbal'] = true;
            $this->dbal = new \Symfony\Config\Sentry\Tracing\DbalConfig($value['dbal']);
            unset($value['dbal']);
        }

        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\Sentry\Tracing\TwigConfig($value['twig']);
            unset($value['twig']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Sentry\Tracing\CacheConfig($value['cache']);
            unset($value['cache']);
        }

        if (array_key_exists('console', $value)) {
            $this->_usedProperties['console'] = true;
            $this->console = new \Symfony\Config\Sentry\Tracing\ConsoleConfig($value['console']);
            unset($value['console']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['dbal'])) {
            $output['dbal'] = $this->dbal->toArray();
        }
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig->toArray();
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
        if (isset($this->_usedProperties['console'])) {
            $output['console'] = $this->console->toArray();
        }

        return $output;
    }

}
