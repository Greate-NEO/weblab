$(document).ready(function() {
    //[가입하기] 버튼
    var signUpBtn = $('#signUpBtn')
    //회원 가입 폼
    signup = $('#signUp')
    //로그인 폼
    loginForm = $('#loginForm')
    //내가 만드는 첫 웹서비스에 어서오세요.
    introSite = $('#introSite')

    //[가입하기] 버튼 클릭 이벤트
    signUpBtn.click(function(){
        //로그인 폼 숨기기
        loginForm.slideUp()
        //회원가입 폼 숨기기
        signup.slideDown()
        //내가 만드는 첫 웹서비스에 어서오세요 - 문구 숨기기
        introSite.slideUp()
    })
})