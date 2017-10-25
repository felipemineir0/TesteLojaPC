<header class='bg-institucional'>
	<?php echo $this->Element('menu'); ?>
</header>
<section class='col-xs-12 col-sm-12 col-md-12 page-servicos'>
	<div class='row'>
		<img src='<?php echo $this->request->base ?>/img/bg-cima-servicos.png' class='img-responsive bg-baixo-branco bg-cima-servico' />
	</div>
	<div class='container'>
		<div class='col-xs-12 col-sm-12 col-md-12'>
			<h1 class='titulo'>Produtos |<span>GradMart</span></h1>
			<span class='subtitulo'></span>
		</div>
		<?php
		//exit(debug($CategoriaServicos));

		foreach ($CategoriaServicos as $categorias) {
			$count = 0;
			?>
		<div class="row">
			<div class='col-xs-12 col-sm-12 col-md-12 categoria-servico'>
				<h2><?php echo $categorias["CategoriaServico"]["nome"] ?></h2>
				<ul class="bxslider">
					<?php foreach ($categorias["Servico"] as $servico) {
						?>
						<?php if($count == 0) {?>
						<li>
							<?php }?>
							<div class="box-servicos">
								<div class='quadrado'>
									<a href="<?php echo $this->request->base ?>/servico/<?php echo $servico["slug"] ?>">
										<img src="<?php echo $this->request->base ?>/upload/servicos/<?php echo ($servico["id"]."/220x220-".$servico["imagem"]) ?>" alt="" title="" />
									</a>
								</div>
								<a href="<?php echo $this->request->base ?>/servico/<?php echo $servico["slug"] ?>">
									<h3 class="subnome"><?php echo $servico["nome"] ?></h3>
								</a>
							</div>

							<?php if($count == 3) {?>
						</li>
						<?php $count = 0;
					}else{
						$count++;
					}
					?>
					<?php }?>
				</ul>
			</div>
		</div>
			<?php } ?>

		</div>
		<div class='row'>
			<img src='<?php echo $this->request->base ?>/img/bg-branco-baixo-inst.png' class='img-responsive bg-baixo-branco' />
		</div>
	</section>
	<?php
	echo $this->Html->css(array('jquery.bxslider.servico'));
	echo $this->Html->script(array('jquery.bxslider', 'js_bx'));
	?>
