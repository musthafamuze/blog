<html>
<head>
<title>Reg form  </title>
</head>
    <body>
        <form method="post" action="/calc">
            enter number 1<input type="text" name="number1" > <br/>
            enter number 2<input type="text" name="number2" > <br/>
            <input type="submit" value="add">
            {{csrf_field()}}
        </form>
    </body>




</html>