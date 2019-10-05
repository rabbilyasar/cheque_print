@extends('layouts.layout')

@section('title', 'Cheque List')

@section('content')

<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px">
        <h3>LIST OF RECORDS</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>Pay To</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Type</th>
                {{-- <th>For</th> --}}
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @forelse ($cheques as $cheque)
                <td><a href="{{route('cheque.show', $cheque->id)}}">{{strToUpper($cheque->bank->name)}}</a></td>
                <td>{{$cheque->pay_to}}</td>
                <td>{{$cheque->amount}}</td>
                {{-- <td>{{Helper::convertCurrency($cheque->amount)}}</td> --}}
                <td>{{$cheque->date}}</td>
                <td>{{$cheque->type == 0 ? 'A/C' : 'Cash'}}</td>
                {{-- <td> {{$cheque->for}}</td> --}}
                <td>{{$cheque->created_at->diffForHumans()}}</td>
                <td style="display:flex">
                    <a href="{{route('cheque.edit', $cheque->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{route('cheque.destroy', $cheque->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Item will be deleted permanently. YOU SURE?')">Delete</button>
                    </form>
                </td>

                @empty
            <tr class="text-center text-danger">
                <td colspan="10" style="padding-top: 20px"><h4>There is no data available at the moment</h4></td>
            </tr>
            @endforelse
            </tr>
        </tbody>
    </table>
</div>

@endsection
