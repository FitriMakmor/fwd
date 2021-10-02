<?php

namespace App\Http\View\Composers;

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
        // $user = User::find($user_id);
        // $employer = $user->userable;

        // $selectedId = $employer->viewed_candidate_id;

        // if ($selectedId) {
        //     $ttl = 86400; // 1 Day
        //     $this->recommended_candidates = Cache::remember($selectedId, $ttl, function () use ($selectedId) {
        //         $recommended_candidates = Jobseeker::where("is_hidden", 0)->with(['profile_photo', 'contact_info.state', 'contact_info.city', 'skills', 'job_experiences', 'seeking_employment_types.employment_type', 'seeking_job_locations.state', 'seeking_job_locations.city', 'education_experiences.education_level'])->get();
        //         $productSimilarity = new ProductSimilarity($recommended_candidates);
        //         $similarityMatrix  = $productSimilarity->calculateSimilarityMatrix();
        //         $recommended_candidates = $productSimilarity->getProductsSortedBySimilarity($selectedId, $similarityMatrix);
        //         return array_chunk($recommended_candidates, 3);
        //     });
        // }

        // return view('welcome', compact('selectedId', 'selectedProduct', 'products'));
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
    }
}
