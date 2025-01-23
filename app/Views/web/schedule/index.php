<?= $this->extend('web/templates/index') ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <a href="/schedule/add" class="btn btn-success">Tambah</a>
        <br>
        <br>
        <h1>Daftar Kelas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Mulai</th>
                    <th scope="col">Selesai</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedule as $s): ?>
                <tr>
                    <th scope="row"><?= $s['id'] ?></th>
                    <td><?= $s['name'] ?></td>
                    <td><?= $s['day'] ?></td>
                    <td><?= explode('.',  $s['start_date'])[0] ?></td>
                    <td><?= explode('.',  $s['end_date'])[0] ?></td>
                    <td>
                        <a href="<?= $s['url_link'] ?>" class="btn btn-success">Visit Page</a>
                    </td>
                    <td>
                        <a href="/web/schedule/<?= $s['id'] ?>">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>