<?php

namespace Cms_Framework_Seed\Contact\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Contact policy
        \Cms_Framework_Seed\Contact\Models\Contact::class => \Cms_Framework_Seed\Contact\Policies\ContactPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
