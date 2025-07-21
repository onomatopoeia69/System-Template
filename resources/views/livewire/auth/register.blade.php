<div>
  
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" wire:ignore.self>
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

     {{-- Header --}}
      <div class="modal-header border-0">
        <h5 class="modal-title fw-semibold" id="loginModalLabel">Register for Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="clearFields"></button>
      </div>

      {{-- body of the register--}}
    <div class="modal-body">
       <form wire:submit='register'>

        <div class="mb-3">
            <input type="text"
                class="form-control @error('fname') is-invalid   @else  @if (!empty($fname)) is-valid  @endif @enderror"
                name="first_name" placeholder="First Name" wire:model.blur='fname' required>
        </div>
        @error('fname')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <input type="text"
                class="form-control @error('lname') is-invalid   @else  @if (!empty($lname)) is-valid  @endif @enderror"
                name="last_name" placeholder="Last Name" wire:model.blur='lname' required>
        </div>
        @error('lname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <input type="tel"
                class="form-control @error('phone') is-invalid   @else  @if (!empty($phone)) is-valid  @endif @enderror"
                name="phone" placeholder="Phone Number" wire:model.blur='phone' required>
        </div>
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <input type="email"
                class="form-control @error('regEmail') is-invalid   @else  @if (!empty($regEmail)) is-valid  @endif @enderror"
                name="email" placeholder="Email Address" wire:model.blur='regEmail' required>
        </div>
        @error('regEmail')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <input type="password"
                class="form-control @if($errors->has('confirmPass') || $errors->has('regPassword')) is-invalid   @elseif (!empty($confirmPass)) is-valid  @endif"
                name="password" placeholder="Password" wire:model.live='regPassword' required>
        </div>
        @error('regPassword')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <input type="password"
                class="form-control @if($errors->has('confirmPass') || $errors->has('regPassword')) is-invalid   @elseif (!empty($confirmPass)) is-valid  @endif"
                name="password" placeholder="Confirm Password" wire:model.live='confirmPass' required>
        </div>
        @error('confirmPass')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
    
     <div class="text-center mb-3">
              <span class="text-muted">or</span>
            </div>
            <div class="mb-3">
              <a wire:click="redirectToGoogle" class="btn btn-outline-danger w-100 mb-2">
                <i class="bi bi-google"></i> Sign up with Google
              </a>
              <a wire:click="redirectToFacebook" class="btn btn-outline-primary w-100">
                <i class="bi bi-facebook"></i> Sign up with Facebook
              </a>
     </div>

     {{-- second modal trigger back to login --}}
      <div class="text-center mt-4">
            <small class="text-muted">
              Already have an account?
              <a href="#" class="text-decoration-none" wire:click="clearFields" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Login Now</a>
            </small>
      </div>
    </div>

       
        {{-- Optional footer (empty) --}}
      <div class="modal-footer border-0 pt-0"></div>
    </div>
  </div>
</div>


  

</div>
