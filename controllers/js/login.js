$(document).ready(function () {
    jQuery("#loginForm").submit(function () {
        event.preventDefault();

        var username = $("#username").val();
        var password = $("#password").val();

        var dados = {
            user: username,
            pass: password,
        };

        var jsonData = JSON.stringify(dados);

        // console.log(jsonData);

        $.ajax({
            url: "../model/login_verify.php",
            cache: false,
            data: jsonData,
            type: "POST",
            success: function (msg) {
                if (msg == "true" || msg == true) {
                    window.location.href = "menu.php";
                } else {
                    alert("Usuário ou senha inválidos");
                }
            },
            error: function (error) {
                console.log("Erro na requisição: " + JSON.stringify(error));
            },
        });
    });
});
