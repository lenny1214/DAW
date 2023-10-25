/*¿Es posible crear las funciones A y B para que se cumpla new A() == new B()?
function A() { ... }
function B() { ... }
let a = new A();
let b = new B();
alert( a == b ); // true*/


"use strict";

function calculatorOK () {
    this.a=0,
    this.b=0,
     this.read=function() {
         this.a=parseFloat(prompt("Introduzca un número"));
         this.b=parseFloat(prompt("Introduzca un número"));
     },
 
 
     this.sum=function(){
         return this.a+this.b;
     },
     
     this.mul=function(){
         return this.a*this.b;
     }
 
 
   };
   let calculator=new calculatorOK();
   calculator.read();
   alert( calculator.sum() );
   alert( calculator.mul() );