<?php

    function menghitung($bilangan_pertama,$operasi,$bilangan_kedua){
    
        if($operasi=="+"){
            $hasil  = $bilangan_pertama+$bilangan_kedua;
        }
        else if($operasi=="-"){
            $hasil  = $bilangan_pertama-$bilangan_kedua;
        }
        else if($operasi=="*"){
            $hasil  = $bilangan_pertama*$bilangan_kedua;
        }
        else if($operasi=="/"){
            $hasil  = $bilangan_pertama/$bilangan_kedua;
        }
        else{
            $hasil  = "Operasi Salah";
        }
        
        return $hasil;
    }
    
    $bilangan_pertama   = $_POST["bilangan_pertama"];
    $operasi            = $_POST["operasi"];
    $bilangan_kedua     = $_POST["bilangan_kedua"];

    if(isset($_POST["aksi"])&&($_POST["aksi"]=="Hitung")){
        $hasil          = menghitung($bilangan_pertama,$operasi,$bilangan_kedua);
    }
    
?>
<!DOCTYPE html>
<html>
    <head>

        <title class="kalkulator">
            Hasil
        </title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
        <style type="text/css">
           


            body{
    background: #F2F2F2;
    font-family: sans-serif;
}

.kalkulator{
    width: 335px;
    background: #2F495A;
    margin: 100px auto;
    padding: 10px 20px 50px 20px;
    border-radius: 5px;
    box-shadow: 0px 10px 20px 0px #D1D1D1;
}

.bil{
    width: 300px;
    margin: 5px;
    border: none;
    font-size: 16pt;
    border-radius: 5px;
    padding: 10px;  
}

.opt{
    font-size: 16pt;
    border: none;
    width: 215px;
    margin: 5px;
    border-radius: 5px;
    padding: 10px;
}

.tombol{
    background: #EC5159;
    border-top: none;
    border-right: 5px;
    border-left: none;
    border-radius: 4px;
    padding: 10px 20px;
    color: #eee;
    font-size: 15pt;
    border-bottom:4px solid #BF3D3D;
}

.brand{
    color: #eee;
    font-size: 11pt;
    float: right;
    text-decoration: none;
    margin: 12px;
}

.judul{
    text-align: center;
    color: #eee;
    font-weight: normal;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-bottom:4px solid #BF3D3D;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
        </style>
    </head>
    <body>
         <form action="hasil.php" method="post">
            <table class="kalkulator">

        <tr>
            <td> Hasil Perhitungan </td>
        </tr>
           
             
           <tr>
               <td>
            <?php echo $bilangan_pertama;?>
            <?php echo $operasi;?>
            <?php echo $bilangan_kedua;?>
            =
            <?php echo $hasil;?>
            <br>
        
               </td>
           </tr>
           <tr>
            <td>
                <td>
                                   <a class="tombol"   href="kalkulator1.php">
                Kembali 
            </a>
            
               </td>
            </td>
               
           </tr>
            

            
        </h1>
    </table>
</form>
        
    </body>
</html>