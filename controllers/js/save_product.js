$(document).ready(function () {
    $("#save_btn").click(function (event) {
        event.preventDefault();

        var name = $("#prod_name").val();
        var brand = $("#prod_brand").val();
        var amount = $("#prod_amount").val();
        var unit = $("#prod_unit").val();

        if (name == "" || brand == "" || amount == "" || unit == "") {
            alert("Preencha todos os campos!");
            window.location.href = "register_prod.php";
        }

        var dados = {
            name: name,
            brand: brand,
            amount: amount,
            unit: unit,
        };

        var jsonData = JSON.stringify(dados);

        $.ajax({
            url: "../model/register_product.php",
            cache: false,
            data: jsonData,
            type: "POST",
            success: function (msg) {
                if (msg == "true" || msg == true) {
                    $("#info_msg").toggle();

                    $("#prod_name").val("");
                    $("#prod_brand").val("");
                    $("#prod_amount").val("");
                    $("#prod_unit").val("");
                } else {
                    alert("Houve um erro ao gravar os dados.");
                }
            },
            error: function (error) {
                console.log("Erro na requisição: " + JSON.stringify(error));
            },
        });
    });

    $("#cancel_btn").click(function (event) {
        event.preventDefault();

        $("#prod_name").val("");
        $("#prod_brand").val("");
        $("#prod_amount").val("");
        $("#prod_unit").val("");
    });
});
