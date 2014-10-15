<?php

namespace Zoop\Collection\DataModel;

interface CollectionInterface
{
    public function getCreatedBy();

    public function getCreatedOn();

    public function getUpdatedBy();

    public function getUpdatedOn();

    public function getId();

    public function getSlug();

    public function setSlug($slug);

    public function getName();

    public function setName($name);

    public function getStore();

    public function setStore($store);
}