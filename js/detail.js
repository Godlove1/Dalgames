let paymentName = document.querySelectorAll('.meth__name');
let but = document.querySelector("#checkout");
	var details = document.querySelectorAll('.showpay');

let showdetail = paymentName.forEach(detail => {
	detail.addEventListener('click', function () {
			for (var i = 0; i <= details.length; i++){
				details[i].style.display = "block";
			}
	})
})