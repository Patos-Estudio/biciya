function login_princi(){
    window.location.href = "../login/login_princi.html"
}

const nombre = document.getElementById("name")
const apellido = document.getElementById("ape")
const mail = document.getElementById("email")
const cedula = document.getElementById("cedula")
const contra = document.getElementById("password")
const contra2 = document.getElementById("password1")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")


form.addEventListener("submit", e=>{


    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    let regexp_password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/
    parrafo.innerHTML = ""
    if(nombre.value ===null || nombre.value === ''){
        warnings += "El nombre no es valido <br>"
        entrar = true
    }
    if(apellido.value ===null || apellido.value === ''){
        warnings += "El apellido no es valido <br>"
        entrar = true
    }
    if(cedula.value ===null || cedula.value === ''){
        warnings += "La cedula no es valida <br>"
        entrar = true
    }
    if(!regexEmail.test(mail.value)){
        warnings += "El correo no es valido <br>"
        entrar = true
    }
    if(!regexp_password.test(contra.value)){
        warnings += "La contraseña no es valida <br>"
        entrar = true
    }
    
    if(contra.value !== contra2.value){
        warnings += "Las contraseñas no coinciden <br>"
        entrar = true
    }
    if(entrar){
        parrafo.innerHTML = warnings
     }
     
})


