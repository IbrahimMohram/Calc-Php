<html lang="en">
<head>
<title>Calculate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>calculate</title>
</head>
<body>
  <form method="GET" action="handle-calculate.php" class="w-50 border p-3 m-auto">
  <div class="form-group">
        <label for="">First number</label>
        <input type="text" name="firstnumber" value="" placeholder="Enter first number" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Second number</label>
        <input type="text" name="secondnumber" value="" placeholder="Enter second number" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Choose operation</label>
          <select name="op" id="operation"  class="form-control">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">division</option>
                <option value="mul">multiplication</option>
          </select>
        </div>
        <button class="btn btn-danger " type="submit" name="calc">Calc</button>
    </form>
    <!-- 
            Q1) the suitable request method is "get" because data is not important to protect it in this Case
    -->

</body>
</html>