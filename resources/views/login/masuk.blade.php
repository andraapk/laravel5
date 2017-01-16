<!DOCTYPE html>
<html>
<body>

<form action="{{ route('masuk') }}" method="post">
  Username:<br>
  <input type="text" name="username" value="">
  <br>
  Password:<br>
  <input type="password" name="password" value="">
  <input type="hidden" name="_token" value="{{ Session::token() }}">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>