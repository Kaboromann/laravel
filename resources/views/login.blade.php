<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color:  #ffc107;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-top: 0;
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 10px;
      border-radius: 3px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #0069d9;
    }

    p {
      text-align: center;
      margin-top: 10px;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

    .error-message {
      color: #dc3545;
      margin-bottom: 10px;
    }

    .success {
      color: #28a745;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="login-form" class="form" action="{{ route('login') }}" method="POST">
      @csrf
      <h2>Login</h2>
      @if(Session::has('success'))
      <div class="success">{{ Session::get('success') }}</div>
      @endif
      @if(Session::has('fail'))
      <div class="success">{{ Session::get('fail') }}</div>
      @endif

      <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
      <span class="error-message">@error('email') {{ $message }} @enderror</span>
      <input type="password" name="password" placeholder="Password">
      <span class="error-message">@error('password') {{ $message }} @enderror</span>
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="{{ '/register' }}">Register</a></p>
    </form>
  </div>
</body>
</html>
