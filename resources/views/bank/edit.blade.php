@extends('layouts.layout')

@section('title', 'Edit Bank Details')

@section('content')
<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px"><h3>EDIT DETAILS</h3></div>
    <div class="container">
        <form action="{{route('bank.update', $bank->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Bank Name</label>
                <input type="text" class="form-control"
                name="name" value="{{$bank->name}}">
                <div style="color:red">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group">
                <label>Select Format</label>
                <select class="form-control" name="status">
                    <option value="0"  {{$bank->status == 0 ? 'selected' : ''}}>Universal Format</option>
                    <option value="1" {{$bank->status == 1 ? 'selected' : ''}} >I/B Format</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
