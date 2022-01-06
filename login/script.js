/*************** Code for show password field 1 ***************/
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#id_password");

togglePassword.addEventListener("click", function (e) {
  // toggle the type attribute
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye slash icon
  this.classList.toggle("fa-eye-slash");
});

/*************** Code for show password field 2 ***************/
const toggleCpassword = document.querySelector("#toggleCpassword");
const cpassword = document.querySelector("#id_cpassword");

toggleCpassword.addEventListener("click", function (e) {
  // toggle the type attribute
  const type =
    cpassword.getAttribute("type") === "password" ? "text" : "password";
  cpassword.setAttribute("type", type);
  // toggle the eye slash icon
  this.classList.toggle("fa-eye-slash");
});

/*************** Code for show password field 2 ***************/
const togglecurrentPassword = document.querySelector("#togglecurrentPassword");
const currentPassword = document.querySelector("#id_currentPassword");

togglecurrentPassword.addEventListener("click", function (e) {
  // toggle the type attribute
  const type =
    currentPassword.getAttribute("type") === "password" ? "text" : "password";
  currentPassword.setAttribute("type", type);
  // toggle the eye slash icon
  this.classList.toggle("fa-eye-slash");
});