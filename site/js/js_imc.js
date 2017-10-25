$(function () {
    jQuery('#CalculaIMC').submit(function () {
        var peso = $('#TxtPeso').val();
        var altura = $('#TxtAltura').val();

        var quadrado = (altura*altura);
        var calculo = (peso/quadrado);
        var imc = parseFloat(calculo.toFixed(2));

        if(imc < 17)
            var resultado = "Muito abaixo do peso.";
        else if(imc >= 17 && imc <= 18.49)
            var resultado = "Abaixo do peso.";
        else if(imc >= 18.50 && imc <= 24.99)
            var resultado = "Peso normal.";
        else if(imc >= 25 && imc <= 29.99)
            var resultado = "Acima do peso.";
        else if(imc >= 30 && imc <= 34.99)
            var resultado = "Obesidade I.";
        else if(imc >= 35 && imc <= 39.99)
            var resultado = "Obesidade II (severa).";
        else if(imc >= 40)
            var resultado = "Obesidade III (mórbida).";

        $("#resultado_imc").html("Seu índice de massa corporal é: <span>"+imc+"</span><br/> Situação: <span>"+resultado+"</span>");
        return false;
    });

    
});
