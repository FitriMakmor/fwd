@foreach ($chunk_plans as $plan)
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="jobseeker-single">
            <div class="d-flex justify-content-center">
                <div class="image-container"></div>
                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                {{-- <a href="" class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                    <div class="image-slot border mx-auto">
                        {
                    </div>
                </a> --}}
            </div>
            <div class="name-container text-center">
                <a href="">
                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                    <h5 class="text-white mb-0">{{ $plan['name']}}</h5>
                </a>
            </div>
            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                <div class="row">
                    <div class="col-6 pr-0">
                        <div class="subdetail-container">
                            <div class="subdetail-header text-center">
                                Annual Premium
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{$plan['annual_premium']}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="subdetail-container">
                            <div class="subdetail-header text-center">
                                Overall Annual Limit
                            </div>
                            <div class="px-2 pb-1">
                                {{$plan['overall_annual_limit']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pr-0">
                        <div class="subdetail-container">
                            <div class="subdetail-header text-center">
                                Room and Board
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                {{$plan['room_and_board']}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="subdetail-container">
                            <div class="subdetail-header text-center">
                                Room Category
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{$plan['room_category']}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pr-0">
                        <div class="subdetail-container subdetail-bl">
                            <div class="subdetail-header text-center">
                                Hospital Days
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{$plan['hospital_days']}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="subdetail-container subdetail-br">
                            <div class="subdetail-header text-center">
                                Diagnostics
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{ $plan['cnd'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pr-0">
                        <div class="subdetail-container subdetail-bl">
                            <div class="subdetail-header text-center">
                                Accidental Death
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{$plan['hospital_days']}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="subdetail-container subdetail-br">
                            <div class="subdetail-header text-center">
                                IEE
                            </div>
                            <div class="px-2 pb-1">
                                <span>
                                    {{ $plan['iee'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
