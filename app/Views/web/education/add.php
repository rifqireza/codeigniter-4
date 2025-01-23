<?= $this->extend('web/templates/index') ?>
<?= $this->section('page-content'); ?>
<div class="container" style="height: 750px">
    <h1>Tambah Pendidikan</h1>
    <form action="/web/education/save" method="post">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Nama Sekolah</label>
            <div class="col-sm-10">
                <input name="name" type="name" class="form-control form-control-sm" id="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="level" class="col-sm-2 col-form-label col-form-label-sm">Tingkat</label>
            <div class="col-sm-10">
                <select name="level" class="custom-select mr-sm-2" id="level">
                    <option selected>Pilih</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="kuliah">Kuliah</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label col-form-label-sm">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="description" type="description" class="form-control form-control-sm" id="description"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?= $this->endSection(); ?>