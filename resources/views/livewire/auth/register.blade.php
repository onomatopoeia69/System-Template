<div>
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
                class="form-control @error('email') is-invalid   @else  @if (!empty($email)) is-valid  @endif @enderror"
                name="email" placeholder="Email Address" wire:model.blur='email' required>
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <input type="password"
                class="form-control @if($errors->has('confirmPass') || $errors->has('password')) is-invalid   @elseif (!empty($confirmPass)) is-valid  @endif"
                name="password" placeholder="Password" wire:model.live='password' required>
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <input type="password"
                class="form-control @if($errors->has('confirmPass') || $errors->has('password')) is-invalid   @elseif (!empty($confirmPass)) is-valid  @endif"
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

</div>
