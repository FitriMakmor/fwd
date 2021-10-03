<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{-- {{ __('Dashboard') }} --}}
            Which Insurance Suits You Best?
        </h2>
    </x-slot>
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
    </div>
    <div class="card my-4">
        <div class="card-body d-flex justify-content-center">

            <h4>
                <form style="font-size: 1.5rem;" action="{{ route('update-s1', $user->id) }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="form-group mt-3">
                        <label for="title">What is your gender?</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="btn-check btn-gender" name="gender" id="male" autocomplete="off"
                            value="Male">
                        <label class="btn btn-secondary w-50 mx-1" for="male">Male</label>
                        <input type="radio" class="btn-check btn-gender" name="gender" id="female" autocomplete="off"
                            value="Female">
                        <label class="btn btn-secondary w-50 mx-1" for="female">Female</label>
                    </div>

                    <div class="form-row mt-3 mb-4">
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control input" id="birthdate"
                                value="1990-01-01">
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
