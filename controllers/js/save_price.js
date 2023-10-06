$(document).ready(function () {
    $("#prod_price").mask("0000,00", { reverse: true });

    $("#save_btn").click(function (event) {
        event.preventDefault();

        var product = $("#select_prod").val();
        var shop = $("#select_shop").val();
        var price = $("#prod_price").val();

        if (product == "" || shop == "" || price == "") {
            alert("Preencha todos os campos!");
            window.location.href = "register_price.php";
        }

        price = price.replace(",", ".");
        price = parseFloat(price);

        var dados = {
            product: product,
            shop: shop,
            price: price,
        };

        var jsonData = JSON.stringify(dados);

        $.ajax({
            url: "../model/register_value.php",
            cache: false,
            data: jsonData,
            type: "POST",
            success: function (msg) {
                if (msg == "true" || msg == true) {
                    $("#info_msg").toggle();

                    $("#select_prod").val("");
                    $("#select_shop").val("");
                    $("#prod_price").val("");
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

        $("#prod_product").val("");
        $("#select_shop").val("");
        $("#prod_price").val("");
    });
});
