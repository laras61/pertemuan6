<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>


<body>
<style>
.container {
  width:100%;
  height:100vh;
  display:flex;
 justify-content:center;
 align-items:center;
}


.box {
  border:2px solid lightskyblue;
  width:50%;
  padding:20px;
  
}

input {
    margin-bottom:10px;
    height:35px;
}

button {
  width:100px;
  height:35px;
  background:lightskyblue;
  margin-left:5px;
  margin-right:5px;
  border-radius:10px;
  /* border:none; */
  /* cursor: pointer; */
  
 
}


</style>

    <div class="container">
        <div class="box">
        <center><h1>Login</h1></center>                   
          
          <hr style="width:100px;">
          <br>
          <br>
            <div style="display:flex;flex-direction:column;padding:20px;">
              <input type="text" placeholder=" Username">
              
          <input type="password" placeholder=" Password">
            </div>
          
          
          <br>
          
          <div style="display:flex;justify-content:center;">
              <button>Submit</button>
              <button>Reset</button>
          </div>
          <br>
        </div>
      
    </div>
  
</body>
</html>