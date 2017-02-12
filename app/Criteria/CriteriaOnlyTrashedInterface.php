<?php

namespace CodePub\Criteria;

interface CriteriaOnlyTrashedInterface
{
    public function onlyTrashed();
    public function withTrashed();
}