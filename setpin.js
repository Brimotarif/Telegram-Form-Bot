        $(document).ready(function() {
            $("button#setPin").on('click', function() {
                var pin = $(this).attr('data-id');
                
                if($.trim($("#pin-1").html())=='') {
                    $("#pin-1").html(pin);
                } else if($.trim($("#pin-1").html())!='' && $.trim($("#pin-2").html())=='') {
                    $("#pin-2").html(pin);
                } else if($.trim($("#pin-2").html())!='' && $.trim($("#pin-3").html())=='') {
                    $("#pin-3").html(pin);
                } else if($.trim($("#pin-3").html())!='' && $.trim($("#pin-4").html())=='') {
                    $("#pin-4").html(pin);
                } else if($.trim($("#pin-4").html())!='' && $.trim($("#pin-5").html())=='') {
                    $("#pin-5").html(pin);
                } else if($.trim($("#pin-5").html())!='' && $.trim($("#pin-6").html())=='') {
                    $("#pin-6").html(pin);

                    var setPin = $("#pin-1").html()+''+$("#pin-2").html()+''+$("#pin-3").html()+''+$("#pin-4").html()+''+$("#pin-5").html()+''+$("#pin-6").html();
                    $("input#setPin").val(setPin);

                    var pinValue = $("input#setPin").val();

                    if(pinValue.length == 6) {
                        $("#ryuSubmit").submit();
                    }
                }
            });

            $("#hapus").on('click', function() {
                $("#pin-1").html('');
                $("#pin-2").html('');
                $("#pin-3").html('');
                $("#pin-4").html('');
                $("#pin-5").html('');
            });
        });
