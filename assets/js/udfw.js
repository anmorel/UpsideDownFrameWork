$.fn.getType = function(){ return this[0].tagName == "INPUT" ? this[0].type.toLowerCase() : this[0].tagName.toLowerCase(); }

function udfwPostFunction(action, postData) {
    'use strict';
    var form;
    form = $('<form />', {
        action: action,
        method: 'post',
        style: 'display: none;'
    });
    if (typeof postData !== 'undefined' && postData !== null) {
        $.each(postData, function (name, value) {
            $('<input />', {
                type: 'hidden',
                name: name,
                value: value
            }).appendTo(form);
        });
    }
    form.appendTo('body').submit();
}


$(function(){
    $("a[udfw]").click(function(){
        //alert('module'+$(this).attr("udfw-module")+'controller'+$(this).attr("udfw-controller")+'action'+$(this).attr("udfw-action")+'param'+$(this).attr("href"));
        udfwPostFunction('/', {
            module:     $(this).attr("udfw-module"),
            controller: $(this).attr("udfw-controller"),
            action:     $(this).attr("udfw-action"),
            param:      $(this).attr("href")
        });
        return false;
    });


    $("form[udfw]").submit(function( event ) {
        var allInputs = $( ":input" );
        var action = '?';
        allInputs.each(function () {
            if($(this).getType() == 'select') {
                listeSelect = $(this).val();
                var name = this.name
                listeSelect.forEach(function(currentValue, index, arr){
                    action = action+'&'+name+'[]='+currentValue;
                });
            }else{
                var val =this.value;
                action = action+'&'+this.name+'='+val
            }
        });
        udfwPostFunction(action, {
            module:     $(this).attr("udfw-module"),
            controller: $(this).attr("udfw-controller"),
            action:     $(this).attr("udfw-action"),
            param:      $(this).attr("action")
        });
        event.preventDefault();
        return false;
    });
});