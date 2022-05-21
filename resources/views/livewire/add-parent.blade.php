<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif


        @if($show_table)
            @include('livewire.Parent_Table')
        @else
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                   class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                <p>Etape 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                   class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                <p>Etape 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                   class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                   disabled="disabled">3</a>
                <p>Etape 3</p>
            </div>
        </div>
    </div>U


    @include('livewire.Father_Form')

    @include('livewire.Mother_Form')


    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        @if ($currentStep != 3)
            <div style="display: none" class="row setup-content" id="step-3">
                @endif
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="container" style="padding: 250px">

                            <h3 style="font-family: 'Cairo', sans-serif" >Voulez-vous Enregistrer les informations Tapées  ? </h3><br>
                            <div class="form-group">

                        <button class="btn btn-danger btn-block btn-warning" type="button"
                                wire:click="back(2)" class="form-control" >Back</button>
                                @if($updateMode)
                                    <button  class="btn btn-primary  btn-block btn-success " wire:click="submitForm_edit"
                                            type="button">Terminer
                                    </button>
                                @else
                                    <button  class="btn btn-primary  btn-block btn-success " wire:click="submitForm"
                                            type="button">Terminer</button>
                                @endif

                    </div>
                        </div>
                        </div>

                </div>
            </div>
    </div>
            @endif
</div>
