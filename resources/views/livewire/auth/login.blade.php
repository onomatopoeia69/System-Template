<div>

  {{-- first modal for login --}}
<div class="modal fade" id="exampleModalToggle" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-gray-100"> 

      {{-- Header --}}
      <div class="modal-header border-0">
        <h5 class="modal-title fw-semibold text-black" id="loginModalLabel">Login to Your Account</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close" wire:click='clearFields'></button>
      </div>

      {{-- Body --}}
      <div class="modal-body">

        <form id="loginForm" wire:submit="inputLogin" class="needs-validation" novalidate>
          
          {{-- Email --}}
          <div class="form-floating mb-3">
            <input type="email" id="floatingInput" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com" required>
            <label for="floatingInput">Email address</label>
            @error('email')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>

          {{-- Password --}}
         <div class="form-floating position-relative mb-3">
          <input 
            type="password" 
            id="loginPassword" 
            wire:model="password" 
            class="form-control pe-5 @error('password') is-invalid @enderror" 
            placeholder="••••••••" 
            required
            data-password-input
          >
          <label for="loginPassword">Password</label>

          <!-- Eye icon -->
          <i 
            class="bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-3 text-secondary d-none" 
             id="eyeloginPassword"
            style="cursor: pointer;">
          </i>

          @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @enderror
        </div>


          <div class="mb-3 text-end">
            <a href="#" class="small text-primary text-decoration-none text-black fw-medium" wire:click="clearFields" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" data-bs-dismiss="modal">
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
              <button type="submit" wire:loading.attr="disabled" class="btn btn-warning fw-medium  w-100">
                 <span wire:loading.remove wire:target="inputLogin">Login</span>
               <div wire:loading wire:target="inputLogin" class="spinner-border spinner-border-sm" role="status">
              </div>
             </button>
            @endif
          </div>

          {{-- Or Divider --}}
          <div class="text-center my-3">
            <span class="fw-medium text-black">or</span>
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
            <small class="text-black fw-medium">
              Don't have an account?
              <a href="#" class="text-decoration-underline text-primary" wire:click='clearFields' data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register here</a>
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


  @include('livewire.auth.forgotpassword')

</div>

