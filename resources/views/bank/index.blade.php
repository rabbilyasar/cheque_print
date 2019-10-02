@extends('layouts.layout')

@section('title', 'Bank List')

@section('content')

<div class="container">
        <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px"><h3>LIST OF RECORDS</h3></div>

    <ul class="list-group">
        @forelse ($banks as $bank)
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-7">
                    <h4>{{strToUpper($bank->name)}}</h4>
                </div>
                <div class="col-md-2"><span class="badge badge-secondary"
                    style="padding:8px">{{$bank->status == 0 ? 'Universal Format' : 'I/B Format'}}</span></div>
                <div class="col-md-3" style="display:flex">
                    <a href="{{route('bank.edit', $bank->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{route('bank.destroy', $bank->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Item will be deleted permanently. YOU SURE?')">Delete</button>
                    </form>
                </div>
            </div>
        </li>
        @empty
        <div style="margin-left:25%">
            <h2>There is no data available at the moment</h2>
        </div>
        @endforelse
    </ul>



</div>

@endsection
