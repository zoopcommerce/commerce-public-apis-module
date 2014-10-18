<?php

namespace Zoop\Company\DataModel;

interface FilterCountryInterface
{
    /**
     * @return array
     */
    public function getCompanies();

    /**
     * @param array $companies
     */
    public function setCompanies(array $companies);

    /**
     * @param string $company
     */
    public function addCompany($company);
}
