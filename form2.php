<!DOCTYPE html>
<html> 
    <head>
         <title>Luas Segitiga</title>
    </head>
    <body>
         <form action="segitiga.php" method="post">  
             <table>
                  <tr>
                     <td>
                        <label>Alas</label> 
                        <br>
                        <input type="text" name="alas">   
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Tinggi</label>
                        <br>
                        <input type="text" name="tinggi"> 
                     </td>
                  </tr>
                  <tr>
                      <td>
                        <input type="submit" name="luas" value="Cari Luas">  
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <?php echo "Luas segitiga nya adalah: $luas"; ?>  
                      </td>
                  </tr>
            </table>
        </form> 
    </body>
</html>