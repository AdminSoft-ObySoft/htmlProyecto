
    const formUser = document.getElementById('formUser')
    const nombreId = document.getElementById('nombre')
    const apellido = document.getElementById('apellido')
    const cedula = document.getElementById('cedula')
    const usuario = document.getElementById('usuario')
    const email = document.getElementById('email')
    const contraseña = document.getElementById('contraseña')
    const confirmar = document.getElementById('confirmar')

    formUser.addEventListener('submit', e => {
        console.log(formUser)
    
        e.preventDefault()

        console.log('hola');
        const nombreValor = nombreId.value.trim();
        const apellidoValor = apellido.value.trim();
        const cedulaValor = cedula.value.trim();
        const emailValor = email.value.trim();
        const usuarioValor = usuario.value.trim();
        const contraseñaValor = contraseña.value.trim();
        const confirmarValor = confirmar.value.trim();

        if (!nombreValor) {
            validaFalla(nombre, 'Campo vacio');
        }else {
            validaOk(nombre);
        }

    });

    function validaCampos() {
        console.log('hola');
        const nombreValor = nombreId.value.trim();
        const apellidoValor = apellido.value.trim();
        const cedulaValor = cedula.value.trim();
        const emailValor = email.value.trim();
        const usuarioValor = usuario.value.trim();
        const contraseñaValor = contraseña.value.trim();
        const confirmarValor = confirmar.value.trim();

        if (!nombreValor) {
            validaFalla(nombre, 'Campo vacio');
        }else {
            validaOk(nombre);
        }
    }

    validaFalla = (input, msje) => {
        const formControl = input.parenElement;
        const aviso = formControl.querySelector('small');
        aviso.innerText = msje;

        formControl.className = 'input-box falla'
    }

    validaOk = (input, msje) => {
        const formControl = input.parenElement;
        
        formControl.className = 'input-box ok'
    }
