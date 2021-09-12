<div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Posting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <p class="text-wrap">Apakah yakin menghapus Postingan ini "{{ $post->title }}"?</p>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <form action=" " method="post" class="d-inline">                
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Hapus data</button>
            </form>
          </div>
        </div>        
      </div>
    </div>
</div>