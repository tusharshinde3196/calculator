<?php require"calculate.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">    
    <title>Calculator</title>
</head>
<body>
    <div class="jumbotron" style="background: radial-gradient(circle, rgba(252,162,110,1) 1%, rgba(115,250,246,1) 100%)">
    <h1 style="font-family:initial">Simple Calculator using PHP</h1>
      <form action=" " method="post">
        <input class="form-control" type="number" step=0.01 name="number1" id="number1"  placeholder="Enter first no." required>
        <select class="btn btn-secondary" name="operator">
               <option value="Add">Add</option>
               <option value="Substract">Substract</option>
               <option value="Multiply">Multiply</option>
               <option value="Divide">Divide</option>
            </select>
        <input class="form-control" type="number" step=0.001 name="number2" id="number2" placeholder="Enter second no." required>
       
        <p>=<input class="form-control" type="text" name="result" id="result"  value="<?php echo $result?>"></p>
        <br/>
        <button class="btn btn-success" type="submit" name="submit">Calculate!</button>
      </form>
    </div>
    
</body>
</html>