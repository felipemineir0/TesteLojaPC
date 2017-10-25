$(function() {
    $("#load").hide();
   /* $.urlParam = function(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        }
        else {
            return results[1] || 0;
        }
    }
    


    if ($.urlParam("dinamize") == "ok") {
        $("#msg_validacao").html("Seu cadastro foi realizado com sucesso!");
    }*/

    jQuery("form[id^='NewsEmail']").submit(function() {
        var dados = jQuery(this).serialize();
        $("#submitForm").prop("disabled", true);
        //$("#load").show();
        jQuery.ajax({
            type: "POST",
            url: jQuery(this).attr("action"),
            data: dados,
            success: function(data)
            {
                //$("#load").hide();
                if ($.trim(data) == "true") {
                    $("#msg_validacao").html("Seu cadastro foi realizado com sucesso!");
                    $("#submitForm").prop("disabled", false);
                    

                } else {
                    $("#msg_validacao").html("Houve algum erro no cadastro.<br />" + data);
                    $("#submitForm").prop("disabled", false);
                }
                jQuery("form[id^='NewsEmail']")[0].reset();

            }
        });
        return false;
    });


});


