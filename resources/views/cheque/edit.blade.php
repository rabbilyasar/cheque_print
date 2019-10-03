@extends('layouts.layout')

@section('title', 'Edit Cheque Details')

@section('content')
<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px">
        <h3>EDIT DETAILS</h3>
    </div>
    <div class="container">
        <form action="{{route('cheque.update', $cheque->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="type">Type </label>
                <select name="type" id="" class="form-control">
                    <option value="0" {{$cheque == '0' ? 'selected' : ''}}>A/C</option>
                    <option value="1" {{$cheque == '1' ? 'selected' : ''}}>cash</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type </label>
                <select name="bank_id" id="" class="form-control">
                    @foreach ($banks as $bank)
                    <option value="{{$bank->id}}" {{$cheque->bank->id == $bank->id ? 'selected' : ''}}>{{$bank->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Pay To</label>
                <input type="text" class="form-control" placeholder="Pay To" id="payTo" name="pay_to"
                    value="{{$cheque->pay_to}}">
                <div style="color:red">{{$errors->first('pay_to')}}</div>
            </div>
            <div class="form-group">
                <label>Amount (number)</label>
                <input type="text" class="form-control"  name="amount"
                    value="{{$cheque->amount}}">
                <div style="color:red">{{$errors->first('amount')}}</div>

            </div>
            <div id="sandbox" class="form-group">
                <label for="simple">Date</label>
                <input id="simple" type="text" class="form-control" value="{{$cheque->date}}" name="date">
                <div style="color:red">{{$errors->first('date')}}</div>

            </div>
            <div class="form-group">
                <label>For</label>
                <input type="text" class="form-control" placeholder="For (optional)" name="for"
                    value="{{$cheque->for}}">
                <div style="color:red">{{$errors->first('for')}}</div>

            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:2%">Edit</button>
        </form>
    </div>
</div>
@endsection
