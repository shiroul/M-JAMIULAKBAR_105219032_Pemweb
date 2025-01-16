<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-dialog-centered" role="document">
    	<form class="modal-content" method="POST" action="{{ route('event.submit') }}">
      		<div class="modal-header">
        		<h5 class="modal-title" id="addModalLabel">Tambah Jadwal</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body">
				@csrf
				<div class="form-group">
					<label for="name">Nama Jadwal</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" 
						id="name" name="name" required>
					@error('name')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="start">Tanggal Mulai</label>
					<input type="date" class="form-control @error('start') is-invalid @enderror" 
						id="start" name="start" required>
					@error('start')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="end">Tanggal Selesai</label>
					<input type="date" class="form-control @error('end') is-invalid @enderror" 
						id="end" name="end" required>
					@error('end')
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