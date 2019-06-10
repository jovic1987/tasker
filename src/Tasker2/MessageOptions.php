<?php

namespace G4\Tasker\Tasker2;

use G4\ValueObject\StringLiteral;

class MessageOptions
{
    const DELIVERY_MODE = 'delivery_mode';

    /**
     * @var StringLiteral
     */
    private $exchange;

    /**
     * @var StringLiteral
     */
    private $binding;

    /**
     * @var StringLiteral
     */
    private $bindingHP;

    /**
     * @var int
     */
    private $deliveryMode;

    public function __construct(StringLiteral $exchange, StringLiteral $binding, $deliveryMode = 2)
    {
        $this->exchange = $exchange;
        $this->binding = $binding;
        $this->deliveryMode = $deliveryMode;
    }

    /**
     * @return string
     */
    public function getExchange()
    {
        return (string) $this->exchange;
    }

    /**
     * @return string
     */
    public function getBinding()
    {
        return (string) $this->binding;
    }

    /**
     * @return int
     */
    public function getDeliveryMode()
    {
        return (int) $this->deliveryMode;
    }

    /**
     * @return string
     */
    public function getBindingHP()
    {
        return (string) $this->bindingHP;
    }

    /**
     * @return bool
     */
    public function hasBindingHP()
    {
        return isset($this->bindingHP) && $this->bindingHP instanceof StringLiteral;
    }

    public function setBindingHP(StringLiteral $bindingHP)
    {
        $this->bindingHP = $bindingHP;
        return $this;
    }

}