let pin = document.getElementById("password");
let form = document.getElementById("form");




form.addEventListener('submit', function (e) {
	e.preventDefault();

	let password = pin.value;
	let pass = "akale123";

	if (password == pass) {
		alert("logged in as admin");
		window.location.href = "adminpanel.php";
	}
	else {
		alert("wrong password");
	};
}
)