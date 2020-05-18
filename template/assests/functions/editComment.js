var editBtn = $('.edit');

$(document).ready(function(){

    editBtn.click(function(e){
        e.preventDefault();
        $('#' + $(this).data('index')).css('display', 'block');
        editBtn.hide();
        
    });

    $('.cancel').click(function(e){
        e.preventDefault();
        $('#' + $(this).data('index')).css('display', 'none');
        editBtn.show();

    });

});