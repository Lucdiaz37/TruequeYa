window.onload=function(){
        let formulario = document.querySelector("#formulario")
        formulario.elements.name.focus()
   
        formulario.onsubmit=function(evento){
             if(!validaciones()){
                evento.preventDefault()
                }else{
                formulario.submit()
            }
        }

    function validaciones(){
        let name = formulario.elements.name
        let email = formulario.elements.email
        let password = formulario.elements.password
        let passwordConfirm = formulario.elements.passwordConfirm
        if(!validateName(name.value)) return false
        if(!validarEmail(email.value)) return false
        if(!validarPassword(password.value)) return false
        if(!validarPasswordRepeat(password.value,passwordConfirm.value)) return false

        return true
    }

    function validarEmail(email){
        let re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
        let error = document.getElementById("errorEmail")
        if (!re.test(email)){
            error.innerHTML="Debes colocar un email válido "
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
       let error = document.getElementById("errorPassword")
       if (!re_pwd.test(password)){
        error.innerHTML="La contraseña debe tener al menos una mayuscula, una minuscula y un numero"
        error.setAttribute("class","alert alert-danger")
        return false
       }else{
        error.innerHTML=""
        error.removeAttribute("class","alert alert-danger")
        return true
        }
    }

    function validarPasswordRepeat(password, passwordConfirm){
        let error = document.getElementById("errorPasswordConfirm")
        if (password === passwordConfirm){
            error.innerHTML=""
            error.removeAttribute("class","alert alert-danger")
             return true
        } else{
            error.innerHTML="Las contraseñas no coinciden"
            error.setAttribute("class","alert alert-danger")
            return false
        }
      }

      function validateName(name) {
        
        if (name==="" || name.length <= 3){
          document.getElementById("error").innerHTML= "Debes ingresar un nombre de usuario válido"
          document.getElementById("error").classList.add("alert-danger")
          return false
        }else{
          document.getElementById("error").innerHTML = ""
          document.getElementById("error").classList.remove("alert-danger")
          return true
        }
      }
  }