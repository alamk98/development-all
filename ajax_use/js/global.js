    $("#name_submit").click(function(){
        var name = $("#name").val();
        if( $.trim(name) != '') {

        	$.post('ajax/name.php',{name:name} , function(data) {

        			$("#name_data").html(data);
        		
        	});

			        }
    });