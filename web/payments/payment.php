<!DOCTYPE html>
<html>
    <head>
        <title>Payment Succsss</title>
        <!-- Include Bootstrap CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }

            body{
                background-image: url("https://www.astound.com/wp-content/uploads/2022/11/netflix-hero-200x600-darker-1.webp");
                background-color: black;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center ;
            
            }
            

            .verify{
                width: 360px;
                height: min-content;
                padding: 20px;
                border-radius: 12px;
                background-color:#fff;
                
            }

            .verify h1{
                font-size: 36px;
                margin-bottom: 25px;
            }

            .verify form {
                font-size: 20px;

            }

            .verify form .form-group{
                margin-bottom: 12px;
            }

            .login form input [type="submit"]{
                font-size: 20px;
                margin-top: 15px; 
            }
            .Popup{
                width: 400px;
                background-color:#fff;
                border-radius: 6px;
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%,-50%) scale(0.1);
                text-align: center;
                padding: 0 30px 30px;
                color: #333;
                visibility: hidden;
                transition: transform 0.4s, top 0.4s;
            }
            .open-popup{
                visibility: visible;
                top: 50%;
                transform: translate(-50%,-50%) scale(1);
            }
             .Popup h2{
                font-size: 38px;
                font-weight: 500;
                margin: 30px 0 10px;
             }
             .Popup button{
                width: 100%;
                margin-top: 50px;
                padding: 10px 0;
                color: #fff;
                font-size: 18px;
                border-radius: 4px;
                cursor: pointer;
             }
        </style>
    </head>
    <body>
        <div class="verify">
          
            <h1 class="text-center">Password Verification</h1>
          
            <form class="validate was-validated">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"> <?php echo $password_err; ?> </span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" onclick="openPopup()" value="Confirm">
                    <div class="Popup" id="popupID">
                        <h2>Payment Successful</h2>
                        <p>Your movie has been successfully purchased.</p>
                        <button type="button" class="btn btn-success btn-block" onclick="closePopup(); window.location.href = '/web/watch/movie-details.php?movieid=1';">Confirm</button>
                    </div>
                </div>
            </form>
        
        </div>
        <script>
            let popup =document.getElementById("popupID");
            function openPopup(){
               popup.classList.add("open-popup");  
            }
            function closePopup(){
               popup.classList.remove("open-popup");  
            }
        </script>
    </body>
</html>