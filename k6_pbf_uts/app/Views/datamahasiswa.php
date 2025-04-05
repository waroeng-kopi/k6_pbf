<?= $this->extend('kerangka'); ?> //nama file sg ada navbar2e

<?= $this->section('isi_web');?> <!--disamakan sm renderSection di file kerangka-->


<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">DATA SISWA</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NISN</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">KOTA</th>
                        <th scope="col">TANGGAL LAHIR</th>
                        <th scope="col">NO.TELP ORTU</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($isi_db as $dt){?> <!--looping, isi_db sesuai pada controller ,dt adalah data-->
                    <tr>
                        <td><?= $dt->nisn;?></td> <!--diambil sesuai database-->
                        <td><?= $dt->nama_siswa;?></td>
                        <td><?= $dt->jenis_kelamin;?></td>
                        <td><?= $dt->kota;?></td>
                        <td><?= $dt->tanggal_lahir;?></td>
                        <td><?= $dt->telp_ortu;?></td>
                        <td>
                            <!-- Button trigger modal update -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $dt->nisn;?>">
                            Update
                            </button>

                            <!-- Button trigger modal delete -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $dt->nisn;?>">
                            Delete
                            </button>

                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?= $linkhalaman -> links('abc','pengaturan_halaman');?> 
            <!--tombol untuk tambah data-->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>
            <!-- Modal Tambah Data-->
            
        </div>

        <!--modal tambah data-->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Form Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    
                        <form action="<?= base_url('tambahdata') ?>" method="post">

                            <?= csrf_field(); ?> <!--ketika ada form pada ci4 untuk lebih secure-->

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Input NISN</label>
                                    <input type="text" name="fm_nisn" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan NISN"> <!--name adalah pemberian penamaan dalam form-->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Nama Siswa</label>
                                    <input type="text" name="fm_nama_siswa" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Nama Siswa">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Jenis Kelamin</label>
                                    <input type="text" name="fm_jenis_kelamin" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Jenis Kelamin">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Kota</label>
                                    <input type="text" name="fm_kota" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Kota">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Tanggal Lahir</label>
                                    <input type="text" name="fm_tanggal_lahir" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Tanggal Lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Telp Ortu</label>
                                    <input type="text" name="fm_telp_ortu" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Telp Ortu">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark">Tambah</button>
                                </div>
                            </div>

                        </form>     
                    
                </div>
            </div>
        </div>

        <!--Modal delete-->

        <?php foreach($isi_db as $dl){ ?> <!--looping-->
        
        <!--pada id ditulis begitu tujuannya untk memasukkan permodalnya-->
        <div class="modal fade" id="modalHapus<?= $dl->nisn;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?=base_url('hapusdata')?>" method="post">                    
                    
                        <div class="modal-body">
                            Apakah Anda yakin untuk menghapus data dengan NISN - <?= $dl ->nisn ?>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="fm_nisn_sembunyi" value="<?=$dl->nisn ?>" >
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php }; ?>

        <!-- Modal update -->

        <?php foreach($isi_db as $du){ ?>

        <div class="modal fade" id="modalUbah<?= $du->nisn; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?= base_url('ubahdata') ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="modal-body">
                            <input type="hidden" name="fm_id" value="<?= $du->nisn?>">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Input NISN</label>
                                <input type="text" name="fm_nisn" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan NISN"> <!--name adalah pemberian penamaan dalam form-->
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Nama Siswa</label>
                                <input type="text" name="fm_nama_siswa" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Nama Siswa">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Jenis Kelamin</label>
                                <input type="text" name="fm_jenis_kelamin" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Jenis Kelamin">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Kota</label>
                                <input type="text" name="fm_kota" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Kota">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Tanggal Lahir</label>
                                <input type="text" name="fm_tanggal_lahir" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Tanggal Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Telp Ortu</label>
                                <input type="text" name="fm_telp_ortu" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Telp Ortu">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php }; ?>

</div>







<?= $this->endSection();?>