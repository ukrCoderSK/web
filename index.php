<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="index_main_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1 id="logo">Кращі автомобілі світу</h1>
        <hr />
    </header>
    <h2><a href='index_main.php'>Вибрати автомобіль</a></h2>

    <center>
        <img src = "fotoavto/bmw/1.jpg" width = "800" height = "450"  id = "img" > </img> <br />
        <img src = "fotoavto/back.png"   onClick = "javascript: left_arrow()" /> 
	    <img src = "fotoavto/next.png"  onClick = "javascript: right_arrow()" />
    </center>

    <script>
        var mas = ["fotoavto/bmw/1.jpg","fotoavto/mersedes/2.jpg","fotoavto/tesla/tesla3.jpg"] // массив картинок
        var to = -1;  // Лічильник картинок

        function right_arrow() // Видкриття наступної
        { 
        var obj = document.getElementById("img");
        if (to < mas.length-1)  to++ 
        else
            to = 0;
            obj.src = mas[to];	 
        }

        function left_arrow() // Відкриття попередньої
        {     
        var obj = document.getElementById("img");
        if (to > 0) to--;
        else
            to = mas.length-1;
            obj.src = mas[to];	  			 
        }
    </script>
</body>
</html>