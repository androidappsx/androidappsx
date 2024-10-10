[@MNQ@!DOCTYPE html>
@MNQ@html lang="en">
@MNQ@head>

    @MNQ@meta charset="UTF-8">
    @MNQ@meta http-equiv="X-UA-Compatible" content="IE=edge">
    @MNQ@meta name="viewport" content="width=device-width, initial-scale=1.0">
    @MNQ@link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@500&display=swap" rel="stylesheet">

    @MNQ@title>تسجيل الدخول@MNQ@/title>
    
@MNQ@style>
    body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
        }
		
        body * {
            pointer-events: auto;
        }
body {
    font-family: 'Alexandria', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #000;
	-webkit-tap-highlight-color: transparent;
}
form {
    text-align: center;
    animation: move 1s linear; /* تغيير مدة الانيميشن إلى 2 ثانية */
	-webkit-tap-highlight-color: transparent;
}
h1 {
    color: #fff;
    font-weight: bold;
	-webkit-tap-highlight-color: transparent;
}
h4 {
    color: #fff;
    font-weight: bold;
	-webkit-tap-highlight-color: transparent;
}
h3 {
    color: #0C1818;
    font-weight: bold;
	-webkit-tap-highlight-color: transparent;
}
input {
    padding: 13px; /* زيادة حجم الحقل */
    margin: 6px;
    outline: none;
    border: 3px solid #B31820;
    border-radius: 7px;
    width: 240px; /* زيادة عرض الحقل */
    border-radius: 10px;
	background-color: #1F0A1D;
    font-weight: bold;
	color: white;
	font-family: 'Alexandria', sans-serif;
	-webkit-tap-highlight-color: transparent;
}
input::placeholder {
    color: white;
	opacity: 60%;
	-webkit-tap-highlight-color: transparent;
}
input[type="button"@CC@MNQ@ {
    background-color: #042b2b;
    color: #fff;
    cursor: pointer;
	-webkit-tap-highlight-color: transparent;
}

#err {
    color: #7cde3d;
    font-size: bold;
	-webkit-tap-highlight-color: transparent;
}
@keyframes move {
    from {
        color: red;
        transform: rotateX(0deg);
    }
    to {
        color: gray;
        transform: rotateX(360deg);
    }
}
@MNQ@/style>
@MNQ@/head>
@MNQ@body>
    @MNQ@form action="" method="POST">
     



@MNQ@div style="text-align : center">
@MNQ@img style="border-radius: 35px;"src="https://www.mediafire.com/convkey/b419/sm1pac3yy05x1a13g.jpg" width="150" height="150px">@MNQ@/a>

    @MNQ@/div>
    
        
@MNQ@h4>أدخل الكود للأستخدام التطبيق@MNQ@/h4>     
        

@MNQ@input type="password" name="password" id="password" placeholder=" ادخل الكود  ">@MNQ@br>

        @MNQ@h4>@MNQ@p id="err">@MNQ@/p>@MNQ@/h4>
    
        @MNQ@input type="button" id="login" name="submit" value="تســـجيل الدخـــــول">@MNQ@br>@MNQ@br>
 

 
@MNQ@a href="https://t.me/houdatvapp/3" style="text-align: center;padding: 14px 25px;color:#ffffff;background:#1F0A1D;text-decoration:none!important;display: inline-block;border-radius: 10px;border: 3px solid #B31820;margin-bottom: 0px; -webkit-tap-highlight-color: transparent;">الحصول على الكود@MNQ@/a>
@MNQ@marquee behavior="scroll" direction="right" style="font-weight: bold">@MNQ@/marquee>


@MNQ@a href="go:COD" style="text-align: center;padding: 14px 25px;color:#ffffff;background:#1F0A1D;text-decoration:none!important;display: inline-block;border-radius: 10px;border: 3px solid #B31820;margin-bottom: 0px; -webkit-tap-highlight-color: transparent;">تحميل كود تفعيل@MNQ@/a>
@MNQ@marquee behavior="scroll" direction="right" style="font-weight: bold">@MNQ@/marquee>

   @MNQ@marquee behavior="scroll" direction="right" style="font-weight : bold">
    
  @MNQ@/marquee>
    

    @MNQ@/form>

    @MNQ@script>
    
  
        const pass = document.getElementById("password")
        const loginPass = '1122'; // كلمة المرور الصحيحة
        const login = localStorage.getItem("login")
        if (login === loginPass) {
            window.location.href = "go:home"; // التوجه إلى الصفحة المناسبة
        }

        document.getElementById("login").addEventListener('click', () => {
            if (pass.value === loginPass) {
                localStorage.setItem('login', loginPass);
                window.location.href = "go:home"; // التوجه إلى الصفحة المناسبة
            } else {
                document.getElementById("err").textContent = ",عذرا الكود الذي أدخلته غير صحيح"
         
           
     
            }
        })
  
 @MNQ@/script>
@MNQ@/body>
@MNQ@/html>]