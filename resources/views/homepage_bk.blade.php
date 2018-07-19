<html>
<head>
<!-- <link herf="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" > -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<style type="text/css">
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-image: url("{{asset('images/lunch_blur_bg.png')}}");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
body:after {
    /* background: -webkit-linear-gradient(top, #a54f2c, #d26234); */
}
.fore-background {
    width: 100%;
    height: 100%;
    text-align: center;
    /* opacity: 0.8; */
    /* background: -webkit-linear-gradient(top, #a54f2c, #d26234);
    background-attachment: fixed; */
}
.feature-img:nth-child(1), .feature-img:nth-child(2) {
    width: 40%;
} 
.feature-img {
    width: 25%;
    float: left;
    margin-top: 10%;
}
img {
    width: 100%;
}

</style>
</head>

<body>
<!-- <div class="fore-background col-md-12"> -->
    
   
<!-- </div> -->
<div class="feature-img col-md-6">
    <img src="{{asset('images/food1.jpg')}}">
    <div class="text-area">Title</div>
</div>
<div class="feature-img col-md-6">
    <img src="{{asset('images/food2.jpg')}}">
    <div class="text-area">Title</div>
</div>
<div class="feature-img col-md-4">
    <img src="{{asset('images/food3.jpg')}}">
    <div class="text-area">Title</div>
</div>
<div class="feature-img col-md-4">
    <img src="{{asset('images/food4.jpg')}}">
    <div class="text-area">Title</div>
</div>
<div class="feature-img col-md-4">
    <img src="{{asset('images/food1.jpg')}}">
    <div class="text-area">Title</div>
</div>
</body>
</html>