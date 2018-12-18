window.onload=function(){
     let formulario = document.querySelector("#formulario")
    formulario.elements.email.focus()
    console.log(formulario)
    formulario.onsubmit=function(evento){
        if(!validaciones()){
            evento.preventDefault()
        }else{
            formulario.submit()
        }
    }

    function validaciones(){
        let email = formulario.elements.email
        let password = formulario.elements.password
        let passwordConfirm = formulario.element.passwordConfirm
        if(!validarEmail(email.value)) return false
        if(!validarPassword(password.value)) return false
        if(!validarPasswordRepeat(password.value.passwordConfirm.value)) return false
        
        
        return true
    }

    function validarEmail(email){
        let re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
        //if(re.test(email)) return true
        //swal("Error", "Debes colocar un email válido","error")
        //return false
        let error = document.getElementById("errorEmail")
        if (!re.test(email)){
            error.innerHTML="Debes colocar un email válido Capo...."
            error.setAttribute("class","alert alert-danger")
            return false
        }else{
            error.innerHTML=""
            error.removeAttribute("class","alert alert-danger")
            formulario.elements.password.focus()
            return true
        }
    }

    function validarPassword(password){
       let re_pwd = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{6,}$/
       error = document.getElementById("errorPassword")
       if (!re_pwd.test(password)){
        error.innerHTML="Debes colocar un password válido Capo...."
        error.setAttribute("class","alert alert-danger")
        return false
       }else{
        error.innerHTML=""
        error.removeAttribute("class","alert alert-danger")
        return true
        }
    }
 }