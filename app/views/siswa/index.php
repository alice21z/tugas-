<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Add data
            </button>
            <br>
            <br>
            <h3><?= $data["judul"] ?></h3>
            <ul class="list-group">
                <?php foreach ($data["siswa"] as $siswa) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start"><?= $siswa["nama"] ?>
                        <a href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id'] ?>" class="badge btn btn-primary m-0">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulmodal">Add new student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/siswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="john titor" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">kelas</label>
                        <input type="number" class="form-control" id="kelas" placeholder="john titor" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" placeholder="john titor" name="email">
                    </div>
                    <select class="form-select" aria-label="jurusan" name="jurusan">
                        <option value="multimedia">multimedia</option>
                        <option value="tkj">tkj</option> 
                        <option value="rpl">rpl</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>