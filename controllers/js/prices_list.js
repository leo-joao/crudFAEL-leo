$(document).ready(function () {
    $("#select_shop").change(function (event) {
        event.preventDefault();

        var id = $("#select_shop").val();

        var dados = {
            id: id,
        };

        var jsonData = JSON.stringify(dados);

        $.ajax({
            url: "../model/load_prices.php",
            cache: false,
            data: jsonData,
            type: "POST",
            success: function (data) {
                $("#tabela_precos").html(data);
            },
            error: function (error) {
                console.log("Erro na requisição: " + JSON.stringify(error));
            },
        });
    });
});
