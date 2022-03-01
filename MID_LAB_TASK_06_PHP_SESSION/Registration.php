<?php
    session_start();
    if(isset($_SESSION['status'])){

?>

<html>
  <head></head>
    <body>
      <fieldset >
        <table  style="width:100%">
          <tr>
            <td colspan="2"><left>
          <table width="100%">
             <tr>
                <td>
                  <h1>X company</h1>
                </td>
                <td align ="right">
                    <a href="Home.php">Home</a>
                    <a> | </a>
                    <a href="Login.php">Login</a>
                    <a> | </a>
                    <a href="Registration.php">Registration</a>
                </td>
             </tr>
          </table>
             </td>  
          </tr>
       </table>
    </fieldset>

      <fieldset>          
          <form method="post" action=" Registration Check.php">
             <fieldset >
                <legend><h2>REGISTRATION</h2></legend>
                 
                  <table height="400px" width="50px">
                    <tr>
                      <td>Name: </td>
                      <td><input type="text" name="myname" value="" /> </td>
                    </tr>

                    <tr>
                       <td>Email: </td>
                       <td><input type="email" name="email" value=""> </td>
                    </tr>
                    <tr>
                       <td>Username: </td>
                       <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="Confirm password" name="Confirm password" value=""></td>
                    </tr>
                  
                    <tr>
                      <td colspan="2">
                      <fieldset><legend>Gender </legend>  
                          <input type="radio" name="gender" value=""> Male
                          <input type="radio" name="gender" value=""> Female
                          <input type="radio" name="gender" value=""> Othes
                    </fieldset></td>
                   </tr>
                   <tr>
                    <td>
                   <fieldset style="width:70%">
                       <legend>DATE OF BIRTH</legend>
                          <table >
                              <tr>
                               <td><input  type="value" > </td>
                               <td> / </td>
                               <td><input  type="value" > </td>
                               <td> / </td>
                               <td><input  type="value" > </td>
                               <td> (dd/mm/yyyy) </td>
                              </tr>
                            </table>
                       </fieldset>
                     </td>
                    </tr>
        
                    <tr>
                      <td colspan="2" align="right">
                          <input type="submit" name="submit" value="Submit">
                          <input type="reset" name="reset" value="Reset">
                      </td>
                    </tr>
                  </table>  
              </fieldset>
           </form>
       </fieldset>
   <fieldset>
      <center>Copyright@ 2017</center>
    </fieldset>
  </body>
</html>

<?php
     }else {
        echo "Invalid Request";
   }

?>