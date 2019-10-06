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
            left: 96px;
            top: 72px;
        }

        div#payTo1 {
            left: 96px;
            top: 105.6px;
        }

        div#for {
            left: 96px;
            top: 124.8px;
        }

        div#payTo2 {
            left: 312px;
            top: 72px;
        }

        div#date2 {
            left: 748.8px;
            top: 72px;
        }

        div#amountWords {
            left: 384px;
            top: 153.6px;
        }

        div#amountNumber {
            left: 768.8px;
            top: 153.6px;
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
                {{$cheque->date}}

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
        <button type="submit" onclick="printJS(
            {printable: 'print-form', type: 'html', targetStyles: ['*']})">Print</button>

        <script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script>
    </body>

</html>
