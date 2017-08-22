$(function () {
	try {
		var usersUrl = "http://api.dev-php.site/v1/users/all";
		var versionUrl = "http://api.dev-php.site/v1/";
		$.get(versionUrl, function (data) {
			$("#results")
				.append("Version: " + data.version + "<br />")
				.append("Environment: " + data.environment);
		}, "json");
	} catch (err) {
		console.log(err.message);
	}
});

