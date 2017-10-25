<header>
	<?php echo $this->Element('menu'); ?>
	<?php echo $this->Element('player'); ?>
</header>

<section class='col-xs-12 col-sm-12 col-md-12 servicos-home text-center'>
	<div class='container'>
		<div class="row">
			<div class='col-xs-12 col-sm-12 col-md-12 clube-ynovez'>
				<h4>Produtos | GRADMART</h4>
				<p>A GRADMART é um marketplace focado no público gamer. Nós contamos com uma moderna estrutura física e web dedicada à missão de oferecer sempre os melhores computadores e acessórios para sua diversão. Seja nas lojas físicas ou através do web-site você vai encontrar produtos, que vão transformar os seus sonhos em realidade.</p>
			</div>
		</div>
<br><br>
		<?php
		$count = 0;
		?>
		<ul class="bxslider">
			<?php foreach ($servicos as $servico) {
				?>
				<?php if($count == 0) {?>
				<li>
					<?php }?>
					<div class="box-servicos">
						<div class='quadrado'>
							<a href='<?php echo $this->request->base ?>/servico/<?php echo $servico["Servico"]["slug"] ?>'>
								<img src="<?php echo $this->request->base ?>/upload/servicos/<?php echo ($servico["Servico"]["id"]."/220x220-".$servico["Servico"]["imagem"]) ?>" alt="" title="" />
							</a>
						</div>
						<a href='<?php echo $this->request->base ?>/servico/<?php echo $servico["Servico"]["slug"] ?>'>
							<h3 class="subnome"><?php echo $servico["Servico"]["nome"] ?></h3>
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
</section>
	</div>
</section>

<?php
echo $this->Html->css(array('flexslider', 'jquery.bxslider'));
echo $this->Html->script(array('jquery.flexslider', 'jquery.bxslider', 'js_home'));
?>
