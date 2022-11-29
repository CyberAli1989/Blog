$(function () {
    $('#portfolio_sort a').on('click', function (e) {
        e.preventDefault();
        $('#portfolio_sort a').removeClass('active');
        $(this).addClass('active');
        let dataSort = $(this).data('filter');
        if (dataSort === 'all'){
            $('#sort_items .items').stop().slideDown(500);
        }else {
            $('#sort_items .items').slideUp(250);
              $("#sort_items .items." + dataSort).slideDown('normal');
        }
    })
})
