<!DOCTYPE html>

<html>

	<head>
		<title>ИС</title>

		<meta charset="utf-8" />
  <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">


		<script src="{{ URL::asset('js/modernizr.custom.37797.js') }}"></script>
		<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')</script>
		<script src="{{ URL::asset('js/parallax.js') }}"></script>
	</head>

	<body>

		<div id="wrapper">

			<header id="kafedra_info">
				<div class="header_links_flex">
					<div class="left_block">

						<div class="kaf_logo_">
						<a href="/">   <img class="kaf_logo_" src="img/kaf-logo.png"> </a>
						</div>

						<div class="kaf_name">
			       <b> Кафедра <br>
			        Информационные Системы
						</b>
						</div>

					</div>

					<div class="right_block">

						<div class="right_block_item">
						<a href="/projectsPage">  Проекты  |</a>
						</div>

						<div class="right_block_item">
						<a>  AR  </a>
						</div>

						<div class="right_block_item">
						<a>    VR </a>
						</div>

					</div>
				</div>
			</header>




			<nav id="primary">
				<ul>
					<li>
						<div>Аудитории</div>
						<a class="classrooms" href="#classrooms">View</a>
					</li>
					<li>
						<div>Оборудование</div>
						<a class="equipment" href="#equipment">View</a>
					</li>
					<li>
						<div>Преподаватели</div>
						<a class="teachers" href="#teachers">View</a>
					</li>
				</ul>
			</nav>

			<div id="content">



				<article id="classrooms">
					<header>
						<h1>Аудитории</h1>
					</header>
					<p>The first clearly recorded instance of a balloon carrying passengers used hot air to generate buoyancy and was built by the brothers Joseph-Michel and Jacques-Etienne Montgolfier in Annonay, France. After experimenting with unmanned balloons and flights with animals, the first tethered balloon flight with humans on board took place on October 15, 1783.</p>
					<nav class="next-prev">
						<hr />
						<a class="next equipment" href="#equipment">Next</a>
					</nav>
				</article>

				<article id="equipment">
					<header>
						<h1>Оборудование</h1>
					</header>
					<p>André-Jacques Garnerin carried out the first jump with a silk parachute on October 22, 1797 at Parc Monceau, Paris. Garnerin's first parachute resembled a closed umbrella before he ascended; at a height of approximately 3,000 feet he severed the rope that connected his parachute to the balloon, and the basket fell to earth. Garnerin emerged uninjured.</p>
					<nav class="next-prev">
						<a class="prev classrooms" href="#classrooms">Prev</a>
						<hr />
						<a class="next teachers" href="#teachers">Next</a>
					</nav>
				</article>

				<article id="teachers">
					<header>
						<h1>Преподаватели</h1>
					</header>
					<p>On January 7, 1785, Jean Pierre Blanchard and Dr. John Jeffries made the first flight over the English Channel, traveling from Dover to France. During the crossing the balloon lost altitude, so they began tossing everything in the gondola they possibly could, even their clothes. About two hours after take off, they crossed the French coast clad only in their underwear.</p>
					<nav class="next-prev">
						<a class="prev equipment" href="#equipment">Prev</a>
						<hr />
						<a class="next about" href="#about">Next</a>
					</nav>
				</article>

			</div>

			<!-- Parallax foreground -->
			<div id="parallax-bg3">
				<!-- <img id="bg3-1" src="img/.png" width="529" height="757" alt="Montgolfier hot air balloon"/> -->
				<img id="bg3-1" src="img/giphy.gif">

				<div class="bg3_content_img" id="bg3-2"> <img src="img/classroom1.png" alt="Frameless parachute"/> </div>
				<div  class="bg3_content_img" id="bg3-3"> <img src="img/eq1.jpg"  alt="Blanchard's air balloon"/> </div>
				<div class="bg3_content_img" id="bg3-4"> <img src="img/teach1.jpg"  alt="Landscape with trees and cows"/> </div>
			</div>

			<!-- Parallax  midground clouds -->
			<div id="parallax-bg2">
				<img id="bg2-1" src="img/el.png" alt="cloud"/>
				<img id="bg2-2" src="img/el.png" alt="cloud"/>
				<img id="bg2-3"src="img/el.png" alt="cloud"/>
				<img id="bg2-4" src="img/el.png" alt="cloud"/>
				<!-- <img id="bg2-5" src="img/cloud-lg1.png" alt="cloud"/> -->
			</div>

			<!-- Parallax  background clouds -->
			<div id="parallax-bg1">
				<img id="bg1-1" src="img/el2.png" alt="cloud"/>
				<img id="bg1-2" src="img/el2.png" alt="cloud"/>
				<img id="bg1-3" src="img/el2.png" alt="cloud"/>
				<img id="bg1-4" src="img/el2.png" alt="cloud"/>
				<!-- <img id="bg1-4" src="img/cloud-lg2.png" alt="cloud"/> -->
			</div>

		</div>

	</body>

</html>
