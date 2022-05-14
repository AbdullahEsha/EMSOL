<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
         <div class="fadeIn first">
          <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" id="icon" alt="User Icon" />
        </div> 
        <br />
        <p class="text-success">
          {{session('msg')}}
        </p>
        <p class="text-danger">
          {{session('error')}}
        </p>
        @if (count($errors) > 0)
          <p class="text-danger">
            @foreach ($errors->all() as $error)
              {{ $error }}<br>
            @endforeach
          </p>
        @endif
    
        <!-- Login Form -->
        <form method='POST' action="" enctype= multipart/form-data>
          @csrf
          <input type="text" id="login" class="fadeIn second" name="common" placeholder="Enter your email/phone ..." required>
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter your password" required>
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="/" style="text-decoration: none;">Go back to home...</a>
        </div>
    
      </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>