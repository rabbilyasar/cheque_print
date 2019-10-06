@extends('layouts.layout')

@section('title', 'Details for cheque' )

@section('content')
<div class="row">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px">
            <h3>CHEQUE DETAILS</h3>
        </div>
        <hr>
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
            <a href="{{route('print.cheque', $cheque->id)}}">print</a>
            {{-- <button type="submit" class="btn btn-primary" onclick="printJS('prinJs', 'html')"><i
                    class="fas fa-print"></i>Print</button> --}}
        </div>

    </div>
</div>
<hr>
<div class="print-format">
        <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px; margin">
                <h3>PRINT FORMAT</h3>
            </div>
    <form action="#" id="print-form">
        <div>{{strToUpper($cheque->pay_to)}}</div>
        <div>{{$cheque->amount}}</div>
        <div>{{strToUpper(Helper::convertCurrency($cheque->amount))}}</div>
        <div>{{$cheque->date}}</div>
    </form>
    <button type="submit" onclick="printJS('print-form', 'html')">Print</button>

</div>
        <div class="chque-container" style="margin: 960px 336px; background: blue">
            <div class="token1" style="margin: 0px 336px; background: green">
                <div class="date" style="margin: 96px">date</div>
                <div class="to">to</div>
                <div class="for">for</div>
            </div>
            <div class="token2" style="">
                <div class="pay-to"></div>
                <div class="amount-word"></div>
                <div class="amount-number"></div>
                <div class="date"></div>
            </div>
        </div>
@endsection
