<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Login </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url('image/login_bg.jpg');
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  
}
.container{
  position: relative;
  max-width: 400px;
  width: 100%;
  background: #fff;
  padding: 60px 30px;
  box-shadow: 10px 10px 10px rgba(0,0,0,0.2);
  border-radius: 10px;
  perspective: 2700px;
}

.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
  
}
.container .form-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form-content .login-form{
  width: calc(100%);
}

.forms .form-content .title{
  position: relative;
  text-align: center;
  font-size: 30px;
  font-weight: 600;
  color: #1c2c85;
}

.forms .form-content .input-boxes{
  margin-top: 30px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #1c2c85;
}
.form-content .input-box i{
  position: absolute;
  color: #1c2c85;
  font-size: 17px;
  
}

.form-content .input-box span{
    position: absolute;
    font-size: 17px;
    margin-left: 91%;
    margin-bottom: 5%;
   
  }
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .text a{
  text-decoration: none;
}
.forms .form-content .text a:hover{
  text-decoration: underline;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #fff;
  background: #1c2c85;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}

.forms .form-content .alert span{
  font-size: 12px;
  font-weight: 500;
  color: rgb(247, 26, 26);
}
.forms .form-content .button input:hover{
  background: #1c2c85;
}
.forms .form-content label{
  color: #1c2c85;
  cursor: pointer;
}
.forms .form-content label:hover{
  text-decoration: underline;
}
.forms .form-content .login-text{
  text-align: center;
  margin-top: 25px;
}

@media (max-width: 10px) {
  .container {
    width: calc(100%);
    display: fixed;
  }
  .form-content .login-form{
    width: 100%;
  }

}


    </style>
   </head>
<body>
  <div class="container">
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">LOGIN</div>
          <form action="" method="post" name="Login_Form">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name = "email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id ="confirm_pw" name = "password" placeholder="Enter your password" required>
                <span class="show-btn"><i class="fas fa-eye show"></i></span>
              </div>
              <div class="button input-box">
                <input type="submit" id ="submit" name= "login" value="Submit" onclick ="myFunction()">
              </div>
            </div>
        </form>  
    </div>
    </div>
    </div>
  </div>

  <script>
   const createPw = document.querySelector("#confirm_pw"),
   confirmPw = document.querySelector("#confirm_pw"),
   pwShow = document.querySelector(".show"),
   alertIcon = document.querySelector(".error"),
   alertText= document.querySelector(".text"),
   submitBtn = document.querySelector("#submit");

   pwShow.addEventListener("click", ()=>{
     if((createPw.type === "password") && (confirmPw.type === "password")){
       createPw.type = "text";
       confirmPw.type = "text";
       pwShow.classList.replace("fa-eye","fa-eye-slash");
       
     }else {
       createPw.type = "password";
       confirmPw.type = "password";
       pwShow.classList.replace("fa-eye-slash","fa-eye");
     }
   });

   submitBtn.addEventListener("click", ()=>{
   if(confirmPw.value == " "){
     alertText.innerText = "Wrong Username or Password";
     alertIcon.style.display = "block";
     alertText.style.color = "#D93025";
   }
  });
 
    </script>
</body>
</html>
