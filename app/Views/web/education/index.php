<?= $this->extend('web/templates/index') ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <a href="/web/education/add" class="btn btn-success">Tambah</a>
        <br>
        <br>
        <h1>Riwayat Pendidikan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($education as $s): ?>
                <tr>
                    <th scope="row"><?= $s['id'] ?></th>
                    <td><?= $s['name'] ?></td>
                    <td><?= $s['level'] ?></td>
                    <td><?= $s['description'] ?></td>
                    <td>
                        <div class="row">
                            <a class='col' href="/web/education/detail/<?= $s['id'] ?>">
                                <i class="fas fa-fw fa-edit"></i>
                            </a>
                            <a class='col' href="/web/education/delete/<?= $s['id'] ?>">
                                <i class="fas fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>