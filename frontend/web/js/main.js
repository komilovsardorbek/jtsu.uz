window.onload = function () {
     "use strict";
     var toast = document.getElementById('toast');
     if (toast){
         setTimeout(function () {
             toast.click();
         }, 5000);
     }else{

         console.log('Siz telegramga ulangansiz, Вы подключены к телеграму, You are connected to telegram')
     }
 };



