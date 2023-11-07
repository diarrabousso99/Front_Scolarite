$(document).ready(function () {
    //getcategorie
    $.ajax({
        url: "/categorie/all",
        method: "GET",

        dataType: "JSON",
        success: (resultat) => {
            $("#categorie").empty();

            $("#categorie").append(
                "<option value=''>Choisissez une categorie * </option>"
            );
            if (resultat.length != 0) {
                for (let i = 0; i < resultat.length; i++) {
                    $("#categorie").append(
                        "<option value='" +
                            resultat[i].id +
                            "'> " +
                            resultat[i].domaine +
                            " </option>"
                    );
                }
            } else {
                $("#categorie").empty();
                $("#categorie").append(
                    "<option value=''> Pas de categorie   </option>"
                );
            }
        },
        error: () => {
            alert("erreur");
        },
    });

    $(".categorie").change(function () {
        var cat = $(this).val();
        // alert(cat);
        $.ajax({
            url: "/formationByCat/" + cat,
            method: "GET",
            dataType: "JSON",
            success: (resultat) => {
                $(".formation").empty();
                $(".formation").append(
                    "<option value=''>Choisissez une formation * </option>"
                );
                if (resultat.length > 0) {
                    for (let i = 0; i < resultat.length; i++) {
                        $(".formation").append(
                            "<option value='" +
                                resultat[i].id +
                                "'> " +
                                resultat[i].intitule +
                                " </option>"
                        );
                    }
                    console.log(document.getElementById("formation"));
                } else {
                    $(".formation").empty();
                    $(".formation").append(
                        "<option value='' disabled selected> Pas de formation   </option>"
                    );
                }
            },
            error: () => {
                alert("erreur");
            },
        });
    });
    $("#fruitInput").on("input", function () {
        const selectedOptionValue = $(this).val();
        const selectedOption = $(
            "#fruits option[value='" + selectedOptionValue + "']"
        );
       
        if (selectedOption.length>=1) {
            const selectedOptionId = selectedOption.attr("id");
            alert("ID du fruit sélectionné : " + selectedOptionId);
        }
        else
            alert();
        
    });

    //form
    $("#contactform").submit(function (event) {
        // alert();
        $("#ajaxloader").show();
        $("#contactform").hide();
        $.ajax({
            url: "form/inscription",
            data: $(this).serialize(),
            type: "post",
            success: function (response) {
                $("#ajaxloader").hide();
                $("#contactform").show();

                $("#formmessage")
                    .html(response)
                    .show()
                    .delay(20000)
                    .fadeOut("slow");
            },
        });
        event.preventDefault();
    });

    $(".yes").click(function (e) {
        payer = document.getElementById("payer");
        payer.value = "1";
    });

    $(".non").click(function (e) {
        payer = document.getElementById("payer");
        payer.value = "0";
    });

    $("#contactformFormation").submit(function (event) {
        // alert();
        $("#ajaxloader").show();
        // payer.value = "Oui";
        // payer = $("#payer").val();
        // // alert(payer);
        $("#contactform").hide();
        $.ajax({
            url: "/inscription_formation",
            data: $(this).serialize(),
            type: "post",
            success: function (response) {
                $("#ajaxloader").hide();
                $("#contactform").show();

                $("#formmessage")
                    .html(response)
                    .show()
                    .delay(20000)
                    .fadeOut("slow");
            },
        });
        event.preventDefault();
    });

    $("#formContact").submit(function (event) {
        // alert();
        $("#ajaxloader").show();
        $("#formContact").hide();
        $.ajax({
            url: "/contact_us",
            data: $(this).serialize(),
            type: "post",
            success: function (response) {
                $("#ajaxloader").hide();
                $("#formContact").show();

                $("#formmessage")
                    .html(response)
                    .show()
                    .delay(20000)
                    .fadeOut("slow");
            },
        });
        event.preventDefault();
    });
});
