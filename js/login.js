(function($){

	$(document).ready(function(){
		$('#submit').click(function(){
			console.log($('#username').val().length, $('#password').val().length)
			if($('#username').val().length >= 1 && $('#password').val().length >= 1){
				document.location.href = "error.html";
			}else{
				alert('Please enter a Username and Password');
			}
			
		});
	});

}(jQuery));