'use strict';


var tagsTech = (funcion($) {
    var ui = {
        $form: $('#filters_form');
       $tech: $('#tech');
        $status: $('#status')
    };

    function init() {
        console.info('init tagsTech');
    }
//Навешивание событий
function   _bindHandlers(){
        ui.$tech.on('change', _getData);
    }
// Получение данных
function _getData {
    var filerData = ui.$form.serialize();
    $.ajax({
        url: 'config/filter.php',
        data: filterData,
        type: GET,
        cache: false,
        dataType: 'json',
        error: _filterError,
        success
    : function (response) {
        if (responce.code === 'success') {
            _filterSuccess(response);
        } else{
            _filterError(response);
        }
    }});
}

//Ошибка получения данных
function _filterError(response){
    console.error('response', response);
}

//Успешное получение данных
 function _filterSuccess(response){
console.log(response);
 }



    return {init: init}

})(jQuery);