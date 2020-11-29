@extends('layouts.main')

@section('title', 'Character')
@section('animeted', 'bounce')
@section('subtitle', 'Show Character')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Show Character</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('characters.index')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Name</td>
                                            <td>{{$karakter->name}}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Title</td>
                                            <td>{{$karakter->title}}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Class</td>
                                            <td>{{$karakter->kelas['name_kelas']}}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Power</td>
                                            <td>{{$karakter->power}}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Description</td>
                                            <td>{{$karakter->ket}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                        
                        