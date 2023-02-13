const formAddMsg = document.getElementById("form-add-msg");
if (formAddMsg) {
    formAddMsg.addEventListener("submit", async (e) => {
        // Receber o valor do campo
        var name = document.querySelector("#name").value;
        // Verificar se o campo esta vazio
        if (name === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo nome!</p>";
            return;
        }

        // Receber o valor do campo
        var email = document.querySelector("#email").value;
        // Verificar se o campo esta vazio
        if (email === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo e-mail!</p>";
            return;
        }

        // Receber o valor do campo
        var subject = document.querySelector("#subject").value;
        // Verificar se o campo esta vazio
        if (subject === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo assunto!</p>";
            return;
        }

        // Receber o valor do campo
        var content = document.querySelector("#content").value;
        // Verificar se o campo esta vazio
        if (content === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p style='color: #f00;'>Erro: Necessário preencher o campo mensagem!</p>";
            return;
        }
    });
}