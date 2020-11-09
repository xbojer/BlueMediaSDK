<?php


namespace michalrokita\BlueMediaSDK\DataTypes;


class Email
{
    protected $_email;

    public function __construct(string $email)
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->_email;
    }
}
