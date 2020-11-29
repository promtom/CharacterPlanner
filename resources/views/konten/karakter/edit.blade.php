@extends('layouts.main')

@section('title', 'Character')
@section('animeted', 'bounce')
@section('subtitle', 'Add Character')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Add Character</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('characters.index')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('characters.update', $karakter->id)}}" method="POST"> 
                                @method('patch') @csrf
                                <div class="col mb-3">
                                    <div class="row-sm-3">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <input type="text" value="{{$karakter->name}}" class="form-control" name="name" id="name" placeholder="Type here" required>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="row-sm-3">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <input type="text" value="{{$karakter->title}}" class="form-control" name="title" id="title" placeholder="Type here" required>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="row-sm-3">
                                        <label for="title">Class</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <select class="form-control" name="id_kelas" id="id_kelas">
                                            <option disabled selected>Chosse Class</option>
                                            @foreach ($kelas as $item)
                                                <option value="{{$item->id}}">{{$item->name_kelas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="row-sm-2">
                                        <label for="ket">Power</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <textarea class="form-control" name="power" id="power" placeholder="Type here" required>{{$karakter->power}}</textarea>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="row-sm-2">
                                        <label for="ket">Description</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <textarea class="form-control" name="ket" id="ket" placeholder="Type here" required>{{$karakter->ket}}</textarea>
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
                        
                        