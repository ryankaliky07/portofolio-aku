<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Ryan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">
  <form method="POST" action="{{ route('login.process') }}" class="login-card">
    @csrf

    <h2>Welcome Back 👋</h2>
    <p>Silakan login untuk melanjutkan</p>

    @if ($errors->any())
      <div class="error">
        {{ $errors->first() }}
      </div>
    @endif

    <div class="input-group">
      <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="input-group">
      <input type="password" name="password" placeholder="Password" required>
    </div>

    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>
