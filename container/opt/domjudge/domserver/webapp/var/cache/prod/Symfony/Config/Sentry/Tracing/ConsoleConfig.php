<?php

namespace Symfony\Config\Sentry\Tracing;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConsoleConfig 
{
    private $excludedCommands;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excludedCommands($value): self
    {
        $this->_usedProperties['excludedCommands'] = true;
        $this->excludedCommands = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('excluded_commands', $value)) {
            $this->_usedProperties['excludedCommands'] = true;
            $this->excludedCommands = $value['excluded_commands'];
            unset($value['excluded_commands']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['excludedCommands'])) {
            $output['excluded_commands'] = $this->excludedCommands;
        }

        return $output;
    }

}
