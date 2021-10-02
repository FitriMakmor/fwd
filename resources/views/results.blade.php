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
                <th scope="col" class="border-none"></th>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">John Doembardo</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">John Doembardo</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">John Doembardo</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="jobseeker-single">
                            <div class="d-flex justify-content-center">
                                {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}" --}}
                                <a href=""
                                    class="image-container d-flex flex-row justify-content-center align-items-center pt-3">
                                    <div class="image-slot border mx-auto">
                                        {{-- @if ($jobseeker->profile_photo->file_path)
                                            <img src="{{ asset('storage/profile_photos/' . $jobseeker->profile_photo->file_path) }}"
                                                alt="Profile photo" class="profile_photo">
                                        @else
                                            <img src="{{ asset('img/team/default-user.jpg') }}" alt="No profile photo provided">
                                        @endif --}}
                                    </div>
                                </a>
                            </div>
                            <div class="name-container text-center">
                                <a href="">
                                    {{-- <a href="{{ route('jobseeker-profile.show', $jobseeker->id) }}"> --}}
                                    {{-- <h5 class="text-white mb-0">{{ $jobseeker->full_name }}</h5> --}}
                                    <h5 class="text-white mb-0">Roberto Carlos</h5>
                                </a>
                            </div>
                            {{-- <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal{{ $jobseeker->id }}"> --}}
                            <div data-toggle="modal" data-bs-target="#viewJobseekerInformationModal">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Residence
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->contact_info->city)
                                                        {{ $jobseeker->contact_info->city->name }},
                                                    @endif
                                                    @if ($jobseeker->contact_info->state)
                                                        {{ $jobseeker->contact_info->state->name }}
                                                    @endif
                                                    @if (!$jobseeker->contact_info->city && !$jobseeker->contact_info->state)
                                                        -
                                                    @endif --}}
                                                    Petaling Jaya, Selangor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Employment
                                            </div>
                                            <div class="px-2 pb-1">
                                                +2
                                                {{-- <span>
                                                    @if ($jobseeker->pref_employment)
                                                        {{ $jobseeker->pref_employment->employment_type->name }}
                                                        @if ($jobseeker->pref_employment_more_count)
                                                            (+{{ $jobseeker->pref_employment_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Preferred Location
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->pref_location)
                                                        {{ $jobseeker->pref_location->city->name }},
                                                        {{ $jobseeker->pref_location->state->name }}
                                                        @if ($jobseeker->pref_location_more_count)
                                                            (+{{ $jobseeker->pref_location_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Alor Setar, Kedah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container">
                                            <div class="subdetail-header text-center">
                                                Date of Birth
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->date_of_birth)
                                                        {{ $jobseeker->date_of_birth }}
                                                    @else
                                                        -
                                                    @endif --}}
                                                    21st Oct 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <div class="subdetail-container subdetail-bl">
                                            <div class="subdetail-header text-center">
                                                Years of Experience
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- {{ round($jobseeker->years_of_experience, 1) }} Years --}}
                                                    5 Years
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <div class="subdetail-container subdetail-br">
                                            <div class="subdetail-header text-center">
                                                Education Level
                                            </div>
                                            <div class="px-2 pb-1">
                                                <span>
                                                    {{-- @if ($jobseeker->education_level)
                                                        {{ $jobseeker->education_level->name }}
                                                        @if ($jobseeker->education_level_more_count)
                                                            (+{{ $jobseeker->education_level_more_count }})
                                                        @endif
                                                    @else
                                                        -
                                                    @endif --}}
                                                    Bachelor's Degree
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
