import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


jQuery(function ($) {
    $('#profile_img').on('change', function (e) {
        let reader = new FileReader();
        reader.onload = function (e){
            $('#show_img').attr('src' , e.target.result)
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
