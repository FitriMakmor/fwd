<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{-- {{ __('Dashboard') }} --}}
            Which Insurance Suits You Best?
        </h2>
    </x-slot>
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
    </div>
    <div class="card my-4">
        <div class="card-body d-flex justify-content-center">

            <h4>
                <form style="font-size: 1.5rem;" action="{{ route('update-s2', $user->id) }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="mb-2">
                        <input type='hidden' value='0' name='is_citizen'>
                        <label for="is_citizen" class="btn bg-blue w-100 d-flex justify-content-between"
                            style="font-size: 24px;">I am a Malaysian citizen<input type="checkbox" id="is_citizen"
                                name="is_citizen" class="badgebox" value="1"><span
                                class="badge">&check;</span></label>
                    </div>
                    <div class="mb-2">
                        <input type='hidden' value='0' name='is_married'>
                        <label for="is_married" class="btn bg-blue w-100 d-flex justify-content-between"
                            style="font-size: 24px;">I am Married
                            <input type="checkbox" id="is_married" name="is_married" class="badgebox"
                                value="1"><span class="badge">&check;</span></label>
                    </div>
                    <div class="mb-3">
                        <input type='hidden' value='0' name='prefer_flexible'>
                        <label for="prefer_flexible" class="btn bg-blue w-100 d-flex justify-content-between"
                            style="font-size: 24px;">I prefer a Fixed Insurance Plan
                            <input type="checkbox" id="prefer_flexible" name="prefer_flexible" class="badgebox"
                                value="1"><span class="badge">&check;</span></label>
                    </div>

                    <div class="form-group d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-lg btn-success">Next</a>
                    </div>
                </form>
            </h4>
        </div>
    </div>
</x-app-layout>
