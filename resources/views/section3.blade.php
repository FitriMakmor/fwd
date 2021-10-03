<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{-- {{ __('Dashboard') }} --}}
            Which Insurance Suits You Best?
        </h2>
    </x-slot>
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>
    <div class="card my-4">
        <div class="card-body d-flex justify-content-center">

            <h4>
                <form id="s3Form" style="font-size: 1.5rem;" action="{{ route('update-s3', $user->id) }}"
                    method="POST">
                    @csrf
                    @method("PUT")

                    <div class="filter-box my-3 pt-1">
                        <h5 class="text-center">Income Range</h5>
                        <div id="salary-slider" class="noUiSlider">
                        </div>
                        <div class="range-box d-flex justify-content-center align-items-center">
                            <div class="range-value d-flex justify-content-around align-items-center">
                                <span class="range-item" id="min_salary"></span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-box my-3 pt-1">
                        <h5 class="text-center px-4" style="word-wrap:break-word;">Over The Past Year, I Have Been
                            Admitted To The Hospital:</h5>
                        <div id="hospital-slider" class="noUiSlider">
                        </div>
                        <div class="range-box d-flex justify-content-center align-items-center">
                            <div class="range-value d-flex justify-content-around align-items-center">
                                <span class="range-item" id="hospital_text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-box my-3 pt-1">
                        <h5 class="text-center px-2" style="word-wrap:break-word;">Over The Past Year, I Have Travelled
                            Abroad:</h5>
                        <div id="travel-slider" class="noUiSlider">
                        </div>
                        <div class="range-box d-flex justify-content-center align-items-center">
                            <div class="range-value d-flex justify-content-around align-items-center">
                                <span class="range-item" id="travel_text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-lg btn-success">Next</a>
                    </div>
                </form>
            </h4>
        </div>
    </div>
</x-app-layout>
