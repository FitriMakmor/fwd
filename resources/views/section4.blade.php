<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{-- {{ __('Dashboard') }} --}}
            Which Insurance Suits You Best?
        </h2>
    </x-slot>
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <div class="form-group my-2 d-flex justify-content-center">
                <h2 style="font-size: 26px;">Do you display any of the symptoms specified for each of these groups?</h2>
            </div>
            <div class="d-flex justify-content-center" style="font-size: 1.5rem;">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Group 1</div>
                    <div class="card-body">
                        <h5 class="card-title">Disease of The Brain</h5>
                        <p class="card-text">Nervous Breakdown, Fits, Anxiety, Mental/Nervous Disorder</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Group 2</div>
                    <div class="card-body">
                        <h5 class="card-title">Lung Trouble</h5>
                        <p class="card-text">Asthma, Spitting of Blood, Tuberculosis, Bronchitis, Pneumonia</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Group 3</div>
                    <div class="card-body">
                        <h5 class="card-title">Heart Trouble</h5>
                        <p class="card-text">Stroke, Rheumatic Fever, Chest Pain, Shortness of Breath, Heart Valve
                            Disorder</p>
                    </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Group 4</div>
                    <div class="card-body">
                        <h5 class="card-title">Gynaecology Trouble</h5>
                        <p class="card-text">Fibroid, Endometriosis, Prostate Disorder, Breast Lump, Menstrual
                            Disorders</p>
                    </div>
                </div>
                <div class="card text-white bg-orange-fr mb-3" style="max-width: 18rem;">
                    <div class="card-header">Group 5</div>
                    <div class="card-body">
                        <h5 class="card-title">Enlarged Glands Trouble</h5>
                        <p class="card-text">Carcinoma, Cancer, Tumor, Lump, Leukemia, Lymphoma, HIV/AIDS, Disorder
                            of Immune System or Blood</p>
                    </div>
                </div>
            </div>
            <form id="s4Form" class="d-flex justify-content-between px-3" style="font-size: 1.5rem;" action="{{ route('update-s4', $user->id) }}" method="POST">
                @csrf
                @method("PUT")

                <input type='hidden' value='0' name='hasDisease1'>
                <input type='hidden' value='0' name='hasDisease2'>
                <input type='hidden' value='0' name='hasDisease3'>
                <input type='hidden' value='0' name='hasDisease4'>
                <input type='hidden' value='0' name='hasDisease5'>

                <input type="checkbox" class="btn-check" id="btn-check-outlined-g1" autocomplete="off"
                    name="hasDisease1" value="1">
                <label onclick="changeG1()" class="btn btn-outline-primary" for="btn-check-outlined-g1" id="label-g1"
                    style="width: 286px;">No</label>
                <input type="checkbox" class="btn-check" id="btn-check-outlined-g2" autocomplete="off"
                    name="hasDisease2" value="1">
                <label onclick="changeG2()" class="btn btn-outline-secondary" for="btn-check-outlined-g2" id="label-g2"
                    style="width: 286px;">No</label>
                <input type="checkbox" class="btn-check" id="btn-check-outlined-g3" autocomplete="off"
                    name="hasDisease3" value="1">
                <label onclick="changeG3()" class="btn btn-outline-success" for="btn-check-outlined-g3" id="label-g3"
                    style="width: 286px;">No</label>
                <input type="checkbox" class="btn-check" id="btn-check-outlined-g4" autocomplete="off"
                    name="hasDisease4" value="1">
                <label onclick="changeG4()" class="btn btn-outline-danger" for="btn-check-outlined-g4" id="label-g4"
                    style="width: 286px;">No</label>
                <input type="checkbox" class="btn-check" id="btn-check-outlined-g5" autocomplete="off"
                    name="hasDisease5" value="1">
                <label onclick="changeG5()" class="btn btn-outline-warning" for="btn-check-outlined-g5" id="label-g5"
                    style="width: 286px;">No</label>
            </form>

            <div class="mt-4 form-group d-flex justify-content-end align-items-center">
                <div class="form-group d-flex justify-content-end align-items-center">
                    <button type="submit" form="s4Form" class="btn btn-lg btn-success">Next</a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
