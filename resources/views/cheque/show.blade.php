@extends('layouts.layout')

@section('title', 'Details for cheque' )

@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-3">
      <strong>Type: </strong> <br>
      <div style="margin-top:5%"></div>
      <strong>Bank Name: </strong> <br>
      <div style="margin-top:5%"></div>
      <strong>Pay to: </strong> <br>
      <div style="margin-top:5%"></div>
      <strong>Amount (Number): </strong> <br>
      <div style="margin-top:5%"></div>
      <strong>Amount (Words):</strong>
    </div>
    <div class="col-md-6">
      {{$cheque->type == 0 ? 'A/C' : 'CASH'}} <br>
      <div style="margin-top:2%"></div>
      {{$cheque->bank->name}} <br>
      <div style="margin-top:2%"></div>

      {{strToUpper($cheque->pay_to)}} <br>
      <div style="margin-top:2%"></div>

      {{$cheque->amount}} <br>
      <div style="margin-top:2%"></div>
      {{strToUpper(Helper::convertCurrency($cheque->amount))}} <br>
    </div>
    <div class="col-md-3">
      <strong>Date: </strong>{{$cheque->date}}
    </div>
    <div class="col-md-3" style="margin-top:8%; padding-left:6%">
      <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i>Print</button>
    </div>
  </div>

</div>
@endsection
