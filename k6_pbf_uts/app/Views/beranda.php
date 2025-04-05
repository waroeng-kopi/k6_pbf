<?= $this->extend('kerangka'); ?> 

<?= $this->section('isi_web');?> 

<!--tampilan pertama-->
<div class="container-fluid mt-5">
  <div class="container text-center">
    <h1 class="display-4" id="#home">SMA Suka Suka</h1>
    <p class="lead">Unggul dan Berkualitas</p> 
  </div>
</div>

<!--carousel-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1592066575517-58df903152f2?q=80&w=1898&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 h-90" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1560931296-168316935386?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 h-90" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 h-90" alt="...">
    </div>
  </div>
</div>

<!--tampilan kedua-->
<div class="container-fluid mt-5">
  <div class="container text-center">
    <h1 class="display-5">Selamat Datang di <mark>SMA Suka Suka</mark></h1>
    <p class="lead">Membangun karakter yang Berkualitas dan Unggul dalam Ilmu Pengetahuan dan Teknologi</p>
  </div>
</div>

<!--tampilan layanan-->

<div class="container text-center my-5">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-stack-books-illustration_23-2149341898.jpg?t=st=1714377125~exp=1714380725~hmac=4f3118392b0a0445e55c99ca0a36bed05c6677f55c15e28e612a04ad5092ba07&w=740" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><b>Layanan Perpustakaan</b></h5>
          <p class="card-text">Membantu dan Menunjang proses belajar mengajar dan Melayani informasi yang dibutuhkan.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/free-vector/miscommunication-concept-illustration_114360-8669.jpg?t=st=1714377317~exp=1714380917~hmac=cd25b22f256c4f6b0eec1cdd26956be587d12cf8c141a79a78725d6230be9ca3&w=740" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title"><b>Bimbingan Konseling</b></h5>
          <p class="card-text">Mengatasi kesulitan dalam belajar, hubungan sosial, dan jenjang pendidikan.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/free-vector/medicine-concept-illustration_114360-2802.jpg?t=st=1714377404~exp=1714381004~hmac=36891fd31b45b3d8a691536328d2beafcb24424d5b6e7b55d03c2949a64bc22f&w=740" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><b>Unit Kesehatan</b></h5>
          <p class="card-text">Meningkatkan atau membina kesehatan Siswa dan lingkungan hidupnya.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection();?>