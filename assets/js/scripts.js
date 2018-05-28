function validateForm() {

    var inputs = document.getElementsByClassName('form-input');

    for (var i=0; i < inputs.length; i++) {

		var input = inputs[i];
		var inputValue = input.value;
		var inputType = input.type;

		if (inputValue.trim().length < 1) {
			alert("All fields must be filled out");
			return false;
		}

		if (inputType == 'email') {

			if ( !validateEmail(inputValue)){
				alert("Must use correct email");
				return false;
			}

		}

		if (inputType == 'password') {

			if (inputValue.trim().length < 6) {
				alert("Password must contain atleast 6 charactercs");
				return false;
			}

		}

    }

}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
