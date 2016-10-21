var navigation = function() {
    var $el = $('#navigation'),
        $next = $el.find('#next'),
        currentDir = '.';
    var visitDir = function(currentDir) {
    	$.ajax({
    		url: '/scripts/hello.php',
    		success: function(data) {
    			data = JSON.parse(data);
    			console.log("success: ", data);
    		}
    	});
    };
    return {
        init: function() {
            $next.on('click', function(argument) {
            	visitDir(currentDir);
            });
        }
    }
}
