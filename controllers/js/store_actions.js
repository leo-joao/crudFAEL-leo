function DeleteLoja(id = null) {
    if (id == null) {
        alert("Informe uma loja para ser deletada!");
        return false;
    }

    var dados = {
        id: id,
    };

    var jsonData = JSON.stringify(dados);

    $.ajax({
        url: "../model/delete_store.php",
        cache: false,
        data: jsonData,
        type: "POST",
        success: function (msg) {
            console.log(msg);
            if (msg != "true") {
                alert("Erro na requisição: " + JSON.stringify(msg));
            }
            window.location.href = "list_stores.php";
        },
        error: function (error) {
            alert("Erro na requisição: " + JSON.stringify(error));
        },
    });
}
