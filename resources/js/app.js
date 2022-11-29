import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


jQuery(function ($) {
    $('form #profile_img').on('change', function (e) {
        console.log(222);
        let reader = new FileReader();
        reader.onload = function (e) {
            $('#show_img').attr('src', e.target.result)
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    $('form #header_img').on('change', function (e) {
        console.log(222);
        let reader = new FileReader();
        reader.onload = function (e) {
            $('#header_img_show').attr('src', e.target.result)
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    $('form #header_profile').on('change', function (e) {
        console.log(222);
        let reader = new FileReader();
        reader.onload = function (e) {
            $('#header_profile_show').attr('src', e.target.result)
        }
        reader.readAsDataURL(e.target.files['0']);
    });

    $('form #name').on('keyup', function () {
        let inputVal;
        inputVal = $(this).val()
        $('input[name=slug]').val(inputVal.split(' ').join('_'))
    })

});
