@extends('layouts.master')
@section('css')
@section('title')
Ajouter un prof
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Ajouter un prof
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Teachers.store')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">E-mail</label>
                                        <input type="email" name="Email" class="form-control">
                                        @error('Email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="title">Password</label>
                                        <input type="password" name="Password" class="form-control">
                                        @error('Password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Nom du prof </label>
                                        <input type="text" name="Name" class="form-control">
                                        @error('Name_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="inputCity">Specialization</label>
                                        <select class="custom-select my-1 mr-sm-2" name="Specialization_id">
                                            <option selected disabled>Choisir ...</option>
                                            @foreach($specializations as $specialization)
                                                <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
                                            @endforeach
                                        </select>
                                        @error('Specialization_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputState">Gender </label>
                                        <select class="custom-select my-1 mr-sm-2" name="Gender_id">
                                            <option selected disabled>Choisir...</option>
                                            @foreach($genders as $gender)
                                                <option value="{{$gender->id}}">{{$gender->Name}}</option>
                                            @endforeach
                                        </select>
                                        @error('Gender_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Date D'engagement </label>
                                        <div class='input-group date'>
                                            <input class="form-control" type="text"  id="datepicker-action" name="Joining_Date" data-date-format="yyyy-mm-dd"  required>
                                        </div>
                                        @error('Joining_Date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Addresse</label>
                                    <textarea class="form-control" name="Address"
                                              id="exampleFormControlTextarea1" rows="4"></textarea>
                                    @error('Address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
