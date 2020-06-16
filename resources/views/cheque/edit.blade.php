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
                    <option value="{{$bank->id}}" {{$cheque->bank->id == $bank->id ? 'selected' : ''}}>{{$bank->name}}
                    </option>
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
                <input type="text" class="form-control" name="amount" value="{{$cheque->amount}}" id="amountNum">
                <div style="color:red">{{$errors->first('amount')}}</div>

            </div>
            <div class="form-group">
                <label>Amount (words)</label>
                <input type="text" class="form-control" placeholder="Amount in words" id="amount1"
                    value="{{strToUpper(Helper::convertCurrency($cheque->amount))}}" readonly>
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
            <button type="submit" class="btn btn-primary" style="margin-top:2%">Save</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $( function() {
        $( "#simple" ).datepicker({
            dateFormat: 'dd/mm/yy',
            todayHighlight: true,
            orientation: 'bottom right',
            autoclose: true,
            container: '#sandbox'
        });
    } );
    function inWords(value) {
                var fraction = Math.round(frac(value) * 100);
                var f_text = "";

                if (fraction > 0) {
                    f_text = "AND " + convert_number(fraction) + " PAISA";
                }

                return convert_number(value) + " TAKA " + f_text + " ONLY";
            }

            function frac(f) {
                return f % 1;
            }

            function convert_number(number) {
                if ((number < 0) || (number > 999999999)) {
                    return "NUMBER OUT OF RANGE!";
                }
                var Gn = Math.floor(number / 10000000);  /* Crore */
                number -= Gn * 10000000;
                var kn = Math.floor(number / 100000);     /* lakhs */
                number -= kn * 100000;
                var Hn = Math.floor(number / 1000);      /* thousand */
                number -= Hn * 1000;
                var Dn = Math.floor(number / 100);       /* Tens (deca) */
                number = number % 100;               /* Ones */
                var tn = Math.floor(number / 10);
                var one = Math.floor(number % 10);
                var res = "";

                if (Gn > 0) {
                    res += (convert_number(Gn) + " CRORE");
                }
                if (kn > 0) {
                    res += (((res == "") ? "" : " ") +
                        convert_number(kn) + " LAKH");
                }
                if (Hn > 0) {
                    res += (((res == "") ? "" : " ") +
                        convert_number(Hn) + " THOUSAND");
                }

                if (Dn) {
                    res += (((res == "") ? "" : " ") +
                        convert_number(Dn) + " HUNDRED");
                }


                var ones = Array("", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN", "TWELVE", "THIRTEEN", "FOURTEEN", "FIFTEEN", "SIXTEEN", "SEVENTEEN", "EIGHTEEN", "NINETEEN");
                var tens = Array("", "", "TWENTY", "THIRTY", "FOURTY", "FIFTY", "SIXTY", "SEVENTY", "EIGHTY", "NINETY");

                if (tn > 0 || one > 0) {
                    if (!(res == "")) {
                        res += " AND ";
                    }
                    if (tn < 2) {
                        res += ones[tn * 10 + one];
                    }
                    else {

                        res += tens[tn];
                        if (one > 0) {
                            res += ("-" + ones[one]);
                        }
                    }
                }

                if (res == "") {
                    res = "zero";
                }
                return res;
            }

        $('#amountNum').change(function() {
        var amount = document.getElementById('amountNum').value;

        document.getElementById('amount1').value = inWords(amount);

        })
</script>
@endsection
