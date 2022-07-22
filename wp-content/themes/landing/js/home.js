function validate(course_id, module_id) {
    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Guardado...";
    oData = new FormData(document.forms.namedItem("coaching_form"));
    $.ajax({
        url: site + "coaching-fest/validate",
        method: "POST",
        data: oData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {
                document.getElementById("submit").disabled = true;
                document.getElementById("submit").innerHTML = "Registro Gratis";
                $.notify("Guardado, nos comunicaremos a la brevedad", "success");
            } else {
                document.getElementById("submit").disabled = true;
                document.getElementById("submit").innerHTML = "Registro Gratis";
                $.notify("Usted ya está registrado, nos comunicaremos a la brevedad", "success");
            }
        }
    });
}