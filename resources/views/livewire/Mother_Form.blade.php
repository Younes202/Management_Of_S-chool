@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="title">Nom Complet </label>
                        <input type="text" wire:model="Name_Mother" class="form-control">
                        @error('Name_Mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title">Fonction du Mère </label>
                        <input type="text" wire:model="Job_Mother" class="form-control">
                        @error('Job_Mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">


                    <div class="col">
                        <label for="title">Carte National</label>
                        <input type="text" wire:model="National_ID_Mother" class="form-control">
                        @error('National_ID_Mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title">Passport</label>
                        <input type="text" wire:model="Passport_ID_Mother" class="form-control">
                        @error('Passport_ID_Mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    <div class="form-row">
                    <div class="col">
                        <label for="title">Tél-Mère</label>
                        <input type="text" wire:model="Phone_Mother" class="form-control">
                        @error('Phone_Mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="inputCity">Nationalité</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="Nationality_Mother_id">
                            <option selected>Choisir...</option>
                            @foreach($Nationalities as $National)
                                <option value="{{$National->id}}">{{$National->Name}}</option>
                            @endforeach
                        </select>
                        @error('Nationality_Mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputState">Groupe sanguin </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="Blood_Type_Mother_id">
                            <option selected>Choisir...</option>
                            @foreach($Type_Bloods as $Type_Blood)
                                <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                            @endforeach
                        </select>
                        @error('Blood_Type_Mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="inputZip">Religion</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="Religion_Mother_id">
                            <option selected>Choisir...</option>
                            @foreach($Religions as $Religion)
                                <option value="{{$Religion->id}}">{{$Religion->Name}}</option>
                            @endforeach
                        </select>
                        @error('Religion_Mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Adresse de Mère </label>
                    <textarea class="form-control" wire:model="Address_Mother" id="exampleFormControlTextarea1"
                              rows="4"></textarea>
                    @error('Address_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                @if($updateMode)
                    <button class="btn btn-primary  btn-success pull-right" wire:click="secondStepSubmit_edit"
                            type="button">Next
                    </button>
                @else
                    <button class="btn btn-primary  btn-success pull-right" type="button"
                            wire:click="secondStepSubmit">Next</button>
                @endif
                <button class="btn btn-danger  btn-warning pull-right" type="button" wire:click="back(1)">
                Back
                </button>

            </div>
        </div>
    </div>
