<?= $this->include('template/header_view'); ?>

<<div class="container p-5">
    <a href="<?= base_url('iuran');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Iuran Warga</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('iuran/add');?>">
                <div class="form-group">
                            <label for="nama">Nama Warga</label>
                            <input type="text" name="warga_id" class="form-control" required>
                </div> <div class="form-group">
                            <label for="nama">ID</label>
                            <input type="text" name="id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                            <?php $bln = date('m') ?>
                            <label for="">Bulan</label>
                            <select class="form-control" name="bulan">
                                <option value="">Pilih Bulan</option>
                                <option value="01" <?php if ($bln == 1) { echo 'selected'; }?>>Januari</option>
                                <option value="02" <?php if ($bln == 2) { echo 'selected'; }?>>Februari</option>
                                <option value="03" <?php if ($bln == 3) { echo 'selected'; }?>>Maret</option>
                                <option value="04" <?php if ($bln == 4) { echo 'selected'; }?>>April</option>
                                <option value="05" <?php if ($bln == 5) { echo 'selected'; }?>>Mei</option>
                                <option value="06" <?php if ($bln == 6) { echo 'selected'; }?>>Juni</option>
                                <option value="07" <?php if ($bln == 7) { echo 'selected'; }?>>Juli</option>
                                <option value="08" <?php if ($bln == 8) { echo 'selected'; }?>>Agustus</option>
                                <option value="09" <?php if ($bln == 9) { echo 'selected'; }?>>September</option>
                                <option value="10" <?php if ($bln == 10) { echo 'selected'; }?>>Oktober</option>
                                <option value="11" <?php if ($bln == 11) { echo 'selected'; }?>>November</option>
                                <option value="12" <?php if ($bln == 12) { echo 'selected'; }?>>Desember</option>
                            </select>
                        </div>
                <div class="form-group">
                <?php $thn = date('Y')?>
                            <label for="tahun">Tahun </label>
                            <select class="form-control" name="tahun">
                            <option value="">Pilih Tahun</option>
                               <?php for ($i = 2015; $i <= $thn; $i++) { ?>
                                <option value="<?=$i;?>" <?php if ($thn == $i) { echo 'selected'; }?>>
                                    <?=$i;?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" required>
                </div>
               
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>
<br>
<?= $this->include('template/footer_view'); ?>