<!DOCTYPE html>
<html>
<head>
  <title>cinehome: Payment</title>
  <!-- Include Bootstrap CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <style>
    body {
        background-image: url("https://www.astound.com/wp-content/uploads/2022/11/netflix-hero-200x600-darker-1.webp");
      background-color: black;
    }
    h3{
        color: white;
    }
    .paymentMethod {
      position:relative;
      margin-bottom:15px;
    }
    .paymentMethod input[type="radio"] {
      position:absolute;
      left:0;
      top:0;
      visibility:hidden;
    }
    .paymentMethod label {
      display:block;
      background-color:#fff;
      border:1px solid #ddd;
      padding:5px;
      position:relative;
      cursor:pointer;
      margin-bottom: 10px;
      border-radius: 10px;
    }
    .paymentMethod label:before {
      content:"";
      background-color:#fff;
      border:1px solid #ddd;
      display:inline-block;
      position:absolute;
      left:0;
      top:-1px;
      bottom:-1px;
      width:99%;
      height:102%;
      padding:5px;
      z-index:2;
      border-radius: 10px;
    }
    .paymentMethod input[type="radio"]:checked + label:after {
      content:"";
      width:13px;
      height:13px;
      border-radius:20px;
      border:3px solid #00ff00;
      background-color:#00ff00;
      position:absolute;
      top:6px;
      left:6px;
      font-size:22px;
      line-height:10px;
      color:green;
      text-align:center;
      padding:3px;
      z-index:3;
      -webkit-transition:all .1s ease;
      -moz-transition:all .1s ease;
      -ms-transition:all .1s ease;
      -o-transition:all .1s ease;
      transition:all .1s ease;
    }
    .paymentMethod input[type="radio"]:checked + label:before {
      background-color:#00ff00;
      border-color:#00cc00;
      -webkit-transition:all .1s ease;
      -moz-transition:all .1s ease;
      -ms-transition:all .1s ease;
      -o-transition:all .1s ease;
      transition:all .1s ease;
    }
    .paymentMethod:last-child {
      margin-bottom:0;
    }

    /* Payment Method Icons */
    .method {
      text-align: center;
    }
    .method img {
      max-width: 100%;
      height: 100px; /* Adjust the height as needed */
    }

    .options-container {
      background-color: white;
      padding: 20px;
      border-radius: 10px; 
    }

    .footerNavWrap {
      margin-top: 20px;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="paymentCont">
        <div class="headingWrap">
          <h3 class="headingTop text-center">Select Your Payment Method</h3>
        </div>
        <div class="paymentWrap">
          <div class="options-container">
            <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
              <label class="btn paymentMethod active">
                <div class="method">
                  <img src="https://cdn.freebiesupply.com/logos/large/2x/visa-logo-png-transparent.png" alt="Visa Card Logo">
                </div>
                <input type="radio" name="options" checked> 
              </label>
              <label class="btn paymentMethod">
                <div class="method">
                  <img src="https://ww1.freelogovectors.net/wp-content/uploads/2023/05/gcash-logo-freelogovectors.net_.png?lossy=1&w=2560&ssl=1" alt="Gcash">
                </div>
                <input type="radio" name="options"> 
              </label>
              <label class="btn paymentMethod">
                <div class="method">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/PayMaya_Logo.png/1200px-PayMaya_Logo.png?20190821193452" alt="Paymaya">
                </div>
                <input type="radio" name="options">
              </label>
              <label class="btn paymentMethod">
                <div class="method">
                  <img src="https://www.seekpng.com/png/full/133-1339702_online-banking-icon-png.png" alt="Online Banking">
                </div>
                <input type="radio" name="options">
              </label>
            </div>
          </div>
        </div>
        <div class="footerNavWrap clearfix">
          <button type="button" class="btn btn-success pull-left btn-fyi" onclick="window.location.href = '/web/watch/home.php';"><span class="glyphicon glyphicon-chevron-left"></span> RETURN</button>
          <button type="button" class="btn btn-success pull-right btn-fyi" onclick="window.location.href = 'payment.php';">PROCEED<span class="glyphicon glyphicon-chevron-right"></span></button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
