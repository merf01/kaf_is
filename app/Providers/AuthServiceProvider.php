<?php

namespace App\Providers;
use App\Project;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerProjectPolicies();

        //
    }
    public function registerProjectPolicies()
{
    Gate::define('create-project', function ($user) {
        return $user->hasAccess(['create-project']);
    });
    Gate::define('update-project', function ($user,  $project_id) {
      	$project = Project::findOrFail($project_id);
        return $user->hasAccess(['update-project']) or $user->id == $project->user_id;
    });
    Gate::define('destroy-project', function ($user) {
        return $user->hasAccess(['destroy-project']);
    });
  //  Gate::define('show-projects', function ($user) {
    //    return $user->inRole('Admin');
//    });
    Gate::define('index-project', function ($user) {
        return $user->hasAccess(['index-project']);
    });
    Gate::define('show-projects', function ($user) {
        return $user->inRole('Admin');
    });
}
}
