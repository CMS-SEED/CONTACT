<?php

namespace Cms_Framework_Seed\Contact\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cms_Framework_Seed\Database\Model;
use Cms_Framework_Seed\Database\Traits\Slugger;
use Cms_Framework_Seed\Database\Traits\DateFormatter;
use Cms_Framework_Seed\Filer\Traits\Filer;
use Cms_Framework_Seed\Hashids\Traits\Hashids;
use Cms_Framework_Seed\Repository\Traits\PresentableTrait;
use Cms_Framework_Seed\Activities\Traits\LogsActivity;
use Cms_Framework_Seed\Trans\Traits\Translatable;
// use Cms_Framework_Seed\Workflow\Model\Workflow;

class Contact extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, DateFormatter, Translatable, LogsActivity, PresentableTrait;
    // use Workflow;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'cms_framework_seed.contact.contact';


}
