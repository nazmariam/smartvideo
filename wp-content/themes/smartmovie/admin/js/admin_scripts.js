jQuery(function ($) {
    "use strict";
    $(document).ready(function ($) {

        function deleter_price() {
            var elem = $(this);
            console.log(elem);
            // var price = elem.parents('.price_box');
            let counter = $('.add_price').attr('data-count');
            if( confirm('Видалити?') ) {
                counter--;
                $('.add_price').attr('data-count', counter);
                elem.parents('.price_box').remove();
                Change_Name_Index();
            } else {
                console.log('not deleted');
            }
        }

        function reactivate(){
            var deleters_price = $('.price_del');
            for (var i=0;i<deleters_price.length;i++){
                deleters_price[i].removeEventListener("click", deleter_price);
                deleters_price[i].addEventListener("click", deleter_price);
            }
        }

        function Change_Name_Index()
        {
            var index = $('.add_price').attr('data-count');
            for (var i = 0; i < index; i++) {
                var item = $('form').find('.price_box')[i];
                $(item).find('.desc').attr('name', 'price['+i+'][desc]');
                $(item).find('.price').attr('name', 'price['+i+'][price]');
            }
            reactivate();
        }

        reactivate();

        $('.add_price').click(function() {
            let counter = $('.add_price').attr('data-count');
            let new_box = '<div class="price_box"><span class="button price_del"><i class="fa fa-trash-o" aria-hidden="true" title="удалить цену"></i></span><div class="form-group"><label for="price">Опис та ціна послуги (0 означає "договірна"):</label><input type="text" class="desc" name="price[0][desc]" value=""><input type="number" class="price" name="price[0][price]" value="" max="9999"><span> грн</span></div></div>';
            $(new_box).insertBefore('.add_price');
            counter++;
            $('.add_price').attr('data-count', counter);
            Change_Name_Index();
        });
    });
});