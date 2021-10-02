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

    <table class="table">
        <thead class="">
            {{-- <thead class="header-orange"> --}}
            <tr>
                <th scope=" col"
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
                <td>PPO Platinum</td>
                <td>PPO Gold</td>
                <td>PPO Silver</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Medical Insurance Category</th>
                <td>Preferred Provider Organization</td>
                <td>Preferred Provider Organization</td>
                <td>Preferred Provider Organization</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Benefits</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Annual Premium</th>
                <td>RM1740</td>
                <td>RM1382</td>
                <td>RM1097</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Overall Annual Limit</th>
                <td>RM500,000</td>
                <td>RM200,000</td>
                <td>RM100,00</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">In-Patient & Daycare</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Room & Board</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Room Category</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row" class="scope">Total Number of Days</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Out-patient Treatment</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Consultation & Diagnostic Procedures</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th class="header-blue" colspan="4">Special Benefit (additional limit on top of Overall Annual)</th>
            </tr>
            <tr>
                <th scope="row" class="scope">Accidental Death</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row" class="scope">International Emergency Evacuation</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
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

</x-app-layout>
