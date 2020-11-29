@extends('layouts.main')

@section('title', 'Class')
@section('animeted', 'swing')
@section('subtitle', 'Show Class')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Show Class</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('class')}}" class="btn btn-secondary btn-sm">
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
                                            <td>{{$kelas->name_kelas}}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Description</td>
                                            <td>{{$kelas->ket_kelas}}</td>
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
                        
                        