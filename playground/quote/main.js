
$(document).ready(function() {
    $('#new').click(function(event) {
        $.getJSON('quote.php', function(json, textStatus) {
                console.log(json);
                $('#quote').html(json.quote);
        });
    });
    $('#new').trigger('click');
});
