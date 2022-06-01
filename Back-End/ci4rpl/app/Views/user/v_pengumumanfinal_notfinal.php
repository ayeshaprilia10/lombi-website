<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Pengumuman</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>FINALIS </h1>
					<h1 class = "text-uppercase"><?= $nama->nama_lomba; ?></h1>					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section pt-5">
	<div class="container">
		<div class="text-center">
			<h2 class="text-uppercase">
               Mohon Maaf, <?= $tim->nama_tim; ?>
            </h2>
            <h3 class="text-uppercase">tim kamu tidak lolos di babak finalis dari lomba <?= $nama->nama_lomba; ?></h3>
            <h3 class="text-uppercase">Jangan berpatah semangat yaa </h3>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>