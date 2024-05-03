const loginBtn = document.getElementById('cw-loginBtn');
const registerBtn = document.getElementById('cw-registerBtn');
const customerLoginSection = document.querySelector('.cw-customer_login');
let isVisible = false;

if(registerBtn) {
    registerBtn.addEventListener("click", () => {
        if(!isVisible) {
            customerLoginSection.classList.toggle("loginIsVisible");
            customerLoginSection.classList.toggle("registerIsVisible");
        }
        isVisible = true;
    });
}
if(loginBtn) {
    loginBtn.addEventListener("click", () => {
        if(isVisible) {
            customerLoginSection.classList.toggle("loginIsVisible");
            customerLoginSection.classList.toggle("registerIsVisible");
        }
        isVisible = false;
    });
}