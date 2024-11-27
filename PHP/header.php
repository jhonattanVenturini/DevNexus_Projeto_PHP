<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Caribbean</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

body{
    background-color: rgb(200, 226, 248);
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
}
header{
  padding: 10px;
  width: 100%;
  background-color:rgb(6, 4, 102);
  display: inline-flex;
}
header img{
  margin-left: 10px;
  padding: 5px;
  width: 4%;
}
header h1{
margin: 10px;
  color: white;
}

.texto-inicial{
    text-align: center;
    padding: 20px;
}


  h2{
    margin-bottom: 15px;
    text-align: center;
    color:rgb(6, 4, 102) ;
  }


 
  @media screen and (max-width: 600px) 
  {
    header img{
        width: 15%;
    }
    .cards{
        margin:auto;
        margin-bottom: 20px;
    }
    .paises{
        padding-top: 15px;
    }
    .lugares-impar{
        flex-direction: column;
    }
    .lugares-impar img{
        margin:auto;
        width: 90%;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }
  }
    </style>
</head>
<body>
    <header>
        <img src="https://www.royalcaribbean.com/content/dam/royal/resources/new-logo-rcg/RCI_Crown%2BAnchor_Symbol_White.png" alt="">
        <h1>Royal Caribbean</h1>
    </header>
</body>
</html>

