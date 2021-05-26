require('./bootstrap');

require('alpinejs');

$(document).ready(function() {
    $('#practicien_select').change(function() {
        var selecteur = '#info_pract_'+$(this).val();
        update_view(selecteur);
    })
})

function update_view(id_practi){
    $('.practicien_infos').hide();
    $(id_practi).show();
}