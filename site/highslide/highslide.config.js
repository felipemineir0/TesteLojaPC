/**
*	Site-specific configuration settings for Highslide JS
*/
hs.graphicsDir = '../highslide/graphics/';
hs.showCredits = false;
hs.outlineType = 'custom';
hs.dimmingOpacity = 0.65;
hs.fadeInOut = true;
hs.easing = 'linearTween';
hs.align = 'center';
hs.allowSizeReduction = false;
hs.allowMultipleInstances = false;


// Add the slideshow controller
hs.addSlideshow({
	slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		offsetX: 0,
		offsetY: -15,
		hideOnMouseOut: true
	},
	thumbstrip: {
		mode: 'horizontal',
		position: 'bottom center',
		relativeTo: 'viewport'
	}

});

// Portuguese (Brazilian) language strings
hs.lang = {
	cssDirection: 'ltr',
	loadingText: 'Carregando...',
	loadingTitle: 'Clique para cancelar',
	focusTitle: 'Clique para trazer para a frente',
	fullExpandTitle: 'Expandir para tamanho máximo (f)',
	creditsText: 'Criado com Highslide JS',
	creditsTitle: 'Ir à página do Highslide JS',
	previousText: 'Anterior',
	nextText: 'Próxima',
	moveText: 'Mover',
	closeText: 'Fechar',
	closeTitle: 'Fechar (esc)',
	resizeTitle: 'Redimensionar',
	playText: 'Reproduzir',
	playTitle: 'Reproduzir apresentação (barra de espaço)',
	pauseText: 'Pausar',
	pauseTitle: 'Pausar apresentação (barra de espaço)',
	previousTitle: 'Anterior (seta direcional para esquerda)',
	nextTitle: 'Próxima (seta direcional para direita)',
	moveTitle: 'Mover',
	fullExpandText: 'Tamanho máximo',
	number: 'Fotografia %1 de %2',
	restoreTitle: 'Clique para fechar. Clique e arraste para mover. Use as setas direcionais para ir à fotografia anterior ou próxima.'
};

// gallery config object
var config1 = {
	slideshowGroup: 'group1',
	thumbnailId: 'thumb1',
	numberPosition: 'caption',
	transitions: ['expand', 'crossfade']
};
