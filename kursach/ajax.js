$(document).ready(function() {
	$('form').on('submit', function() {
		let name = $("#name").val()
		let mail = $("#mail").val()
        let phone = $("#phone").val()
        let password = $("#password").val()
		let data = {
			'name': name,
			'mail': mail,
            'phone': phone,
            'password': password
		};
		$.get("action.php", data, function(d) {
			$("#result").html(d);
		});
		alert('Форма отправлена: " +name +" "+mail+" "+phone+" "+password+"');
		return false;
	});
});
