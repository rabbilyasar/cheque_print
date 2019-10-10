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
            left: 220.590551181px;
            top: 256.81889764px;
        }

        div#payTo1 {
            left: 195.590551181px;
            top: 285.05511811px;
        }

        div#for {
            left: 207.590551181px;
            top: 320.29133858px;
        }

        div#payTo2 {
            left: 444.80314961px;
            top: 307.73228346px;
        }

        div#date2 {
            left: 865.34645669px;
            top: 259.5984252px;
        }

        div#amountWords {
            left: 380.39370079px;
            top: 341.7480315px;
        }

        div#amountNumber {
            left: 880.90551181px;
            top: 350.64566929px;
        }

        div.acPayee {
            top: 230px;
            left: 370px;
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
        {{-- {{$cheque}} --}}

        <form action="" method="post" id="print-form">
            <div id="date1">
                {{$cheque->date}}

            </div>
            <div id="payTo1" style="font-size: 12px; width:150px">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="for" style="font-size: 12px; width:150px">
                {{strToUpper($cheque->for)}}
            </div>

            @if ($cheque->type == 0)

            <div class="acPayee">
                AC PAYEE ONLY
            </div>

            @endif

            <div id="date2">
                @php
                $d = strval($cheque->date);
                $d = str_replace('/', '', $d);
                @endphp
                <div style="display:flex">
                    <div class="day1" style="margin-left:10px">{{$d[0]}}</div>
                    <div class="day2" style="margin-left:35px">{{$d[1]}}</div>
                    <div class="day3" style="margin-left:60px">{{$d[2]}}</div>
                    <div class="mon1" style="margin-left:80px">{{$d[3]}}</div>
                    <div class="mon2" style="margin-left:105px">{{$d[4]}}</div>
                    <div class="yr1" style="margin-left:130px">{{$d[5]}}</div>
                    <div class="yr2" style="margin-left:150px">{{$d[6]}}</div>
                    <div class="yr3" style="margin-left:175px">{{$d[7]}}</div>
                </div>
            </div>
            <div id="payTo2" style="font-size:13.5px">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="amountWords" style="width:440px; line-height: 30px; font-size: 13.5px">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{strToUpper(Helper::convertCurrency($cheque->amount). " only")}}

            </div>
            <div id="amountNumber">

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
    window.onload = function() {
        window.print();
    };
</script>
