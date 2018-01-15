<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="/Public/Home/resources/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
</head>
<body>

<form METHOD="post">
    手机号<input type="text" class="phone_num" name="phone"><br>
    验证码<input type="text" name="code" class="code">
    <input type="button" class="send_code" value="获取验证码" ><br>
    密码<input type="password" name="pwd"><br>
    确认密码<input type="password" name="chpwd"/><br>
    <input type="submit" name="commit" value="立即注册"/>
</form>


<script>
$("input[name='commit']").click(function () {
//    var phone = $("input[name='phone']").val();
//    var code = $("input[name='code']").val();
//    var pwd = $("input[name='pwd']").val();
//    var chpwd = $("input[name='chpwd']").val();
//    if(!phone || !code || !pwd || !chpwd ){
//        alert("请输入数据");
//        return false;
//    }
//    if(pwd !== chpwd){
//        alert('两次输入的密码不一样');
//        return false;
//    }

//    $.ajax({
//        url:"<?php echo U('Register/index');?>",
//        type:"post",
//        data:{"phone":phone,"code":code},
//        success:function (msg) {
//
//        }
//
//    })



})
//$(".send_code").click(function () {
//    var phone = $('.phone_num').val();
//    var code = $('.code').val();
//    if(phone.length ==0 ){
//        alert('手机号不能为空');
//        return false;
//    }else {
//        var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
//        if (!myreg.test(phone)) {
//            alert('请输入正确的手机号');
//            return false;
//        }
//    }
//        $.ajax({
//        url:"<?php echo U('Register/sendCode');?>",
//        type:"post",
//        data:{"phone":phone,"code":code},
////        dataType:"json",
//        success:function (msg) {
//            if(msg.indexOf('false')){
//                console.log(typeof(msg),msg);
//            }else {
//                alert('短信发送成功,请稍后');
//            }
//        }
//    })
//
//})

</script>
</body>
</html>