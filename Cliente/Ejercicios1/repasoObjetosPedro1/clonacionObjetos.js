"use strict";



let user1={
    name:"Lenny",
    apellido:"Fernández",
   
};

let user2={
    name:"Ignacio",
    apellido:"Fernández",
   
}

function  sayHay(){
    alert(this.name, this.apellido);
}

user1.f=sayHay;
user2.f=sayHay;

alert (user1.f());
alert (user2.f());