<?php

namespace App\Http\View\Composers;

use Amranidev\Laracombee\Laracombee;
use App\Models\Plan;
use Illuminate\View\View;

class ResultsComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $all_plans;
    protected $plans;
    protected $recommended_plans;
    protected $recombee_success;


    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $user_id = auth()->id();
        // Dependencies are automatically resolved by the service container...
        $all_plans = Plan::all();
        $this->plans = array_chunk($all_plans->toArray(), 3);

        $this->recombee_success = true;

        $recombee_recommendations = (new Laracombee)->recommendItemsToUser($user_id, 10)->otherWise(function ($error) {
            $this->recombee_success = false;
        })->wait();

        if ($this->recombee_success){
            $this->recommended_plans = Plan::find(array_values($recombee_recommendations["recomms"]));
        }
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('plans', $this->plans);
        $view->with('recommended_plans', $this->recommended_plans);
    }
}
