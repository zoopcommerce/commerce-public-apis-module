<?php

namespace Zoop\Partner\DataModel;

use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Common\DataModel\Address;
use Zoop\Company\DataModel\Company;
use Zoop\Shard\Stamp\DataModel\CreatedOnTrait;
use Zoop\Shard\Stamp\DataModel\UpdatedOnTrait;
use Zoop\Shard\SoftDelete\DataModel\SoftDeleteableTrait;
//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

/**
 * @author Josh Stuart <josh.stuart@zoopcommerce.com>
 *
 * @ODM\Document(
 *     collection="Partner",
 *     indexes = {
 *         @ODM\Index(
 *              keys={
 *                  "name"="asc",
 *                  "email"="asc"
 *              }
 *         )
 *     }
 * )
 * @Shard\AccessControl({
 *     @Shard\Permission\Basic(roles="zoop-admin", allow="*"),
 *     @Shard\Permission\Basic(roles="partner-admin", deny="*"),
 *     @Shard\Permission\Basic(roles="company-admin", deny="*")
 * })
 */
class Partner
{
    use CreatedOnTrait;
    use UpdatedOnTrait;
    use SoftDeleteableTrait;
    
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\String
     * @Shard\Validator\Required
     */
    protected $name;

    /**
     * @ODM\String
     * @Shard\Validator\Chain({
     *     @Shard\Validator\Required,
     *     @Shard\Validator\Email
     * })
     */
    protected $email;

    /**
     * @ODM\String
     */
    protected $phoneNumber;

    /**
     * @ODM\EmbedOne(targetDocument="Zoop\Common\DataModel\Address")
     */
    protected $address;
    
    /**
     * @ODM\ReferenceMany(
     *      targetDocument = "Zoop\Company\DataModel\Company",
     *      mappedBy = "partner",
     *      sort={
     *          "name" = "asc"
     *      }
     * )
     */
    protected $companies;

    public function __construct()
    {
        $this->companies = new ArrayCollection;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param ArrayCollection|array $companies
     */
    public function setCompanies($companies)
    {
        if (!$companies instanceof ArrayCollection) {
            $companies = new ArrayCollection($companies);
        }
        $this->companies = $companies;
    }

    /**
     * @param Company $company
     */
    public function addCompany(Company $company)
    {
        if (!$this->getCompanies()->contains($company)) {
            $this->getCompanies()->add($company);
        }
    }
}
