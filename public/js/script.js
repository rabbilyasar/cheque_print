$(document).ready(function () {

    var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
    var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    var optSimple = {
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        orientation: 'bottom right',
        autoclose: true,
        container: '#sandbox'
    };

    $('#simple').datepicker(optSimple);
    $('#datepicker1, #datepicker2, #simple, #datePicker, #date').datepicker('setDate', today);

    var temp = $('#simple').val();
    $('#date1').val(temp);
    $('#date2').val(temp);

    $('#simple').change(function () {
        var date = document.getElementById('simple').value;
        document.getElementById('date1').value = date;
        document.getElementById('date2').value = date;
    });

    $('#payTo').change(function () {
        var payTo = document.getElementById("payTo").value;

        document.getElementById('payTo1').value = payTo;
        document.getElementById('payTo2').value = payTo;
    });

    $('#amount').change(function () {
        var amount = document.getElementById('amount').value;

        document.getElementById('amount1').value = inWords(amount);
        document.getElementById('amount2').value = amount;
    })



    // function inWords(price) {
    //     // if ((num = num.toString()).length > 9) return 'overflow';
    //     // n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    //     // if (!n) return; var str = '';
    //     // str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
    //     // str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
    //     // str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
    //     // str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    //     // str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Taka only ' : '';
    //     // return str.toUpperCase();
    //     ///////ANOTHER//////
    //     // var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
    //     //     dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
    //     //     tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
    //     //     handle_tens = function (dgt, prevDgt) {
    //     //         return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
    //     //     },
    //     //     handle_utlc = function (dgt, nxtDgt, denom) {
    //     //         return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
    //     //     };

    //     // var str = "",
    //     //     digitIdx = 0,
    //     //     digit = 0,
    //     //     nxtDigit = 0,
    //     //     words = [];
    //     // if (price += "", isNaN(parseInt(price))) str = "";
    //     // else if (parseInt(price) > 0 && price.length <= 10) {
    //     //     for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
    //     //         case 0:
    //     //             words.push(handle_utlc(digit, nxtDigit, ""));
    //     //             break;
    //     //         case 1:
    //     //             words.push(handle_tens(digit, price[digitIdx + 1]));
    //     //             break;
    //     //         case 2:
    //     //             words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
    //     //             break;
    //     //         case 3:
    //     //             words.push(handle_utlc(digit, nxtDigit, "Thousand"));
    //     //             break;
    //     //         case 4:
    //     //             words.push(handle_tens(digit, price[digitIdx + 1]));
    //     //             break;
    //     //         case 5:
    //     //             words.push(handle_utlc(digit, nxtDigit, "Lakh"));
    //     //             break;
    //     //         case 6:
    //     //             words.push(handle_tens(digit, price[digitIdx + 1]));
    //     //             break;
    //     //         case 7:
    //     //             words.push(handle_utlc(digit, nxtDigit, "Crore"));
    //     //             break;
    //     //         case 8:
    //     //             words.push(handle_tens(digit, price[digitIdx + 1]));
    //     //             break;
    //     //         case 9:
    //     //             words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
    //     //     }
    //     //     str = words.reverse().join("")
    //     // } else str = "";
    //     // return str.toUpperCase()

    // }



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

});


