<!DOCTYPE html>
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="google.ico" type="image-icon" />   
    <style>
    #depan {
    background: #3b77f7;
    border-radius: 15px;
    box-shadow: 1px 6px 8px rgba(0, 0, 0, 0.65);
    height: 410px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;}

    #depan-1 {
      padding: 12px 44px;
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 2px;
      text-align: center;
      color: white;
    }

    #judul {
      font-family: "Comic Sans MS", cursive, sans-serif;
      color: white;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 2px;
      text-align: center;}

    .dipencet {display: inline-block; padding: 8px 0px; font-size: 14px; margin-bottom: 5px; width: 100%; text-transform: uppercase; outline: none; color: #fff; background-color: #a8a7a7; border: none; text-align: center; position: relative; border-radius: 5px; box-shadow: 0 5px #357ae8; cursor: pointer; font-weight: bold;} 
    .dipencet:hover {background-color: #1553b9} 
    .dipencet:active {background-color: #1553b9; box-shadow: 0 5px #1553b9; transform: translateY(4px); transition: all 0.3s;} 
    .dipencet a:visited {color: #fff; text-decoration: none;} 
    .dipencet a:link {color: #fff; text-decoration: none; outline: none; transition: all 0.3s;}

    .tbtl {
    width: auto;
    padding: 9px;
    outline: #00bfff;
    border-radius: 5px;
  }

</style>
</head>

<body>
    <div id="depan">
        <div id="depan-1">
        <br><br>
          <div id="judul">
            <form action="Skala.php" method="post">
            <h2 style="color: white;">MENU</h2>
            <button class="dipencet" onclick="AnimationEffect"><b>Skala</b></button>
            </form>
            <form action="Js.php" method="post">
            <button class="dipencet" onclick="AnimationEffect"><b>Jarak Sebenarnya</b></button>
            </form>
            <form action="Jp.php" method="post">
            <button class="dipencet" onclick="AnimationEffect"><b>Jarak pada Peta</b></button>
            </form>
            </div>
            <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #a8a7a7;">Design By</a><br><a style="font-family: Comic Sans MS, cursive, sans-serif;">Irfan Rahmat</a>
        </div>
    </div>
</body>

</html> 