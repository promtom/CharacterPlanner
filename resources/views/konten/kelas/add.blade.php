@extends('layouts.main')

@section('title', 'Class')
@section('animeted', 'swing')
@section('subtitle', 'Add Class')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Add Class</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('class')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{url('class')}}" method="POST">
                                @csrf
                                <div class="col mb-3">
                                    <div class="row-sm-3">
                                        <label for="name_kelas">Name Class</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <input type="text" class="form-control" name="name_kelas" id="name_kelas" placeholder="Type here" required>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="row-sm-2">
                                        <label for="ket_kelas">description</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <textarea class="form-control" name="ket_kelas" id="ket_kelas" placeholder="Type here" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                        
                        