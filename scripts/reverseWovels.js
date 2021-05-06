 	function call() {
 	    var msg = $('#formx').serialize();
 	    $.ajax({
 	        type: 'POST',
 	        url: '../php/reverseVowels.php',
 	        data: msg,
 	        success: function(data) {
 	            $('.request1').html(data);
 	        },
 	        error: function(xhr, str) {
 	            alert('Возникла ошибка: ' + xhr.responseCode);
 	        }
 	    });

 	}