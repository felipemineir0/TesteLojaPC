<header class='bg-institucional'>
	<?php echo $this->Element('menu'); ?>
</header>

<section class='col-xs-12 col-sm-12 col-md-12 page-servicos'>
	<div class='row'>
		<img src='<?php echo $this->request->base ?>/img/bg-cima-servicos.png' class='img-responsive bg-cima-branco bg-cima-servico' />
	</div>
	<div class='container'>
		<div class='col-xs-12 col-sm-12 col-md-12' style="margin-bottom: 45px;">
			<h1 class='titulo'><?php echo $servico["Servico"]["nome"] ?></h1>
		</div>

			<div class='col-xs-12 col-sm-6 col-md-6 img-view-servico'>
				<?php if (!empty($albuns)):  ?>
				    <ul class="bxslider">
					    	<li>
					            <img src="<?php echo $this->request->base ?>/upload/servicos/<?php echo ($servico["Servico"]["id"]."/l_".$servico["Servico"]["imagem"]) ?>" alt="" title="" class='img-responsive foto' />
					        </li>
				        <?php foreach ($albuns as $albun) :

				           	foreach ($albun["AlbunsImagem"] as $imagem) :?>

				            <?php if (!empty($imagem)) : ?>
				                <li>
				                	<?php echo $this->Html->image('/upload/albuns/' . $imagem["album_id"] . '/l_' . $imagem["imagem"], array("class" => "img-responsive foto")); ?>
				                </li>
				            <?php endif; ?>
				        <?php endforeach; ?>
				<?php endforeach; ?>
				    </ul>
				<?php endif; ?>
				<br><br><br><br>
			</div>

		<div class='col-xs-12 col-sm-6 col-md-6 detalhada'>
			<p>À vista no cartão: <span>R$ <?php echo $servico["Servico"]["preco_a_vista"] ?></span></p>
			<br>
			<?php
				$valor10 = $servico["Servico"]["preco_a_vista"];
				$desconto = $valor10 * 0.10;
				$resultad = $valor10 - $desconto;
			?>
			<p>À vista com desconto de 10%: <span>R$ <?php echo $resultad ?></span></p>
			<br>
			<h3>Parcelamento</h3>
			<div class="parcela">
				<p>
				<?php
				    $taxa = 2; // Taxa em Porcentagem
				    $capital = $servico["Servico"]["preco_a_vista"]; // Valor da Compra
				    $tempo = 10; // Meses (parcelas)

				  	for ($i=0; $i < $tempo; $i++){
						$capital *= 1 + ($taxa / 100);
						echo ($i + 1).'x R$ '.number_format($capital, 2, ',', '.');
						echo " | valor da parcela:";
						echo number_format($capital/($i + 1),2,',','.');
						echo "<br/>";
				}
				// Obs. A função number_format é para arredondar o resultado para 2 casas decimais.
				?>
				</p>
				<a href='#' class='botao botao-comprar'></a>
			</div>
		</div>

	</div>
	<div class='row'>
		<img src='<?php echo $this->request->base ?>/img/bg-branco-baixo-inst.png' class='img-responsive bg-baixo-branco' />
	</div>
</section>

<section class='col-xs-12 col-sm-12 col-md-12 box'>
	<div class='container'>
		<div class='col-xs-12 col-sm-8 col-md-8 especificacoes'>
			<?php if(!empty($servico['Servico']['descricao_produto'])) { ?>
			<h3>Especificações Técnicas</h3>
			<?php echo $servico["Servico"]["descricao_produto"] ?>
			<?php } ?>
		</div>
	</div>
</section>
<section class='col-xs-12 col-sm-12 col-md-12 box'>
	<div class='container'>
		<div class='col-xs-12 col-sm-8 col-md-8 especificacoes' style="margin-top: -60px">
			<?php if(!empty($servico['Servico']['especificacoes_tecnicas'])) { ?>
			<h3>Especificações Técnicas</h3>
			<?php echo $servico['Servico']['especificacoes_tecnicas'] ?>
			<?php } ?>
		</div>
	</div>
</section>

<section class='col-xs-12 col-sm-12 col-md-12 bg-outros-servicos'>
	<div class='row'>
		<img src='<?php echo $this->request->base ?>/img/bg-branco-cima.png' class='img-responsive bg-cima-branco' />
	</div>
	<div class='container'>
		<div class='col-xs-12 col-sm-12 col-md-12 categoria-servico'>
			<h2><?php echo( $servico["CategoriaServico"]["nome"]); ?></h2>
			<?php
			$count = 0;
			?>
			<ul class="bxslider">
				<?php foreach ($servicos as $servico) {	?>
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
								<h3 class="subnome" style=""><?php echo $servico["Servico"]["nome"] ?></h3>
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
		<a href='<?php echo $this->request->base ?>/servicos' class='botao-verde'>Conheça outros produtos</a>
	</div>
	<div class='row'>
		<img src='<?php echo $this->request->base ?>/img/bg-branco-baixo-inst.png' class='img-responsive bg-baixo-branco' />
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
echo $this->Html->css(array('jquery.bxslider.servico'));
echo $this->Html->script(array('jquery.bxslider','js_bx'));
?>