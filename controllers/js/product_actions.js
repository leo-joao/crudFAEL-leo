function DeleteProduto(id = null) {
    if (id == null) {
        alert("Informe um produto para ser deletado!");
        return false;
    }

    var dados = {
        id: id,
    };

    var jsonData = JSON.stringify(dados);

    $.ajax({
        url: "../model/delete_product.php",
        cache: false,
        data: jsonData,
        type: "POST",
        success: function (msg) {
            console.log(msg);
            if (msg != "true") {
                alert("Erro na requisição: " + JSON.stringify(msg));
            }
            window.location.href = "list_products.php";
        },
        error: function (error) {
            alert("Erro na requisição: " + JSON.stringify(error));
        },
    });
}
