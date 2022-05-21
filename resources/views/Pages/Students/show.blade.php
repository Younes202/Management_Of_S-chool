@extends('layouts.master')
@section('css')

@section('title')
Les détails D'étudiants
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Les détails D'étudiants
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true">Les détails d'étudiant</a>
                                </li>
                        {{--        <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">Document</a>
                                </li>
                                --}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                     aria-labelledby="home-02-tab">
                                    <table class="table table-striped table-hover" style="text-align:center">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Nom</th>
                                            <td>{{ $Student->name }}</td>
                                            <th scope="row">E-mail</th>
                                            <td>{{$Student->email}}</td>
                                            <th scope="row">Sex</th>
                                            <td>{{$Student->gender->Name}}</td>
                                            <th scope="row">Nationalité</th>
                                            <td>{{$Student->Nationality->Name}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Cycles</th>
                                            <td>{{ $Student->grade->Name }}</td>
                                            <th scope="row">Niveaux</th>
                                            <td>{{$Student->classroom->Name_Class}}</td>
                                            <th scope="row">Classes</th>
                                            <td>{{$Student->section->Name_Section}}</td>
                                            <th scope="row">Date de Naissance </th>
                                            <td>{{ $Student->Date_Birth}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Parents</th>
                                            <td>{{ $Student->myparent->Name_Father}}</td>
                                            <th scope="row">Date d'inscription</th>
                                            <td>{{ $Student->academic_year }}</td>
                                            <th scope="row"></th>
                                            <td></td>
                                            <th scope="row"></th>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

             {{--                   <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                     aria-labelledby="profile-02-tab">
                                    <div class="card card-statistics">
                                        <div class="card-body">
                                            <form method="post" action="{{route('Upload_attachment')}}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label
                                                            for="academic_year">Document
                                                            : <span class="text-danger">*</span></label>
                                                        <input type="file" accept="image/*" name="photos[]" multiple required>
                                                        <input type="hidden" name="student_name" value="{{$Student->name}}">
                                                        <input type="hidden" name="student_id" value="{{$Student->id}}">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <button type="submit" class="button button-border x-small">
                                                Ok                                                </button>
                                            </form>
                                        </div>
                                        <br>

                                    </div>
                                </div>
                                --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- row closed -->
            @endsection
            @section('js')

@endsection
