<div>
    <div class="auth-box">
    <h4 class="mb-4 text-center">Login</h4>

    <form wire:submit.prevent="inputLogin">

        <div class="mb-3">
            <input type="email" wire:model="email" class="form-control" placeholder="Email" />
        </div>
        
          @error('email')
          <div>{{$message}}</div>
          @enderror

        <div class="mb-3">
            <input type="password" wire:model="password" class="form-control" placeholder="Password" />
        </div>

        @if ($cooldown > 0)
            <button type="button" class="btn btn-secondary w-100" disabled>
                Try again in {{ $cooldown }}s
            </button>
        @else
            <button type="submit" class="btn btn-primary w-100">
                Login
            </button>
        @endif

       <div class="text-center mb-3">
              <span class="text-muted">or</span>
            </div>
             <div class="mb-3">
              <a  wire:click="redirectToGoogle" class="btn btn-outline-danger w-100 mb-2">
                <i class="bi bi-google"></i> Login with Google
              </a>
              <a wire:click="redirectToFacebook" class="btn btn-outline-primary w-100">
                <i class="bi bi-facebook"></i> Login with Facebook
              </a>
        </div>
    </form>


    @if ($cooldown > 0)
        <div wire:poll.keep-alive.1000ms="decrementCooldown"></div>
    @endif


    <div class="text-center mt-3">
      <small>Don't have an account? <a href="/register">Sign up</a></small>
    </div>
  </div>
</div>
