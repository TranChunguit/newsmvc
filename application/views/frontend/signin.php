<html>
	<head>
	<meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">         
	<link href="public/css/signin.css" rel="stylesheet" type="text/css"/>
	</head>
<body>

    <div class="container">

      <form class="form-signin" action="index.php?c=controlnews&m=signin" method="post">
        <h2 class="form-signin-heading">Please sign up</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="user">
        <input type="password" class="input-block-level" placeholder="Password" name="pass">
		<input type="text" class="input-block-level" placeholder="Email address" name="email"><br>     
        <button class="btn btn-large btn-primary" type="submit" name="signin">Sign up</button>
      </form>

    </div>
</html>