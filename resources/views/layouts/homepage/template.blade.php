<style>
.slider {
    background-image: url('assets/images/ic-home-bot.png');
	position: relative;
	overflow: hidden;
	background: transparent !important;
}

.slider {
	margin:20px auto;
	width: 500px;
	height: 250px;
}

.isi-slider img {
	width: 500px;
	height: 250px;
	float: center;
}

.isi-slider {
	position: absolute;
	width:3900px;

	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	animation-name:slider;
	animation-duration:16s;
	animation-timing-function: ease-in-out;
	animation-iteration-count:infinite;
	-webkit-animation-name:slider;
	-webkit-animation-duration:16s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-name:slider;
	-moz-animation-duration:16s;
	-moz-animation-timing-function: ease-in-out;
	-moz-animation-iteration-count:infinite;
	-o-animation-name:slider;
	-o-animation-duration:16s;
	-o-animation-timing-function: ease-in-out;
	-o-animation-iteration-count:infinite;
}


/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.isi-slider:hover {
	-webkit-animation-play-state:paused;
	-moz-animation-play-state:paused;
	-o-animation-play-state:paused;
	animation-play-state:paused; }
}

.isi-slider img {
	float: right;
}

.slider:after {
	font-size: 150px;
	position: absolute;
	z-index: 12;
	color: rgba(255,255,255, 0);
	left: 300px; top: 80px;
	-webkit-transition: 1s all ease-in-out;
	-moz-transition: 1s all ease-in-out;
	transition: 1s all ease-in-out;
}

.slider:hover:after {
	color: rgba(255,255,255, 0.6);
}



@-moz-keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}
	100% {
		left: 0; opacity: 0;
	}
}

@-webkit-keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}
	100% {
		left: 0; opacity: 0;
	}
}


@keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}

	100% {
		left: 0; opacity: 0;
	}
}
    </style>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- slide show -->
        <link rel="stylesheet" type="text/css" href="style.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        {{-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}

        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


        <title>@yield('title')</title>
    </head>

    <body>

        <style>
            body
            {
                font-family: Poppins;
            }

            li
            {
                margin-left: 50px;
            }

        </style>

        <div id="app">

        @include('layouts.homepage.navbar')

        <div id="main-content">
            @yield('content')
        </div>

        @include('layouts.homepage.footer')


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
