<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hello Bulma!</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
	</head>
  	<body>
		<section class="section">
			<div class="container">
				<!-- Start Carousel -->
				<div id="carousel-demo" class="carousel">
					<div class="item-1">
						<!-- Slide Content -->
                        1
					</div>
					<div class="item-2">
						<!-- Slide Content -->
                        2
					</div>
					<div class="item-3">
						<!-- Slide Content -->
                        3
					</div>
                    <div class="item-1">
						<!-- Slide Content -->
                        1
					</div>
					<div class="item-2">
						<!-- Slide Content -->
                        2
					</div>
					<div class="item-3">
						<!-- Slide Content -->
                        3
					</div>
				</div>
				<!-- End Carousel -->
			</div>
		</section>

		<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
		<script>
		bulmaCarousel.attach('#carousel-demo', {
			slidesToScroll: 1,
			slidesToShow: 4
		});
		</script>
	</body>
</html>