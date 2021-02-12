$(document).ready(function () {
	// Process the form
	$("form").submit(function (event) {
		// Get the form Data
		var formData = {
			name: $("input[name=name]").val(),
			email: $("input[name=email]").val(),
			subject: $("input[name=subject]").val(),
			message: $("textarea[name=message]").val(),
		};

		// console.log(formData);

		// Get the form Data
		$.ajax({
			type: "POST",
			URL: "process.php",
			data: formData,
			dataType: "json",
			encode: true,
		}).done(function (data) {
			console.log(data);
		});

		event.preventDefault();
	});
});
