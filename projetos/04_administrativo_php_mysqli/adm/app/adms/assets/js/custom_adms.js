// Permitir retorno no navegador no formulario apos o erro
if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}

// Calcular a forca da senha
function passwordStrength(){
    // Variavel para receber a forca da senha
    var strength = 0;

    // Receber o valor do campo senha
    var password = document.getElementById("password").value;

    // Atribuir a forca da senha conforme a quantidade de caracteres que o usuario digitar
    if((password.length >= 6) && (password.length <= 7)){
        strength += 10;
    }else if(password.length > 7){
        strength += 25;
    }

    // Verificar se o usuario digitou letra minuscula
    if((password.length >= 6) && (password.match(/[a-z]+/))){
        strength += 10;
    }

    // Verificar se o usuario digitou letra maiscula
    if((password.length >= 7) && (password.match(/[A-Z]+/))){
        strength += 20;
    }

    // Verificar se o usuario digitou caracter especial
    if((password.length >= 8) && (password.match(/[@#$%;*]+/))){
        strength += 25;
    }

    // Verificar se o usuario digitou numero sequencia, reduzir a forca da senha
    if(password.match(/([1-9]+)\1{1,}/)){
        strength -= 25;
    }

    // Chamar a funcao apresentar a forca da denha
    viewStrength(strength);
}

// Funcao apresentar a forca da denha
function viewStrength(strength){    
    if(strength < 30){
        document.getElementById("msgViewStrength").innerHTML = "<p style='color: #d2322d;'>Senha Fraca</p>";
    }else if((strength >= 30) && (strength < 50)){
        document.getElementById("msgViewStrength").innerHTML = "<p style='color: #ed9c28;'>Senha Média</p>";
    }else if((strength >= 50) && (strength < 70)){
        document.getElementById("msgViewStrength").innerHTML = "<p style='color: #0088cc;'>Senha Boa</p>";
    }else if(strength >= 70){
        document.getElementById("msgViewStrength").innerHTML = "<p style='color: #47a447;'>Senha Forte</p>";
    }else{
        ocument.getElementById("msgViewStrength").innerHTML = "";
    }
}

// Receber o formulario login
const formLogin = document.getElementById("form-login");

// Verificar se existe o formulario login
if(formLogin){
    // Aguardar o evento submit, aguardar o usuario clicar no botao acessar do formulario de login
    formLogin.addEventListener("submit", async(e) => {
        // Receber o valor do campo
        var username = document.querySelector("#username").value;
        
        // Verificar se o campo esta vazio
        if(username === ""){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo usuário!</p>";
            return;
        }
        
        // Receber o valor do campo
        var password = document.querySelector("#password").value;
        
        // Verificar se o campo esta vazio
        if(password === ""){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo senha!</p>";
            return;
        }
    });
}

// Receber o formulario novo usuario no login
const formNewUser = document.getElementById("form-new-user");

// Verificar se existe o formulario novo usuario no login
if(formNewUser){
    // Aguardar o evento submit, aguardar o usuario clicar no botao cadastrar do formulario novo usuario no login
    formNewUser.addEventListener("submit", async(e) => {
        // Receber o valor do campo
        var name = document.querySelector("#name").value;
        
        // Verificar se o campo esta vazio
        if(name === ""){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo nome!</p>";
            return;
        }
        
        // Receber o valor do campo
        var email = document.querySelector("#email").value;
        
        // Verificar se o campo esta vazio
        if(email === ""){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo e-mail!</p>";
            return;
        }
        
        // Receber o valor do campo
        var password = document.querySelector("#password").value;
        
        // Verificar se o campo esta vazio
        if(password === ""){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo senha!</p>";
            return;
        }

        // Verificar se o campo senha possui 6 caracteres
        if(password.length < 6){
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: A senha deve ter no mínimo 6 caracteres!</p>";
            return;
        }

        // Verificar se o campo senha nao possui numeros repetidos
        if (password.match(/([1-9]+)\1{1,}/)) {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: A senha não deve ter número repetido!</p>";
            return;
        }

        // Verificar se o campo senha possui letras
        if (!password.match(/[A-Za-z]/)) {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: A senha deve ter pelo menos uma letra!</p>";
            return;
        }else{
            document.getElementById("msg").innerHTML = "<p></p>";
            return;
        }
    });
}