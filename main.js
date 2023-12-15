const form = document.getElementById('contact-form')
const errorMessage = document.getElementById('error-message')
const successMessage = document.getElementById('success-message')
const loader = document.getElementById('loader')

function validateForm(name, email, comments, policyChecked) {
  if (name == '' || email == '' || comments == '' || !policyChecked) {
    return false;
  }

  return true;
}

function addUser(e) {
	e.preventDefault();

  errorMessage.classList.remove('active');
	successMessage.classList.remove('active');
  loader.classList.add('loader');

	userName = form.name.value.trim();
	email = form.email.value.trim();
	phone = form.phone.value.trim();
	subject = form.subject.value.trim();
	comments = form.comments.value.trim();
	policyChecked = form.policy.checked;

	if (validateForm(userName, email, comments, policyChecked)) {
    var request = new XMLHttpRequest();
	  request.open('POST', 'insert.php');
		
    const params = 'name=' + userName + '&email='+ email + '&phone=' + phone + '&subject=' + subject + '&comments=' + comments;

		request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		request.onload = function() {
			form.name.value = '';
			form.email.value = '';
			form.subject.value = '';
			form.phone.value = '';
			form.comments.value = '';
      form.policy.checked = false;
		}

		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				loader.classList.remove('loader');
        successMessage.classList.add('active');
			}
		}

		request.send(params);

	} else {
		errorMessage.classList.add('active');
    loader.classList.remove('loader');
	}
}

form.addEventListener('submit', function(e) {
	addUser(e);
});
