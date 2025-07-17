<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .auth-box {
      max-width: 400px;
      margin: auto;
      margin-top: 80px;
      padding: 30px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .google-btn {
      background-color: #db4437;
      color: white;
    }
    .google-btn img {
      margin-right: 8px;
    }

      .facebook-btn {
    background-color: #3b5998;
    color: white;
  }

  .google-btn img,
  .facebook-btn img {
    margin-right: 8px;
  }
  
  </style>
</head>
<body>

   {{-- livewire auth login component view. see.. views/livewire/auth/login --}}
    <livewire:auth.login></livewire:auth.login> 
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
