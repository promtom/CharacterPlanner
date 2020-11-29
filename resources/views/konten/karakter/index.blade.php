@extends('layouts.main')

@section('title', 'Character')
@section('animeted', 'bounce')
@section('subtitle', 'Characters List')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Characters List</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('characters.create')}}" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus"></i> add characters
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Class</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(@$karakter && $karakter->count())
                                        @foreach ($karakter as $item)
                                        <tr>
                                            <td  width="8%">{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->title}}</td>
                                            {{-- <td>{{$item->id_kelas}}</td> --}}
                                            <td>{{$item->kelas['name_kelas']}}</td>
                                            <td width="17%">
                                                <div class="pull-right">
                                                    <a href="{{route('characters.show', $item->id)}}" title="detail" class="btn btn-outline-dark btn-sm">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
                                                    <a href="{{route('characters.edit', $item->id)}}" title="edit" class="btn btn-outline-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{route('characters.destroy', $item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Really want delete?')";>
                                                        @method('delete') @csrf
                                                        <button title= "delete" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    {{-- <a href="" >
                                                        
                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Dont have any data</td>
                                            </tr>
                                        @endif
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
                        
                        