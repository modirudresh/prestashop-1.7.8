<?php

namespace ps_metrics_module_v4_1_2\Dotenv;

use ps_metrics_module_v4_1_2\Dotenv\Exception\ValidationException;
use ps_metrics_module_v4_1_2\Dotenv\Regex\Regex;
/**
 * This is the validator class.
 *
 * It's responsible for applying validations against a number of variables.
 */
class Validator
{
    /**
     * The variables to validate.
     *
     * @var string[]
     */
    protected $variables;
    /**
     * The loader instance.
     *
     * @var \Dotenv\Loader
     */
    protected $loader;
    /**
     * Create a new validator instance.
     *
     * @param string[]       $variables
     * @param \Dotenv\Loader $loader
     * @param bool           $required
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return void
     */
    public function __construct(array $variables, Loader $loader, $required = \true)
    {
        $this->variables = $variables;
        $this->loader = $loader;
        if ($required) {
            $this->assertCallback(function ($value) {
                return $value !== null;
            }, 'is missing');
        }
    }
    /**
     * Assert that each variable is not empty.
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    public function notEmpty()
    {
        return $this->assertCallback(function ($value) {
            if ($value === null) {
                return \true;
            }
            return \strlen(\trim($value)) > 0;
        }, 'is empty');
    }
    /**
     * Assert that each specified variable is an integer.
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    public function isInteger()
    {
        return $this->assertCallback(function ($value) {
            if ($value === null) {
                return \true;
            }
            return \ctype_digit($value);
        }, 'is not an integer');
    }
    /**
     * Assert that each specified variable is a boolean.
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    public function isBoolean()
    {
        return $this->assertCallback(function ($value) {
            if ($value === null) {
                return \true;
            }
            if ($value === '') {
                return \false;
            }
            return \filter_var($value, \FILTER_VALIDATE_BOOLEAN, \FILTER_NULL_ON_FAILURE) !== null;
        }, 'is not a boolean');
    }
    /**
     * Assert that each variable is amongst the given choices.
     *
     * @param string[] $choices
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    public function allowedValues(array $choices)
    {
        return $this->assertCallback(function ($value) use($choices) {
            if ($value === null) {
                return \true;
            }
            return \in_array($value, $choices, \true);
        }, \sprintf('is not one of [%s]', \implode(', ', $choices)));
    }
    /**
     * Assert that each variable matches the given regular expression.
     *
     * @param string $regex
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    public function allowedRegexValues($regex)
    {
        return $this->assertCallback(function ($value) use($regex) {
            if ($value === null) {
                return \true;
            }
            return Regex::match($regex, $value)->success()->getOrElse(0) === 1;
        }, \sprintf('does not match "%s"', $regex));
    }
    /**
     * Assert that the callback returns true for each variable.
     *
     * @param callable $callback
     * @param string   $message
     *
     * @throws \Dotenv\Exception\ValidationException
     *
     * @return \Dotenv\Validator
     */
    protected function assertCallback(callable $callback, $message = 'failed callback assertion')
    {
        $failing = [];
        foreach ($this->variables as $variable) {
            if ($callback($this->loader->getEnvironmentVariable($variable)) === \false) {
                $failing[] = \sprintf('%s %s', $variable, $message);
            }
        }
        if (\count($failing) > 0) {
            throw new ValidationException(\sprintf('One or more environment variables failed assertions: %s.', \implode(', ', $failing)));
        }
        return $this;
    }
}
