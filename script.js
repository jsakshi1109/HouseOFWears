/* const form = document.querySelector('form');
const input = document.querySelector('input');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  alert('You searched for: ' + input.value);
});
 */

//form validation
function myfunction() {
    var name = document.forms.RegForm.Name.value;
    var email = document.forms.RegForm.EMail.value;
    var phone = document.forms.RegForm.Telephone.value;
    var password = document.forms.RegForm.Password.value;
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
    var regPhone = /^\d{10}$/;									 // Javascript reGex for Phone Number validation.
    var regName = /\d+$/g;

    if (name == "" || regName.test(name)) {
        window.alert("Please enter your name properly.");
        name.focus();
        return false;
    }

    if (address == "") {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }

    if (email == "" || !regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (password == "") {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }

    if (phone == "") {
        window.alert("Please enter phone number.");
        phone.focus();
        return false;
    }

    if (!regPhone.test(phone)) {
        window.alert("Please enter valid phone number.");
        phone.focus();
        return false;
    }
    return true;
}

function mypassword() {
    var x = document.getElementById("myInput");
    if (x.type == "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}

const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');

  header.addEventListener('click', () => {
    item.classList.toggle('active');

    const panel = item.querySelector('.accordion-panel');
    const isOpen = panel.style.display === 'block';

    panel.style.display = isOpen ? 'none' : 'block';
  });
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1
}
  if (n < 1) {
    slideIndex = slides.length
}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(function(){ plusSlides(1); }, 3000); // Change image every 3 seconds
}