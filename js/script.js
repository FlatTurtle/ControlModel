/* Author:

 */

$("#button1").click(function(){
    $("#button1").html("Sending...");
    $.ajax({
        url: "../screen/" + hostname + "/power",
        type: "POST",
        data: {
            value: "on"
        },
	success: function(){
		location.reload(true);
	}
    });
});
$("#button2").click(function(){
    $("#button2").html("Sending...");
    $.ajax({
        url: "../screen/" + hostname +"/power",
        type: "POST",
        data: {
            value: "off"
        },
	success: function(){
		location.reload(true);
	}
    });
});

$("#button3").click(function(){
    $("#button3").html("Sending...");
    $.ajax({
        url: "../screen/" + hostname + "/status",
        type: "POST",
        data: {
            value: "reload"
        },
	success: function(){
		location.reload(true);
	}
    });
});


$("#button4submit").click(function(){
    $("#button4submit").html("Sending...");
    var msg = $("#custommessage").val();
    $.ajax({
        url: "../screen/"+hostname+"/status",
        type: "POST",
        data: {
            message: msg,
            value: "message",
        },
	success: function(){
		location.reload(true);
	}
    });
});
