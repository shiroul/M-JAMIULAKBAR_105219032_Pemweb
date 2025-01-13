<table class="table table-schedule">
    <thead>
        
    </thead>
    <tbody>
        
    </tbody>
</table>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" method="POST" action="{{ route('event.update') }}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Edit Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>
        </form>
    </div>
</div>