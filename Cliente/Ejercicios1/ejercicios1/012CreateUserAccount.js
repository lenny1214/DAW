/*012createuserAccount.js  Escribe una función que cree una cuenta de usuario.
 La función debe tomar un nombre de usuario y una dirección de correo 
 electrónico como argumentos obligatorios. También puede tomar un número de 
 teléfono opcional. Si el número de teléfono no se proporciona, 
 la cuenta se creará sin él. */


function createAccount(name, email, phone) {

    const cuenta = {
        name: name,
        email: email,
        phone: phone
    };

    return cuenta;




}

const miCuenata = createAccount(name='Juan', email= 'kenaa@example.com', phone ='1234');
console.log(miCuenata);


















 