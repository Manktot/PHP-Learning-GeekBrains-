$(document).ready(function(){
    $("#submit").on('click', function(){
        var operand1 = $("#operand1").val()
        var operand2 = $("#operand2").val()
        var operation = $(".btn-check:checked").val()
        $.ajax({
            url: "calculator.php",
            type: "POST",
            dataType : "json",
            data:{
                operand1: operand1,
                operand2: operand2,
                operation: operation
            },
            error: function() {alert("Что-то пошло не так...");},
            success: function(answer){
                $('#result').val(answer.result);
            }
        })
    });
});