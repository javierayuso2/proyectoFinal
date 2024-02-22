function comprobarNombre(){
    var ok;
    var nombre=document.getElementById("nombre").value;
    var padre=document.getElementById("nombre").parentNode;//recoge el elemento padre

    //obtenemos los hijos
    var hijos=padre.children;//el padre por ejemplo es el div y los hijos son el input y el div que hay dentro de ese div


    //Comprobamos si existe ya el div del error
    if(hijos.length>1){
        //eliminamos el div del error que estará en la pos 2 del array de hijos
        padre.removeChild(hijos[1]);
    }

    // Creo un nuevo elemento hijo con el div dnd ira el mensaje error
    var nuevoElementoHijo = document.createElement("div");
    //le añado la clase
    nuevoElementoHijo.className="invalid-feedback";

    if(nombre.length==0){
        document.getElementById("nombre").classList.add("is-invalid");
        document.getElementById("nombre").classList.add("cajaTextError");

        //le pongo el texto del error correspondiente 
        nuevoElementoHijo.innerHTML="Campo obligatorio";  
        //añado el div de error, el appendChild lo que hace es añadir el elemento en el html
        padre.appendChild(nuevoElementoHijo);
    }
    else{
        //Si no es un num
         if(!isNaN(nombre)){
            document.getElementById("nombre").classList.add("is-invalid");
            document.getElementById("nombre").classList.add("cajaTextError");

            //pongo el texto del error
            nuevoElementoHijo.innerHTML = "No es un texto";
            // Añade el nuevo elemento hijo al elemento padre
            padre.appendChild(nuevoElementoHijo);
        }
        else{
            document.getElementById("nombre").classList.remove("is-invalid");
            document.getElementById("nombre").classList.remove("cajaTextError"); 
            document.getElementById("nombre").classList.add("is-valid");          
        }
    }
    //accedo a las clases del input
    var clases=document.getElementById("nombre").classList;
    if(clases.contains("is-invalid")){
        ok=false;
    }
    else{
        ok=true;
    }
    return ok;
}


function comprobarcontraseña(){
    var ok;
    var contraseña=document.getElementById("contraseña").value;
    var padre=document.getElementById("contraseña").parentNode;//recoge el elemento padre

    //obtenemos los hijos
    var hijos=padre.children;//el padre por ejemplo es el div y los hijos son el input y el div que hay dentro de ese div


    //Comprobamos si existe ya el div del error
    if(hijos.length>1){
        //eliminamos el div del error que estará en la pos 2 del array de hijos
        padre.removeChild(hijos[1]);
    }

    // Creo un nuevo elemento hijo con el div dnd ira el mensaje error
    var nuevoElementoHijo = document.createElement("div");
    //le añado la clase
    nuevoElementoHijo.className="invalid-feedback";

    if(contraseña.length==0){
        document.getElementById("contraseña").classList.add("is-invalid");
        document.getElementById("contraseña").classList.add("cajaTextError");

        //le pongo el texto del error correspondiente 
        nuevoElementoHijo.innerHTML="Campo obligatorio";  
        //añado el div de error, el appendChild lo que hace es añadir el elemento en el html
        padre.appendChild(nuevoElementoHijo);
    }
    else{
        //Si no es un num
         if(!isNaN(contraseña)){
            document.getElementById("contraseña").classList.add("is-invalid");
            document.getElementById("contraseña").classList.add("cajaTextError");

            //pongo el texto del error
            nuevoElementoHijo.innerHTML = "No es un texto";
            // Añade el nuevo elemento hijo al elemento padre
            padre.appendChild(nuevoElementoHijo);
        }
        else{
            document.getElementById("contraseña").classList.remove("is-invalid");
            document.getElementById("contraseña").classList.remove("cajaTextError"); 
            document.getElementById("contraseña").classList.add("is-valid");          
        }
    }
    //accedo a las clases del input
    var clases=document.getElementById("contraseña").classList;
    if(clases.contains("is-invalid")){
        ok=false;
    }
    else{
        ok=true;
    }
    return ok;
}


// function mostrarModal(){//esto es solo para mostrar la tabla
//     var modal = new bootstrap.Modal(document.getElementById('modal'));

//     formarTabla();

//     modal.show();
// }

function cambia(paso){//esto es para mostrar por partes el formulario
    //recojo el contenedor donde irán los datos
    var padre=document.getElementById("datos");
    var hijos = padre.children;
    hijos[paso].classList.add("d-none");//le añado la clase que esconde la pate validada
    hijos[paso+1].classList.remove("d-none");//le quito lrl d-none para mostrar la siguiente parte del formulario
}


function validarCampos1(){
    var contraseña=comprobarcontraseña();
    var nombre=comprobarNombre();
   

    if(contraseña && nombre){
        // cambia(0);
        window.location.href = 'todoCorrecto2.html'
    }
}

function validarCampos2(){
    var contraseña=comprobarcontraseña();
    var nombre=comprobarNombre();
   

    if(contraseña && nombre){
        // cambia(0);
        window.location.href = 'añadirEstado.html'
    }
}


function validarCampos3(){
    window.location.href = 'estadoEnviado.html'
}
// function comprobarCampos1(){
//     var cN=comprobarNombre()
//     var cc=comprobarcontraseña()

//     if(cN && cc){
//         mostrarModal();
//     }
// }

// function comprobarCampos1(){
//     comprobarNombre()
//     comprobarcontraseña()
// }


