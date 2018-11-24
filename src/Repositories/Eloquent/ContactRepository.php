<?php

namespace Cms_Framework_Seed\Contact\Repositories\Eloquent;

use Cms_Framework_Seed\Contact\Interfaces\ContactRepositoryInterface;
use Cms_Framework_Seed\Repository\Eloquent\BaseRepository;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('cms_framework_seed.contact.contact.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('cms_framework_seed.contact.contact.model');
    }
}
