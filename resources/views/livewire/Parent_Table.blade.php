<button class="btn btn-success btn-sm btn-lg pull-left" wire:click="showformadd" type="button">Ajouter les Parents</button><br><br>
<div class="card card-statistics h-100">
    <div class="card-body">
        <div class="accordion gray plus-icon round">



            <div class="acd-group">
                <a href="#" class="acd-heading">Les Pères </a>
                <div class="acd-des">

                    <div class="row">
                        <div class="col-xl-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="d-block d-md-flex justify-content-between">
                                        <div class="d-block">
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-15">
                                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                               style="text-align: center">
                                            <thead>
                                            <tr class="table-success">
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Nom du pere </th>
                                                <th>C.I.N</th>
                                                <th>Passport</th>
                                                <th>Tel-Père</th>
                                                <th>Fonction-Père</th>
                                                <th>Processes</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 0; ?>
                                            @foreach ($my_parents as $my_parent)
                                                <tr>
                                                    <?php $i++; ?>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $my_parent->Email }}</td>
                                                    <td>{{ $my_parent->Name_Father }}</td>
                                                    <td>{{ $my_parent->National_ID_Father }}</td>
                                                    <td>{{ $my_parent->Passport_ID_Father }}</td>
                                                    <td>{{ $my_parent->Phone_Father }}</td>
                                                    <td>{{ $my_parent->Job_Father }}</td>
                                                    <td>
                                                        <button wire:click="edit({{ $my_parent->id }})" title="{{ trans('Grades_trans.Edit') }}"
                                                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $my_parent->id }})" title="Supprimer"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="acd-group">
                    <a href="#" class="acd-heading">Les Mères</a>
                    <div class="acd-des">

                        <div class="row">
                            <div class="col-xl-12 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="d-block d-md-flex justify-content-between">
                                            <div class="d-block">
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-15">
                                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                                   style="text-align: center">
                                                <thead>
                                                <tr class="table-success">
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th>Nom du pere </th>
                                                    <th>C.I.N</th>
                                                    <th>Passport</th>
                                                    <th>Tel-Père</th>
                                                    <th>Fonction-Père</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i = 0; ?>
                                                @foreach ($my_parents as $my_parent)
                                                    <tr>
                                                        <?php $i++; ?>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $my_parent->Email }}</td>
                                                        <td>{{ $my_parent->Name_Mother }}</td>
                                                        <td>{{ $my_parent->National_ID_Mother }}</td>
                                                        <td>{{ $my_parent->Passport_ID_Mother }}</td>
                                                        <td>{{ $my_parent->Phone_Mother }}</td>
                                                        <td>{{ $my_parent->Job_Mother }}</td>

                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
