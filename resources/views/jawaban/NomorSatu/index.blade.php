<div class="dropdown-menu dropdown-menu-right ">
	@if (session('user'))
		<a href="{{ route('logout') }}" class="dropdown-item"> 
			<i class="ni ni-user-run"></i> <span>Logout</span>
		</a>
	@else
		<a class="dropdown-item" data-toggle="modal" data-target="#loginModal">
			<i class="ni ni-bold-right"></i> <span>Login</span>
		</a>
	@endif
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-dialog-centered" role="document">
    	<form class="modal-content" method="POST" action="{{ route('auth') }}">
      		<div class="modal-header">
        		<h5 class="modal-title" id="loginModalLabel">Login</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
			<div class="modal-body">
			@csrf
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control @error('email') is-invalid @enderror" 
					id="email" name="email" required>
				@error('email')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" 
					id="password" name="password" required>
				@error('password')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
		</div>
	      	<div class="modal-footer">
	        	<button type="submit" class="btn btn-primary"> Submit </button>
	      	</div>
    	</form>
  	</div>
</div>