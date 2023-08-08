import './bootstrap';

$(document).ready(function() {

    $('#loadmorebtn').on('click',function() {
        var postsnum =  $('.allpostclass').length;
        if(postsnum) {
            $.ajax({
                type: 'GET',
                url: '/paginition/'+postsnum,
                success: function(data) {
                    $('#allpostsdiv').html( data );
                }
            });
        }
    });

});



