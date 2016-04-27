<script type="text/javascript" src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">        
	Twilio.Device.setup("{{$token}}");

	Twilio.Device.ready(function (device) {
		$("#log").text("{{$clientName}} is ready to make the call ...");        
	});
	
	Twilio.Device.error(function (error) {
		$("#log").text("Error: " + error.message);
	});
	
	Twilio.Device.connect(function (conn) {
		$("#log").text("Successfully established call");
	});
	
	function call() {
		params = {"PhoneNumber": $("#PhoneNumber").val()};
		if(params.PhoneNumber=="") {	
			if($("#log").hasClass('alert alert-success')) {
				$("#log").removeClass('alert alert-success');
				$("#log").addClass('alert alert-danger');	
			}					
			$("#log").text("Provide a phone number!");
		} else {
			if($("#log").hasClass('alert alert-danger')) {
				$("#log").removeClass('alert alert-danger');
				$("#log").addClass('alert alert-success');
			}
			$("#PhoneNumber").attr("disabled",true);
			$("#call").attr("disabled",true);
			$("#hangup").removeAttr("disabled");	
			Twilio.Device.connect(params);	
		}		
	}

	function hangup() {		
		$("#hangup").attr("disabled",true);
		$("#PhoneNumber").removeAttr("disabled");
		$("#call").removeAttr("disabled");
		Twilio.Device.disconnectAll();
		$("#log").text("{{$clientName}} is ready to make the call ...");
		
	} 
</script>
