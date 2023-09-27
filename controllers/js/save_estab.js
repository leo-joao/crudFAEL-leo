$(document).ready(function () {
    $("#save_btn").click(function (event) {
        event.preventDefault();

        var name = $("#estab_name").val();
        var address = $("#estab_address").val();
        var city = $("#estab_city").val();
        var shopAmount = $("#estab_amount").val();

        if (name == "" || address == "" || city == "" || shopAmount == "") {
            alert("Preencha todos os campos!");
            window.location.href = "register_estab.php";
        }

        var dados = {
            name: name,
            address: address,
            city: city,
            shopAmount: shopAmount,
        };

        var jsonData = JSON.stringify(dados);

        $.ajax({
            url: "../model/register_establishment.php",
            cache: false,
            data: jsonData,
            type: "POST",
            success: function (msg) {
                if (msg == "true" || msg == true) {
                    $("#info_msg").toggle();

                    $("#estab_name").val("");
                    $("#estab_address").val("");
                    $("#estab_city").val("");
                    $("#estab_amount").val(1);
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

        $("#estab_name").val("");
        $("#estab_address").val("");
        $("#estab_city").val("");
        $("#estab_amount").val(1);
    });
});
