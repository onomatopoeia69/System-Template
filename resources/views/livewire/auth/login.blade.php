<div>

  {{-- first modal for login --}}

<div class="modal fade" id="exampleModalToggle" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"> 

      {{-- Header --}}
      <div class="modal-header border-0">
        <h5 class="modal-title fw-semibold" id="loginModalLabel">Login to Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='clearFields'></button>
      </div>

      {{-- Body --}}
      <div class="modal-body">
        <form wire:submit.prevent="inputLogin" class="needs-validation" novalidate>
          
          {{-- Email --}}
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email Address</label>
            <input type="email" id="loginEmail" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com" required>
            @error('email')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>

          {{-- Password --}}
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" id="loginPassword" wire:model="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" required>
            @error('password')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 text-end">
            <a href="#" class="small text-primary text-decoration-none" wire:click="clearFields" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" data-bs-dismiss="modal">
              Forgot Password?
            </a>
          </div>

          {{-- Login Button or Cooldown --}}
          <div class="mb-3">
            @if ($cooldown > 0)
              <button type="button" class="btn btn-secondary w-100" disabled>
                Please wait {{ $cooldown }}s
              </button>
            @else
              <button type="submit" class="btn btn-primary w-100">
                Login
              </button>
            @endif
          </div>

          {{-- Or Divider --}}
          <div class="text-center my-3">
            <span class="text-muted">OR</span>
          </div>

          {{-- Social Logins --}}
          <div class="mb-3">
            <button type="button" wire:click="redirectToGoogle" class="btn btn-outline-danger w-100 mb-2">
              <i class="bi bi-google me-1"></i> Sign in with Google
            </button>
            <button type="button" wire:click="redirectToFacebook" class="btn btn-outline-primary w-100">
              <i class="bi bi-facebook me-1"></i> Sign in with Facebook
            </button>
          </div>

          {{-- Register Switch --}}
          <div class="text-center mt-4">
            <small class="text-muted">
              Don't have an account?
              <a href="#" class="text-decoration-none" wire:click='clearFields' data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Sign up here</a>
            </small>
          </div>

        </form>
      </div>

      {{-- Optional footer (empty) --}}
      <div class="modal-footer border-0 pt-0"></div>

      {{-- Polling for cooldown --}}
      @if ($cooldown > 0)
        <div wire:poll.keep-alive.1000ms="decrementCooldown"></div>
      @endif

    </div>
  </div>
</div>

 {{-- livewire auth register component view. see.. views/livewire/auth/register --}}

  <livewire:auth.register />

{{-- first modal trigger for register --}}
<li><a href="#" class="hover:text-violet-300"  data-bs-target="#exampleModalToggle" data-bs-toggle="modal" >Login/Signup</a></li>

  @include('livewire.auth.forgotpassword')

</div>

