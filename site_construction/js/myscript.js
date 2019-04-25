$(function(){
	$("#form").on('submit',function(){
		let nom=$('#nom').val(),prenom=$('#prenom').val(),password=$('#password').val();
		if( nom == "" || prenom == "" || password == "" )
			{
				$('.error').text('Veuillez renseigner tous les champs svp !');
				return false;
			}
		else if(/^#/)
	})
	
	
})