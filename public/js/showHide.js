'use strict';

$(function showHide (el_id) {
    if (document.getElementById(el_id)) {
        var obj=document.getElementById(el_id);
        if (obj.style.display != "block"){
           obj.style.display = "block"; //показать элемент
           obj.SHOW("slow"); 
            obj.toggle("slow");
        }
        else {
           obj.style.display="none";
 
        
    }
});
