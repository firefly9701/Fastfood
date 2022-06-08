// Slider
var index = 1;
changeImg = function(){
    var imgs = ["./assets/img/banner2.png","./assets/img/banner3.png","./assets/img/banner4.png","./assets/img/banner5.png"];
    document.getElementById("slider").src = imgs[index];
    index++;
    if (index == 4) {
        index = 0;
    }
}
setInterval(changeImg,1000);

// //Order
// $(document).ready(function() {
//     $(".seclect-order").click(function() {
//         alert("Đặt hàng thành công");
//     });
// )};

// // form register
// $(document).ready(function() {
//     $("#right-register").click(function() {
//         $(".modal.modal-register").show()
//     });
//     $(".modal-close").click(function() {
//         $(".modal.modal-register").hide()
//     });
//     $(".link-login").click(function() {
//         $(".modal.modal-login").show()
//         $(".modal.modal-register").hide()
//     });
// });
//  Form Login
// $(document).ready(function() {
//     $("#right-login").click(function() {
//         $(".modal.modal-login").show()
//     });
//     $(".modal-close").click(function() {
//         $(".modal.modal-login").hide()
//     });
//     $(".link-register").click(function() {
//         $(".modal.modal-register").show()
//         $(".modal.modal-login").hide()
//     });
// });

//  Check Form Register
function checkRegister() {
    var userNameRegister = document.getElementById("username-register").value;
    var passWordRegister = document.getElementById("password-register").value;
    var passWordRepeatRegister = document.getElementById("repeat-password-register").value;

    if(userNameRegister == ""){
        alert("Vui lòng nhập tên đăng nhập");
        return false;
    }
    if(passWordRegister == ""){
        alert("Vui lòng nhập mật khẩu");
        return false;
    }

    if (passWordRegister.length < 6) {
        alert("Mật khẩu ít nhất 6 ký tự")
        return false;
    }
    if(passWordRepeatRegister == ""){
        alert("Vui lòng xác minh mật khẩu");
        return false;
    }
    if(passWordRegister != passWordRepeatRegister) {
        alert("Nhập Mật khẩu không trùng khớp")
        return false;
    }
    else
        alert("Đăng ký thành công")
    return true;
}
// Check Form Login
function checkLogin() {
    var userNameLogin = document.getElementById("username-login").value;
    var passWordLogin = document.getElementById("password-login").value;

    if(userNameLogin == ""){
        alert("Vui lòng nhập tên đăng nhập");
        return false;
    }
    if(passWordLogin == ""){
        alert("Vui lòng nhập mật khẩu");
        return false;
        }
    if (passWordLogin.length < 6) {
        alert("Sai mật khẩu (nhập mật khẩu > 6 ký tự)");
        return true;
        }
    else
        alert("Đăng nhập thành công")
    return true;

}

// Menu bar
$(document).ready(function() {
    $(".wrapper-icon").click(function() {
        $(".wrapper-lists").show()
        $(".form").hide()
        $(".menu-cart").hide()

    });
    $(".wrapper-icon").dblclick(function() {
        $(".wrapper-lists").hide()
        $(".form").show()

    });
});

