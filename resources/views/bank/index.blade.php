@extends('layouts.layout')

@section('title', 'Bank List')

@section('content')

<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px">
        <h3>LIST OF RECORDS</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>Format</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($banks as $bank)
            <tr>
                <td>{{strToUpper($bank->name)}}</td>
                <td><span class="badge badge-secondary"
                        style="padding:8px">{{$bank->status == 0 ? 'Universal Format' : 'I/B Format'}}</span></td>
                <td>{{$bank->created_at->diffForHumans()}}</td>
                <td style="display:flex">
                    <a href="{{route('bank.edit', $bank->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{route('bank.destroy', $bank->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Item will be deleted permanently. YOU SURE?')">Delete</button>
                    </form>
                </td>

                @empty
                <tr class="text-center text-danger">
                    <td colspan="10" style="padding-top: 20px">
                        <h4>There is no data available at the moment</h4>
                    </td>
                </tr>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection