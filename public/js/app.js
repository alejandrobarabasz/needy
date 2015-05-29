(function() {
	$(".bussiness-hours").businessHours();

	// registramos el history
	var history = window.History;
	if (!history.enabled) {
		return false; // @todo: handle this
	}

	$(document).on('submit', 'form[role=search]', function() {
		var url = $(this).attr('action');
		var target_class = $(this).data('target');
		var target = $(target_class);
		var input = $(this).find('input:text');
		var q = input.val();

		if (!input || $.trim(input.val()) == "" ) 
			return;

		// cambiamos el state del browser
		history.pushState({}, null, url + "?q=" + q);

		// solicitamos al server 
		$.get(url, {
			q : q
		}, function(response) {
			$(target).html(response);
		}, 'html');
		
		return false;
	})

	// registramos el paginator
	$(document).on('click', '.pager .pagination li a', function(){
		var pager = $(this).parents()[2];
		var target_class = $(pager).data('target');
		var target = $(target_class);
		var url = $(this).attr('href');

		if (target_class === undefined || $.trim(target_class) == ''){
			alert("Debe establecer la propiedad data-target");
			return false;
		}

		if (!target || $(target).length < 1){
			alert("El container especificado no se encuentra en el documento");			
			return false;
		}

		if (!url || $.trim(url) == '') {
			alert("Debe establecer la propiedad href");
			return false;
		}

		// cambiamos el state del browser
		history.pushState({}, null, url);

		// solicitamos 
		$(target).load(url);

		return false;
	});
})();
