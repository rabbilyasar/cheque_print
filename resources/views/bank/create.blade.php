@extends('layouts.layout')

@section('title', 'Bank')

@section('content')
<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px"><h3>FILL UP THE DETAILS</h3></div>
    <form action="{{route('bank.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Bank Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bank name" name="name">

            <div style="color:red">{{$errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Format</label>
            <select class="form-control" name="status">
                <option value="0">Universal Format</option>
                <option value="1">I/B Format</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
