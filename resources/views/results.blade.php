<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold text-orange">
            {{-- {{ __('Dashboard') }} --}}
            Our Suggested Insurance Plans
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body d-flex justify-content-center">
            <h4>
                From your input, we've gathered that these three plans will benefit you, ranked:
            </h4>
        </div>
        {{-- <a href="{{ route('dashboard') }}"
            class="btn btn-warning start-button d-flex justify-content-center align-items-center">Retake The Test</a> --}}
    </div>

    <table class="table comp-table">
        <thead class="">
            {{-- <thead class="header-orange"> --}}
            <tr>
                <th scope="col"
            class="border-none">
            </th>
            <th scope="col" class="col-orange border-none border-right">Plan One</th>
            <th scope="col" class="col-orange border-none border-right">Plan Two</th>
            <th scope="col" class="col-orange border-none border-right">Plan Three</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="header-blue" colspan="4">Description</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Plan Name</th>
                <td>{{ $recommended_plans[0]->name }}</td>
                <td>{{ $recommended_plans[1]->name }}</td>
                <td>{{ $recommended_plans[2]->name }}</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Medical Insurance Category</th>
                <td>{{ $recommended_plans[0]->type }}</td>
                <td>{{ $recommended_plans[1]->type }}</td>
                <td>{{ $recommended_plans[2]->type }}</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Benefits</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Annual Premium</th>
                <td>{{ $recommended_plans[0]->annual_premium }}</td>
                <td>{{ $recommended_plans[1]->annual_premium }}</td>
                <td>{{ $recommended_plans[2]->annual_premium }}</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Overall Annual Limit</th>
                <td>{{ $recommended_plans[0]->overall_annual_limit }}</td>
                <td>{{ $recommended_plans[1]->overall_annual_limit }}</td>
                <td>{{ $recommended_plans[2]->overall_annual_limit }}</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">In-Patient & Daycare</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Room & Board</th>
                <td>{{ $recommended_plans[0]->room_and_board }}</td>
                <td>{{ $recommended_plans[1]->room_and_board }}</td>
                <td>{{ $recommended_plans[2]->room_and_board }}</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Room Category</th>
                <td>{{ $recommended_plans[0]->room_category }}</td>
                <td>{{ $recommended_plans[1]->room_category }}</td>
                <td>{{ $recommended_plans[2]->room_category }}</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Total Number of Days</th>
                <td>{{ $recommended_plans[0]->hospital_days }}</td>
                <td>{{ $recommended_plans[1]->hospital_days }}</td>
                <td>{{ $recommended_plans[2]->hospital_days }}</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Out-patient Treatment</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Consultation & Diagnostic Procedures</th>
                <td>{{ $recommended_plans[0]->cnd }}</td>
                <td>{{ $recommended_plans[1]->cnd }}</td>
                <td>{{ $recommended_plans[2]->cnd }}</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Special Benefit (additional limit on top of Overall Annual)</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Accidental Death</th>
                <td>{{ $recommended_plans[0]->accidental_death }}</td>
                <td>{{ $recommended_plans[1]->accidental_death }}</td>
                <td>{{ $recommended_plans[2]->accidental_death }}</td>
            </tr>
            <tr>
                <th scope="row" class="scope">International Emergency Evacuation</th>
                <td>{{ $recommended_plans[0]->iee }}</td>
                <td>{{ $recommended_plans[1]->iee }}</td>
                <td>{{ $recommended_plans[2]->iee }}</td>
            </tr>
        </tbody>
    </table>

    <div id="suggestedCandidatesIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators mb-0">
            <li data-bs-target="#suggestedCandidatesIndicators" data-bs-slide-to="0" class="active bg-blue"></li>
            <li data-bs-target="#suggestedCandidatesIndicators" data-bs-slide-to="1" class="bg-blue"></li>
            <li data-bs-target="#suggestedCandidatesIndicators" data-bs-slide-to="2" class="bg-blue"></li>
            <li data-bs-target="#suggestedCandidatesIndicators" data-bs-slide-to="3" class="bg-blue"></li>
        </ol>
        <div class="carousel-inner mt-5">
            <div class="carousel-item active">
                <div class="row d-flex justify-content-center">
                    @include('results_carousel', ['chunk_plans' =>
                    $plans[0]])
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    <div class="row d-flex justify-content-center">
                        @include('results_carousel', ['chunk_plans' =>
                        $plans[1]])
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    @include('results_carousel', ['chunk_plans' =>
                    $plans[2]])
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    @include('results_carousel', ['chunk_plans' =>
                    $plans[3]])
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#suggestedCandidatesIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon text-orange" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#suggestedCandidatesIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon text-orange" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Rank #</th>
                <th scope="col">Plan ID</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recommended_plans as $plan)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $plan->id }}</td>
                    <td>{{ $plan->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
