<!DOCTYPE html>
<html>
    <head>
        <title>
            Kalkulator
        </title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
    </head>
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
    border-right: none;
    border-left: none;
    border-radius: 5px;
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
    </style>
    <body>
            
      
      
        <form action="hasil.php" method="post">
            <table class="kalkulator">
                <tr>
                    <td>
                        Bilangan Pertama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bilangan_pertama">
                    </td>
                </tr>
                <tr>
                    <td>
                        Operasi
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="operasi">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bilangan Kedua
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bilangan_kedua">
                    </td>
                </tr>
                <tr >
                    <td colspan="3" class="tengah ">
                        <input type="submit" name="aksi" value="Hitung" class="tombol ">
                    </td>
                </tr>
          
</table>
        </form>
    
    </body>
</html>