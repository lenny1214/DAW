"use strict";


function isEmpty(obj) {

    for(let key in obj) {
    if(schedule.hasOwnProperty(key)){
        return false;
    }


    
    }
    return true;


}

let schedule = {};

alert( isEmpty(schedule) ); // true
schedule["8:30"] = "Hora de levantarse";
alert( isEmpty(schedule) ); // false    

























