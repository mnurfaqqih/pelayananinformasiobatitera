<!-- Tampilkan halaman Dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/Logo PIO.png">

    <title>Administrator PIORA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <nav><?php include 'template/navbar.php'; ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $home = "class='active'"; ?>
              <?php include 'template/sidebar.php'; ?>
          </aside>

          <section id="konten">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container top">

<ul class="breadcrumb">
  <li>
    <a href="<?php echo site_url("admin"); ?>">
      <?php echo ucfirst($this->uri->segment(1));?>
    </a>
    <span class="divider"></span>
  </li>
  <li class="active">
    <?php echo ucfirst($this->uri->segment(2));?>
  </li>
</ul>

<div class="page-header users-header">

</div>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('obat/create'); ?>
<div class="col-sm-9">

  <h2>Tambah Obat</h2>
    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="form-group">
    <label>Nama Generik</label>
    <input type="text" class="form-control" name="nama_generik" placeholder="Nama Generik" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label>Nama Merek Dagang</label>
    <textarea id="editor1" class="form-control" name="merek_dagang" placeholder="Nama Merek Dagang" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
  </div>
  <div class="form-group">
    <label>Indikasi Obat</label>
    <textarea id="editor1" class="form-control" name="indikasi_obat" placeholder="Indikasi Obat" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
  </div>
  <div class="form-group">
    <label>Bentuk</label>
    <textarea id="editor1" class="form-control" name="bentuk" placeholder="Bentuk Obat" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
  </div>
  <div class="form-group">
    <label>Rekasi dengan obat lain</label>
    <textarea id="editor1" class="form-control" name="reaksi_obatlain" placeholder="Rekasi dengan obat lain" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
  </div>
  <div class="form-group">
    <label>Deskripsi Obat</label>
    <textarea id="editor1" class="form-control" name="deskripsi" placeholder="deskripsi" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
  </div>
  <button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Tambah Obat</button>
</form>

</div>
    <script>
                CKEDITOR.replace( 'editor1' );
            </script>
          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/holder.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
  </body>
</html>
