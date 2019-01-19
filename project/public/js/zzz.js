

$(function() {
    $('.addNewStr').on('click', function(){
        var $form = $(this).closest('.form-group');
        var $table = $form.find('table');
        var numberNow = $table.find('.myIdElement:last').text();
        var numberNext = parseInt(numberNow);
        numberNext++;

        var elements = $table.find('tr:eq(1)').clone(true);
        elements.find('.myIdElement').text(numberNext);
        elements.find('input').val('');

        $table.find('tbody').append(elements)
    });
});
