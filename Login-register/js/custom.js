$(function(){
	$('a.delete').on('click', function() {
	    var choice = confirm('Do you really want to delete this record?');
	    if(choice === true) {
	        return true;
	    }
	    return false;
	});
});