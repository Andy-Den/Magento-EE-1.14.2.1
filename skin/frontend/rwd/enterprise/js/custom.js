var $ = jQuery;

$(document).ready(function(){

    $('#converterForm').on('submit', function(e) {
        e.preventDefault();

        var currency_from = $('#currency_from').val(),
            currency_to   = $('#currency_to').val(),
            amount        = $('#amount').val(),
            rate          = 0,
            result        = 0;

        $('#cc-result, #cc-result .loader').fadeIn(100);
        $('#cc-result p').hide();

        $.getJSON("http://api.fixer.io/latest", function(data) {
            fx.rates = data.rates;

            // convert 1 "currency_from" to 1 "currency_to"
            rate = fx(1).from(currency_from).to(currency_to);

            // to have 3 values after the decimal point.
            rate = rate.toFixed(3);

            // the EUR currency has an empty option value in select
            currency_from = currency_from == '' ? 'EUR' : currency_from;
            currency_to   = currency_to == '' ? 'EUR' : currency_to;

            // calculate the result of the amount conversion
            result = (rate*amount).toFixed(3);

            // set the rate and the conversion result value to the page
            $('#cc-result .cc-rate').html('Rate: 1 ' + currency_from +' = ' + rate + ' ' + currency_to);
            $('#cc-result .cc-conversion').html('<span>' + amount + '</span> ' + currency_from + ' = <span>' + result + '</span> ' + currency_to);

            // wait .5s and show the result
            setTimeout(function(){
                $('#cc-result .loader').hide();
                $('#cc-result p').show();
            }, 500);

            // get the form action to send ajax call
            new Ajax.Request($('#converterForm').attr('action'), {
                method: 'Post',
                parameters: {
                    'currency_from' : currency_from,
                    'currency_to'   : currency_to,
                    'amount'        : amount,
                    'rate'          : rate
                },
                onComplete: function(transport) {}
            });
        });
    });

});