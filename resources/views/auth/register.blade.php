<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">Sign Up</h3>

            {{-- livewire auth login component view. see.. views/livewire/auth/register :) --}}
            <livewire:auth.register></livewire:auth.register>
            


            <div class="text-center mb-3">
              <span class="text-muted">or</span>
            </div>
            <div class="mb-3">
              <a href="/auth/google/redirect" class="btn btn-outline-danger w-100 mb-2">
                <i class="bi bi-google"></i> Sign up with Google
              </a>
              <a href="/auth/facebook/redirect" class="btn btn-outline-primary w-100">
                <i class="bi bi-facebook"></i> Sign up with Facebook
              </a>
            </div>
            <div class="mt-3 text-center">
              <small>Already have an account? <a href="/login" class="text-primary">Login here</a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>