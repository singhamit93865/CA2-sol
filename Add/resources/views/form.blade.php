<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Sum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<center>
<h1>Find Sum</h1>
<form action="add" method="POST">
    @csrf
    <div class="form-group">
    <b>1st Number:</b>
       <input type="text" name="firstnumber" />
       @error('firstnumber')<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <br>
    <div class="form-group">
    <b>2nd Number:</b>
   <input type="text" name="secondnumber"/>
   @error('secondnumber')<span class="text-danger">{{$message}}</span>@enderror
   </div>
   <br>
    <button class="btn btn-primary" type="submit">Add</button>
   
</form>
</center>
</body>
</html>









