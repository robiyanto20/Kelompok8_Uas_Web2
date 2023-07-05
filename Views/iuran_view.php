<?= $this->include('template/header_view'); ?>

<div class="container pt-5">
    <a href="<?= base_url('iuran/tambah');?>" class="btn btn-success mb-2">Tambah Data Iuran</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Iuran</h4>
        </div>
         <div class="card-body">
            <div class="table-responsive-xl">
                <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr class="bg-light">
                    
                    <th class="text-center">No</th>
                    <th class="text-center">No Belakang KK Warga</th>  
                    <th class="text-center">ID</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Bulan</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Aksi</th>
            </tr>
            </thead>
                    <tbody>
                        <?php $no=1; foreach($getiuran as $isi){?>
                        <td class="text-center"><?=$no; ?></td>
                        <td class="text-center"><?= $isi['warga_id']; ?></td>
                        <td class="text-center"><?= $isi['id']; ?></td>
                        <td class="text-center"><?= $isi['tanggal']; ?></td>
                        <td class="text-center"><?= $isi['bulan']; ?></td>
                        <td class="text-center"><?= $isi['tahun']; ?></td>
                        <td class="text-center"><?= $isi['jumlah']; ?></td>
                        <td class="text-center"><?= $isi['keterangan']; ?></td>
                <td>
                                    <a href="<?= base_url('iuran/hapus/'.$isi['id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data iuran ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                </td>
            </tr>
            <?php $no++;}?>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<?= $this->include('template/footer_view'); ?>