<html>
    <head>
        <title>Hitung Skala</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="google.ico" type="image-icon" />
        <style type="text/css">
            #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:white; padding-bottom: 20px; margin-bottom: 15px;}

            body{padding:0;margin:0;font-family:arial;font-size:12px;}

            #depan {
            background: #3b77f7;
            border-radius: 15px;
            box-shadow: 1px 6px 8px rgba(0, 0, 0, 0.65);
            margin: 6rem auto 8.1rem auto;
            width: 550px;}

            #judul{
              text-align:left;padding:5px;background:#3b77f7;}

            table{font-size:12px;width:450px;}

            .dipencet {display: inline-block; padding: 8px 0px; font-size: 14px; margin-bottom: 5px; width: 55%; text-transform: uppercase; outline: none; color: #fff; background-color: #1553b9; border: none; text-align: center; position: relative; border-radius: 5px; box-shadow: 0 5px #357ae8; cursor: pointer; font-weight: bold;} 
            .dipencet:hover {background-color: #a8a7a7} 
            .dipencet:active {background-color: #1553b9; box-shadow: 0 5px #1553b9; transform: translateY(4px); transition: all 0.3s;} 
            .dipencet a:visited {color: #fff; text-decoration: none;} 
            .dipencet a:link {color: #fff; text-decoration: none; outline: none; transition: all 0.3s;}

            h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
            
            .tbtl {
            width: auto;
            padding: 9px;
            outline: #00bfff;
            border-radius: 5px;
            }

        </style>
    </head>
    <body>
        <div id="depan" >
            <div id="judul">
                <h1 style="font-family: Comic Sans MS, cursive, sans-serif; color: white;">Hitung Skala</h1>
                <form method="POST" action="">                
                <table align="center" style="padding-left: 140px;">
                        <tr>
                            <td><input placeholder="Jarak pada Peta" type="text" name="jp" class="tbtl" required /><a style="font-weight: bold; color: white;"> Cm</a></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Jarak Sebenarnya" type="text" name="js" class="tbtl" required /><a style="font-weight: bold; color: white;"> Cm</a></td>
                        </tr>
                        <tr>
                            <td>
                            <label><br>
                                <input type="submit" name="Submit" value="Hitung" class="dipencet">
                            </label>
                            <label>
                             <a href="./">Home</a>
                            </label>
                            </td>
                            <td></td>
                        </tr>
                        <?php
              error_reporting (0);
              
              $Jp = $_POST['jp'];
              $Js = $_POST['js'];
                         
              $Skala = $Jp/$Jp;
              $Skala1 = $Js/$Jp;
              ?>
                        <tr>
                            <td><input placeholder="Hasil" value="<?php echo $Skala; echo' : '; echo $Skala1 ?>" type="text" class="tbtl" disabled/><a style="font-weight: bold; color: white;"> Cm</a></td>
                        </tr>
                    </table>
                </form>
                <div id="hasil" style="text-align: center;">
               <?php
              echo 'Jadi, skala peta adalah ';echo number_format($Skala,0,",",".");echo' '; echo' banding ';echo number_format($Skala1,0,",",".");echo' Cm';
              ?><br>
              </div>
            </div>
        </div>
    </body>
    </html>
