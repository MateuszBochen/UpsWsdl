<?php

namespace UpsWsdl\Classes\Ship;

class PackingListInfoType
{

    /**
     * @var PackageAssociatedType[] $PackageAssociated
     */
    protected $PackageAssociated = null;

    /**
     * @param PackageAssociatedType[] $PackageAssociated
     */
    public function __construct(array $PackageAssociated = null)
    {
      $this->PackageAssociated = $PackageAssociated;
    }

    /**
     * @return PackageAssociatedType[]
     */
    public function getPackageAssociated()
    {
      return $this->PackageAssociated;
    }

    /**
     * @param PackageAssociatedType[] $PackageAssociated
     * @return \UpsWsdl\Classes\Ship\PackingListInfoType
     */
    public function setPackageAssociated(array $PackageAssociated)
    {
      $this->PackageAssociated = $PackageAssociated;
      return $this;
    }

}
