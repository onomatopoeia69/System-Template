<div>
     <form  wire:submit='register'>
              
              <div class="mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" wire:model='fname' required>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="middle_name" wire:model='mname' placeholder="Middle Name (optional)">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" wire:model='lname' required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" wire:model='phone' required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email Address" wire:model='email' required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
</div>
