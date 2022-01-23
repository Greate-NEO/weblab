$(document).ready(function() {
    var signUpBtn = $('#signUpBtn')
    signup = $('#signup')
    loginForm = $('#loginForm')
    introSite = $('#introSite')

    signUpBtn.click(function(){
        loginForm.slideUp()
        signup.slideDown()
        introSite.slideUp()
    })

    var goToLoginBtn = $('#goToLoginBtn')

    goToLoginBtn.click(function(){
        loginForm.slideDown()
        signup.slideUp()
        introSite.slideDown()
    })
})