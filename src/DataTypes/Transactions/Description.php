<?php


namespace michalrokita\BlueMediaSDK\DataTypes\Transactions;


class Description
{
    protected $_description;

    public function __construct(string $description)
    {
        $this->_description = $description;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->_description;
    }
}
