$(document).ready(function () {
    jQuery("#form-login").submit(function () {
        event.preventDefault();

        alert("entrou aqui");

        
        // Aguardar(1, "<?php echo $idAba; ?>_all", "divExecucaoCadastro_" + idAba);
        // $.ajax({
        //     url: "programas/MAN_IND_630_Campo_Dados.php",
        //     cache: false,
        //     data: dados,
        //     type: "POST",
        //     success: function (msg) {
        //         $("#gridCarregar_" + idAba).empty();
        //         $("#gridCarregar_" + idAba).html(msg);

        //         Aguardar(0, "<?php echo $idAba; ?>_all");
        //     },
        // });
    });
});
