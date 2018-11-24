<?php

namespace Cms_Framework_Seed\Contact\Repositories\Criteria;

use Cms_Framework_Seed\Repository\Contracts\CriteriaInterface;
use Cms_Framework_Seed\Repository\Contracts\RepositoryInterface;

class ContactResourceCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        return $model;
    }
}