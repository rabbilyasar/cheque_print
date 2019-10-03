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

    $('#amount').change(function() {
        var amount = document.getElementById('amount').value;

        document.getElementById('amount1').value = inWords(amount);
        document.getElementById('amount2').value = amount;
    })



    function inWords(num) {
        if ((num = num.toString()).length > 9) return 'overflow';
        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
        if (!n) return; var str = '';
        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Taka only ' : '';
        return str.toUpperCase();
    }

    function formatThousands(n, dp) {
        var s = '' + (Math.floor(n)), d = n % 1, i = s.length, r = '';
        while ((i -= 3) > 0) { r = ',' + s.substr(i, 3) + r; }
        return s.substr(0, i + 3) + r + (d ? '.' + Math.round(d * Math.pow(10, dp || 2)) : '');
    }


});


