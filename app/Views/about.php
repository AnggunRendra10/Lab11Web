<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
        <img src="anggun.JPG" title="anggun" alt="anggun" class="image-circle" width="180" style="float: left; border: 2px solid black;">
            <h1>Hallo!</h1>
            <p align="justify">Nama saya ANGGUN RENDRA. Saya adalah seorang mahasiswi dari <i>Universitas Pelita Bangsa</i> yang saat ini sedang mempelajari materi PHP Framework (Codeigniter) dalam mata kuliah <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>