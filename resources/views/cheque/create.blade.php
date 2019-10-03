@extends('layouts.layout')

@section('title', 'Create Cheque')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="display: flex; align-items: center; justify-content: center;">
                <h1>Token 1</h1>
            </div>
            <div class="token1">
                <form action="{{route('cheque.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="type">Select Type </label>
                        <select name="type" id="" class="form-control">
                            <option value="0">A/C</option>
                            <option value="1">cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bank Name</label>
                        <select class="form-control" name="bank_id">
                            @foreach ($banks as $bank)
                            <option value="{{$bank->id}}" id="bank_id" onChange="getBankId({{$bank->id}})">{{$bank->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pay To</label>
                        <input type="text" class="form-control" placeholder="Pay To" 
                            id="payTo" name="pay_to">
                    </div>
                    <div class="form-group">
                        <label>Amount (number)</label>
                        <input type="number" class="form-control" placeholder="Amount in number"
                         id="amount" name="amount">
                    </div>
                    <div class="form-group">
                        <label>Amount (words)</label>
                        <input type="text" class="form-control" placeholder="Amount in words" id="amount1" readonly>
                    </div>
                    <div id="sandbox" class="form-group">
                        <label for="simple">Date</label>
                        <input id="simple" type="text" class="form-control" value="" name="date">
                    </div>
                    <div class="form-group">
                        <label>For</label>
                        <input type="text" class="form-control" placeholder="For (optional)" name="for">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top:2%">Save Token</button>
                </form>
            </div>
        </div>
    </div>

    <hr style="margin: 5% 0">
    <div class="row">
        <div class="col-md-6" style="padding-top:2%">
            <div style="display: flex; align-items: center; justify-content: center;">
                <h1>Token 2</h1>
            </div>
            <div class="token2">
                <div class="form-group">
                    <label>date</label>
                    <input type="text" class="form-control" placeholder="Date" id="date1" readonly>
                </div>
                <div class="form-group">
                    <label>Pay To</label>
                    <input type="text" class="form-control" placeholder="Pay To" id="payTo1" readonly>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" class="form-control" placeholder="Amount" id="amount2" readonly>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-top:2%">
            <div style="display: flex; align-items: center; justify-content: center;">
                <h1>Token 3</h1>
            </div>

            <div class="token2">
                <div class="form-group">
                    <label>date</label>
                    <input type="text" class="form-control" placeholder="Date" id="date2" readonly>
                </div>
                <div class="form-group">
                    <label>Pay To</label>
                    <input type="text" class="form-control" placeholder="Pay To" id="payTo2" readonly>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')

<script src="{{asset('js/script.js')}}"></script>

@endsection
