@auth
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Register Member</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('member.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" value="{{ auth()->user()->nim }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" value="{{ auth()->user()->jurusan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No.HP</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="return confirm('Data sudah benar?')">Register</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
