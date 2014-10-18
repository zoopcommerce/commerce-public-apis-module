<?php

namespace Zoop\User\DataModel;

use Zoop\User\DataModel\ApiCredentialInterface;

interface UserInterface
{
    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @param string $username
     */
    public function setUsername($username);

    /**
     * Returns encrypted password
     *
     * @return string
     */
    public function getPassword();

    /**
     * @param string $plaintext
     */
    public function setPassword($plaintext);

    /**
     * @return string
     */
    public function getSalt();

    /**
     * @param string $value
     */
    public function setSalt($value);

    /**
     * @ODM\PrePersist 
     */
    public function createSalt();

    /**
     * @param array $roles
     */
    public function setRoles(array $roles);

    /**
     * @param string $role
     */
    public function addRole($role);

    /**
     * @param string $role
     */
    public function removeRole($role);

    /**
     * @return array
     */
    public function getRoles();

    /**
     * @param  string  $role
     * @return boolean
     */
    public function hasRole($role);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return array
     */
    public function getApiCredentials();

    /**
     * @param array $apiCredentials
     */
    public function setApiCredentials($apiCredentials);

    /**
     * @param ApiCredentialInterface $apiCredential
     */
    public function addApiCredential(ApiCredentialInterface $apiCredential);
}
