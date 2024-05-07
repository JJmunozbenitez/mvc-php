
let registrarusuario =async()=>{
    let nombres = document.getElementById("nombres").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let telefono = document.getElementById("telefono").value;
    let password = document.getElementById("password").value;
    let fecha_nac= document.getElementById("fecha_nac").value;
    let rol= document.getElementById("rol").value;

    if(nombres.trim()=="" || apellidos.trim()=="" || email.trim()=="" || telefono.trim()=="" || password.trim()==""  || fecha_nac.trim()=="" || rol.trim()==""){
        Swal.fire({position: "center", icon: "error", title: "Todos los campos son Obligatorios"});
    }else{

        let url ='?controlador=usuario&accion=registrar';   
        fd = new FormData();

        fd.append("nombres" , document.getElementById("nombres").value);
        fd.append("apellidos" , document.getElementById("apellidos").value);
        fd.append("email" , document.getElementById("email").value);
        fd.append("telefono" , document.getElementById("telefono").value);
        fd.append("password" , document.getElementById("password").value);
        fd.append("fecha_nac" , document.getElementById("fecha_nac").value);
        fd.append("rol" , document.getElementById("rol").value);

        let respuesta = await fetch(url, {
            method:"post",
            body: fd
        });

        let info = await respuesta.json();
        Swal.fire({
            position: "center",
            icon: "success",
            title: info.mensaje,
            showConfirmButton: false,
            timer: 1500
        });
        $('#frm')[0].reset();
    }
}

let registrarprograma =async()=>{
    let nombre = document.getElementById("nombre").value;
    let codigo = document.getElementById("codigo").value;

    if(nombre.trim()=="" || codigo.trim()==""){
        Swal.fire({position: "center", icon: "error", title: "Todos los campos son Obligatorios"});
    }else{

        let url ='?controlador=programa&accion=registrar';
        fd = new FormData();

        fd.append("nombre" , document.getElementById("nombre").value);
        fd.append("codigo" , document.getElementById("codigo").value);


    let respuesta = await fetch(url, {
        method:"post",
        body: fd
    });

    let info = await respuesta.json();
    Swal.fire({
        position: "center",
        icon: "success",
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      $('#frm')[0].reset();
    }
}

let registrarusupro =async()=>{
    let correo = document.getElementById("correo").value;
    let codigo = document.getElementById("codigo").value;

    if(correo.trim()=="" || codigo.trim()==""){
        Swal.fire({position: "center", icon: "error", title: "Todos los campos son Obligatorios"});
    }else{

        let url ='?controlador=usupro&accion=registrar';
        fd = new FormData();

        fd.append("correo" , document.getElementById("correo").value);
        fd.append("codigo" , document.getElementById("codigo").value);


    let respuesta = await fetch(url, {
        method:"post",
        body: fd
    });

    let info = await respuesta.json();
    Swal.fire({
        position: "center",
        icon: "success",
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      $('#frm')[0].reset();
    }
}


let editarUsuario =async()=>{
    let nombres = document.getElementById("nombres").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let telefono = document.getElementById("telefono").value;
    let uid= document.getElementById("uid").value;
    let fecha_nac= document.getElementById("fecha_nac").value;

    if(nombres.trim()=="" || apellidos.trim()=="" || email.trim()=="" || telefono.trim()=="" || uid.trim()=="" || fecha_nac.trim()==""){
        Swal.fire({position: "center", icon: "error", title: "Todos los campos son Obligatorios"});
    }else{

        let url ='?controlador=usuario&accion=editar';
        fd = new FormData();

        fd.append("nombres" , document.getElementById("nombres").value);
        fd.append("apellidos" , document.getElementById("apellidos").value);
        fd.append("email" , document.getElementById("email").value);
        fd.append("telefono" , document.getElementById("telefono").value);
        fd.append("uid" , document.getElementById("uid").value);
        fd.append("fecha_nac" , document.getElementById("fecha_nac").value);

        let respuesta = await fetch(url, {
            method:"post",
            body: fd
        });

        let info = await respuesta.json();
        Swal.fire({
            position: "center",
            icon: "success",
            title: info.mensaje,
            showConfirmButton: false,
            timer: 1500
        });
  
    }
}

let editarPrograma =async()=>{
    let nombre = document.getElementById("nombre").value;
    let codigo = document.getElementById("codigo").value;
    let uid= document.getElementById("uid").value;

    if(nombre.trim()=="" || codigo.trim()=="" || uid.trim()==""){
        Swal.fire({position: "center", icon: "error", title: "Todos los campos son Obligatorios"});
    }else{

        let url ='?controlador=programa&accion=editar';
        fd = new FormData();

        fd.append("nombre" , document.getElementById("nombre").value);
        fd.append("codigo" , document.getElementById("codigo").value);
        fd.append("uid" , document.getElementById("uid").value);
    

        let respuesta = await fetch(url, {
            method:"post",
            body: fd
        });

        let info = await respuesta.json();
        Swal.fire({
            position: "center",
            icon: "success",
            title: info.mensaje,
            showConfirmButton: false,
            timer: 1500
        });
  
    }
}

let validarUsuario = async()=>{
    let url="?controlador=inicio&accion=validarUsuario";
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(email.trim()!="" && password.trim()!=""){
        let datos = new FormData();
        datos.append("email", email);
        datos.append("password", password)
        let respuesta = await fetch(url,{
            method:'post',
            body: datos
        });
        let info = await respuesta.json();
        
        if (info.estado == 1){
            window.location.href ="?controlador=inicio&accion=dashboard";

        }else{
            Swal.fire({icon:"error", title:info.mensaje});
        }
    }else{
        Swal.fire({icon:"error", title: "Todos los campos son obligatorios"});
    }

    }

    let validarPrograma = async()=>{
        let url="?controlador=inicio&accion=validarPrograma";
        let nombre = document.getElementById("nombre").value;
        let codigo = document.getElementById("codigo").value;
    
        if(nombre.trim()!="" && codigo.trim()!=""){
            let datos = new FormData();
            datos.append("nombre", nombre);
            datos.append("codigo", codigo)
            let respuesta = await fetch(url,{
                method:'post',
                body: datos
            });
            let info = await respuesta.json();
            if (info.estado == 1){
                window.location.href ="?controlador=inicio&accion=dashboard";
    
            }else{
                Swal.fire({icon:"error", title:info.mensaje});
            }
        }else{
            Swal.fire({icon:"error", title: "Todos los campos son obligatorios"});
        }
    
        }