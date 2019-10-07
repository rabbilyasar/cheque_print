<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Print cheque</title>
        <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    </head>
    <style>
        div {
            position: absolute;
        }

        div#date1 {
            left: 67.590551181px;
            top: 256.81889764px;
        }

        div#payTo1 {
            left: 67.590551181px;
            top: 285.05511811px;
        }

        div#for {
            left: 67.590551181px;
            top: 320.29133858px;
        }

        div#payTo2 {
            left: 294.80314961px;
            top: 307.73228346px;
        }

        div#date2 {
            left: 745.34645669px;
            top: 259.5984252px;
        }

        div#amountWords {
            left: 367.39370079px;
            top: 341.7480315px;
        }

        div#amountNumber {
            left: 750.90551181px;
            top: 360.64566929px;
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
            <div id="payTo1">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="for">
                {{$cheque->for}}
            </div>
            <div id="date2">
                @php
                    $d = new Carbon\Carbon;
                    $d = Carbon\Carbon::parse($cheque->date);
                @endphp

                {{$d->year}}


            </div>
            <div id="payTo2">
                {{strToUpper($cheque->pay_to)}}

            </div>
            <div id="amountWords">
                {{strToUpper(Helper::convertCurrency($cheque->amount))}}

            </div>
            <div id="amountNumber">
                {{$cheque->amount}}
            </div>
        </form>
        <button type="submit" onclick="window.print()" id="printPageButton" style="margin-top:200px">Print</button>

        {{-- <script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script> --}}
        <script src="{{asset('js/print.js')}}"></script>
    </body>

</html>


