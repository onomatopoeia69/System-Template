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

        <div class="d-flex align-items-center my-3">
        <hr class="flex-grow-1">
        <span class="mx-2 text-muted">or</span>
        <hr class="flex-grow-1">
      </div>

        <a wire:click="redirectToGoogle"  class="btn google-btn w-100">
        <img src="https://img.icons8.com/color/16/000000/google-logo.png" />
        Login with Google
      </a>

    </form>


    @if ($cooldown > 0)
        <div wire:poll.keep-alive.1000ms="decrementCooldown"></div>
    @endif


    <div class="text-center mt-3">
      <small>Don't have an account? <a href="/register">Sign up</a></small>
    </div>
  </div>
</div>
