<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Print cheque</title>
        <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    </head>
    <style>
        div {
            position: absolute;
        }

        div#date1 {
            left: 195.590551181px;
            top: 400.81889764px;
            font-size: 10.5px;
            transform: rotate(-90deg)
        }

        div#payTo1 {
            left: 170.590551181px;
            top: 350.05511811px;
            font-size: 10px;
            width:150px;
            transform: rotate(-90deg)
        }

        div#amountNumber1 {
            left: 188.90551181px;
            top: 355.64566929px;
            transform: rotate(-90deg)
        }

        div#date2 {
            left: 300.590551181px;
            top: 400.81889764px;
            font-size: 10.5px;
            transform: rotate(-90deg)
        }

        div#amountNumber2 {
            left: 310.90551181px;
            top: 387.64566929px;
            font-size: 10.5px;
            transform: rotate(-90deg)
        }


        div#payTo2 {
            left: 474.80314961px;
            top: 330.73228346px;
        }

        div#date3 {
            left: 922.34645669px;
            top: 267.5984252px;
        }

        div#amountWords {
            left: 440.39370079px;
            top: 360.7480315px;
        }

        div#amountNumber3 {
            left: 940.90551181px;
            top: 370.64566929px;
        }

        div.acPayee {
            top: 250px;
            left: 380px;
            word-spacing: 8px;
            border-top: 3px solid red;
            border-bottom: 3px solid red;
            transform: rotate(-45deg);
            color: red;
        }


        @media print {
            #printPageButton {
                display: none;
            }
        }

    </style>

    <body>
        <form action="" method="post" id="print-form">
            <div id="date1" style="">
                {{$cheque->date}}

            </div>
            <div id="payTo1" style="">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="amountNumber1" style="font-size: 10.5px; width:150px">
                {{Helper::moneyFormat($cheque->amount).'/-'}}
            </div>

            <div id="date2">
                    {{$cheque->date}}

            </div>

            <div id="amountNumber2">
                    {{Helper::moneyFormat($cheque->amount).'/-'}}

            </div>

            @if ($cheque->type == 0)

            <div class="acPayee">
                AC PAYEE ONLY
            </div>
            @endif

            <div id="date3">
                @php
                $d = strval($cheque->date);
                $d = str_replace('/', '', $d);
                @endphp
                <div style="display:flex">
                    <div class="day1" style="">{{$d[0]}}</div>
                    <div class="day2" style="margin-left:25px">{{$d[1]}}</div>
                    <div class="day3" style="margin-left:50px">{{$d[2]}}</div>
                    <div class="mon1" style="margin-left:75px">{{$d[3]}}</div>
                    <div class="mon2" style="margin-left:100px">{{$d[4]}}</div>
                    <div class="yr1" style="margin-left:125px">{{$d[5]}}</div>
                    <div class="yr2" style="margin-left:150px">{{$d[6]}}</div>
                    <div class="yr3" style="margin-left:175px">{{$d[7]}}</div>
                </div>
            </div>
            <div id="payTo2" style="font-size:13.5px">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="amountWords" style="width:440px; line-height: 30px; font-size: 13.5px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{strToUpper(Helper::convertCurrency($cheque->amount). " only")}}

            </div>
            <div id="amountNumber3">

                {{Helper::moneyFormat($cheque->amount).'/-'}}

            </div>
        </form>


        <button type="submit" onclick="window.print()" id="printPageButton"
            style="margin-top:500px; margin-left:1000px;" class="btn btn-primary">Print</button>

        {{-- <script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script> --}}
        <script src="{{asset('js/print.js')}}"></script>
    </body>

</html>

<script>
    {{--  window.onload = function() {
        window.print();
    };  --}}
</script>
