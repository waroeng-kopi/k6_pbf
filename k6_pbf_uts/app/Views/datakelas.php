<?= $this->extend('kerangka'); ?> //nama file sg ada navbar2e

<?= $this->section('isi_web');?> <!--disamakan sm renderSection di file kerangka-->


<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">DATA KELAS</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NAMA KELAS</th>
                        <th scope="col">NIP</th>
                        <th scope="col">JUMLAH SISWA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($isi_db as $dt){?> <!--looping, isi_db sesuai pada controller ,dt adalah data-->
                    <tr>
                        <td><?= $dt->nama_kelas;?></td> <!--diambil sesuai database-->
                        <td><?= $dt->nip;?></td>
                        <td><?= $dt->jumlah_siswa;?></td>
                        <td>
                            <!-- Button trigger modal update -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUbah">
                            Update
                            </button>

                            <!-- Button trigger modal delete -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $dt->nip;?>">
                            Delete
                            </button>

                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        
            <!--tombol untuk tambah data-->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>
            <!-- Modal Tambah Data-->
            
        </div>

        <!--modal tambah data-->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalUbah" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Form Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    
                        <form action="<?= base_url('tambahdatakelas') ?>" method="post">

                            <?= csrf_field(); ?> <!--ketika ada form pada ci4 untuk lebih secure-->

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Input Nama Kelas</label>
                                    <input type="text" name="fm_nama_kelas" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Nama Kelas"> <!--name adalah pemberian penamaan dalam form-->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input NIP</label>
                                    <input type="text" name="fm_nip" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan NIP">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Input Jumlah Siswa</label>
                                    <input type="text" name="fm_jumlah_siswa" class="form-control" 
                                    id="exampleFormControlInput1" placeholder="Masukkan Jumlah Siswa">
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
        <div class="modal fade" id="modalHapus<?= $dl->nama_kelas;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?=base_url('hapusdatakelas')?>" method="post">                    
                    
                        <div class="modal-body">
                            Apakah Anda yakin untuk menghapus data dengan nama kelas - <?= $dl ->nama_kelas ?>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="fm_nama_kelas_sembunyi" value="<?=$dl->nama_kelas ?>" >
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

        <div class="modal fade" id="modalUbah<?= $du->nama_kelas; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?= base_url('ubahdatakelas') ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="modal-body">
                            <input type="hidden" name="fm_id" value="<?= $du->nama_kelas?>">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Input Nama Kelas</label>
                                <input type="text" name="fm_nama_kelas" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Nama Kelas"> <!--name adalah pemberian penamaan dalam form-->
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input NIP</label>
                                <input type="text" name="fm_nip" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan NIP">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Input Jumlah Siswa</label>
                                <input type="text" name="fm_jumlah_siswa" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Masukkan Jumlah Siswa">
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