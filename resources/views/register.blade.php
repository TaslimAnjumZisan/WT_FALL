<html>
    <title>Register</title>
<body>
<h1>Registration</h1>
<form action="/register" method="post">
{{csrf_field()}}
Your name is <input type="text" name="name">
@if ($errors->has('name'))
<b>{{$errors->first('name')}}</b>
@endif
<br><br>
Your contact no is <input type="text" name="contact">
@if ($errors->has('contact'))
<b>{{$errors->first('contact')}}</b>
@endif
<br><br>
Your gender is <input type="radio" name="gender" value="male">Male
  <input type="radio"  name="gender" value="female">Female
@if ($errors->has('gender'))
<b>{{$errors->first('gender')}}</b>
@endif
<br><br>
Your password is <input type="text" name="password">
@if ($errors->has('password'))
<b>{{$errors->first('password')}}</b>
@endif
<br><br>
Your file is <input type="file" name="file" >
@if ($errors->has('file'))
<b>{{$errors->first('file')}}</b>
@endif
<br><br>

<input type="submit" value="Register"> <br> <br><br>
</form>
</body>
</html>