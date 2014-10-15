<?php

namespace Zoop\Order\DataModel;

interface HistoryInterface
{
    public function getCreatedBy();

    public function getCreatedOn();

    public function getState();

    public function setState($state);
}