$(document).ready(function(){
//    $("#result").html('<p style="padding:5px;">Enter a search term to start filtering.</p>');
    $('#search').on('input',function() {
        var searchVal = $(this).val();
        $.get('actions/action_search_contact.php?contact='+searchVal, function(returnData) {
        	window.history.replaceState( {} , './?pagina=contactos&contact_search=%', './?pagina=contactos&contact_search='+ searchVal );
        	if (!returnData) {
        		$('#result').html('<p style="padding:5px;">Nenhum resultado!</p>');
        		} else {
        			$('#result').html(returnData);
                }
        	});
    });
    $('#search').trigger('input');
});