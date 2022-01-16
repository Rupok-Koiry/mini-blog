<?php

namespace App\Providers;

use App\Gates\AdminGate;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class=>PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       /*  Gate::define('isAdmin', function ($user) {
            if ($user->email === 'admin@gmail.com') {
                return true;
            } else {
                return false;
            }
        }); */

        // Gate::define('isAdmin',[AdminGate::class,'check_admin']);
    }
}
