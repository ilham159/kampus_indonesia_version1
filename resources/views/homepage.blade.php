<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/icon_kampus_indonesia.ico') }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Kampus indonesia by Ilham Dyki Mu'ahfi</title>
	<!---
	You may need jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
	
	<style>
      /*
		You may need this for responsive background
		header {
			background: url('bg-425.jpg');
		}

		@media only screen and (min-width:640px) {
			header {
				background: url('bg-640.jpg');
			}
		}

		@media only screen and (min-width:768px) {
			header {
				background: url('bg-768.jpg');
			}
		}

		@media only screen and (min-width:1024px) {
			header {
				background: url('bg-1024.jpg');
			}
		}

		@media only screen and (min-width:1025px) {
			header {
				background: url('bg-max.jpg');
			}
		} */
      /* Default background by https://www.pexels.com/@knownasovan */
      header {
        background:url('https://images.pexels.com/photos/2565919/pexels-photo-2565919.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900');}
	</style>
</head>

<body>

	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">

		<div class="p-4">
			<a class="font-extrabold tracking-widest text-xl">KAMPUS INDONESIA</a>
		</div>

	</nav>

	<header id="up" class="bg-center bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
		<!-- Overlay Background + Center Control -->
		<div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
			<div class="mx-2 text-center">
				<h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
					<span class="text-white">Kampus Indonesia</span> for
           </h1>
           <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
            Get Some <span class="text-white">Information</span> and <span class="text-white">Improve</span> Your Skill
           </h2>
           <div class="inline-flex">
           <a href="{{ route('home') }}"><button class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition duration-500 md:text-xl">Sign In</button><a>
           </div>
        </div>
    </div>
</header>
  </body>
</html>
</body>
</html>