<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/70c682a6d6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">

<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
.card{
  position: relative;
  width: 600px;
  height: 350px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  transition: 0.5s;
}
.card .circle{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  overflow: hidden;
}
.card .circle::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #d83133;
  clip-path: circle(120px at center);
  transition: 0.5s;
}
.card:hover .circle::before{
  background: #0065c3;
  clip-path: circle(400px at center);
}
.card img{
  position: absolute;
  top: 58%;
  left: 50%;
  transform: translate(-50%,-50%);
  height: 300px;
  pointer-events: none;
  transition: 0.5s;
}
.card:hover img{
  left: 78%;
  height: 400px;
}
.card .content{
  position: relative;
  width: 50%;
  left: 20%;
  padding: 20px 20px 20px 40px;
  transition: 0.5s;
  opacity: 0;
  visibility: hidden;
}
.card:hover .content{
  left: 0;
  opacity: 1;
  visibility: visible;
}
.card .content h2{
  color: #fff;
  text-transform: uppercase;
  font-size: 2em;
  line-height: 1em;
  margin-bottom: 5px;
}
.card .content h3{
  color: #fff;
  text-transform: uppercase;
  font-size: 1em;
  margin-bottom: 10px;
  font-weight: 700;
}
.card .content p{
  color: #fff;
}
.card .content a{
  position: relative;
  color: #fff;
  padding: 10px 20px;
  border-radius: 10px;
  background: #fff;
  color: #111;
  margin-top: 10px;
  display: inline-block;
  text-decoration: none;
  font-weight: 700;
  transition: 0.5s;
}
</style>

</head>

<body>

  <div class="card">
    <div class="circle"></div>
    <div class="content">
      <h2>Pepsi</h2>
      <h3>Zero Sugar</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="">Buy Now</a>
    </div>
    <img src="https://www.pepsi.com/en-us/uploads/images/can-pzs.png" alt="">
  </div>

</body>

</html>