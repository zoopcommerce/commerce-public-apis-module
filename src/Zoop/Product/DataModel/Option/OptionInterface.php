<?php

namespace Zoop\Product\DataModel\Option;

interface OptionInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getHelpMessage();

    /**
     * @param string $helpMessage
     */
    public function setHelpMessage($helpMessage);

    /**
     * @return boolean
     */
    public function isSkuSelector();

    /**
     * @param boolean $isSkuSelector
     */
    public function setIsSkuSelector($isSkuSelector);

    /**
     * @return boolean
     */
    public function isRequired();

    /**
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired);
}
