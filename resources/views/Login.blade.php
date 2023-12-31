<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login KPUM Fasilkom Unej</title>
	<link rel="icon" href={{ asset("KPUM.ico") }} type="image/x-icon"/>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<style>
	@font-face {
	    font-family: 'Source Sans Pro';
	    font-style: normal;
	    font-weight: 200;
	    src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
	}
	@font-face {
	    font-family: 'Source Sans Pro';
	    font-style: normal;
	    font-weight: 300;
	    src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
	}
	* {
	    box-sizing: border-box;
	    margin: 0;
	    padding: 0;
	    font-weight: 300;
	}
	body {
	    font-family: 'Source Sans Pro', sans-serif;
	    color: white;
	    font-weight: 300;
	}
	body ::-webkit-input-placeholder {
	    /* WebKit browsers */
	    font-family: 'Source Sans Pro', sans-serif;
	    color: white;
	    font-weight: 300;
	}
	body :-moz-placeholder {
	    /* Mozilla Firefox 4 to 18 */
	    font-family: 'Source Sans Pro', sans-serif;
	    color: white;
	    opacity: 1;
	    font-weight: 300;
	}
	body ::-moz-placeholder {
	    /* Mozilla Firefox 19+ */
	    font-family: 'Source Sans Pro', sans-serif;
	    color: white;
	    opacity: 1;
	    font-weight: 300;
	}
	body :-ms-input-placeholder {
	    /* Internet Explorer 10+ */
	    font-family: 'Source Sans Pro', sans-serif;
	    color: white;
	    font-weight: 300;
	}
	.wrapper {
	    background: #50a3a2;
	    background: linear-gradient(to bottom right, #0457f0 0%, #04bfd8 100%);
	    position: absolute;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    overflow: hidden;
	}
	.wrapper.form-success .container h1 {
	    transform: translateY(85px);
	}
	.container {
	    max-width: 50%;
	    margin: 0 auto;
	    padding: 80px 0;
	    height: 100%;
	    text-align: center;
	}
	.container h1 {
	    font-size: 40px;
	    transition-duration: 1s;
	    transition-timing-function: ease-in-put;
	    font-weight: 200;
	}
	form {
	    padding: 20px 0;
	    position: relative;
	    z-index: 2;
	}
	form input {
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    appearance: none;
	    outline: 0;
	    border: 1px solid rgba(255, 255, 255, 0.4);
	    background-color: rgba(255, 255, 255, 0.2);
	    width: 250px;
	    border-radius: 3px;
	    padding: 10px 15px;
	    margin: 0 auto 10px auto;
	    display: block;
	    text-align: center;
	    font-size: 18px;
	    color: white;
	    transition-duration: 0.25s;
	    font-weight: 300;
	}
	form input:hover {
	    background-color: rgba(255, 255, 255, 0.4);
	}
	form input:focus {
	    background-color: white;
	    width: 300px;
	    color: #53e3a6;
	}
	form button {
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    appearance: none;
	    outline: 0;
	    background-color: white;
	    border: 0;
	    padding: 10px 15px;
	    color: #53e3a6;
	    border-radius: 3px;
	    width: 250px;
	    cursor: pointer;
	    font-size: 18px;
	    transition-duration: 0.25s;
	}
	form button:hover {
	    background-color: #f5f7f9;
	}
	.bg-bubbles {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    z-index: 1;
	}
	.bg-bubbles li {
	    position: absolute;
	    list-style: none;
	    display: block;
	    width: 40px;
	    height: 40px;
	    background-color: rgba(255, 255, 255, 0.15);
	    bottom: -160px;
	    -webkit-animation: square 25s infinite;
	    animation: square 25s infinite;
	    transition-timing-function: linear;
	}
	.bg-bubbles li:nth-child(1) {
	    left: 10%;
	}
	.bg-bubbles li:nth-child(2) {
	    left: 20%;
	    width: 80px;
	    height: 80px;
	    -webkit-animation-delay: 2s;
	    animation-delay: 2s;
	    -webkit-animation-duration: 17s;
	    animation-duration: 17s;
	}
	.bg-bubbles li:nth-child(3) {
	    left: 25%;
	    -webkit-animation-delay: 4s;
	    animation-delay: 4s;
	}
	.bg-bubbles li:nth-child(4) {
	    left: 40%;
	    width: 60px;
	    height: 60px;
	    -webkit-animation-duration: 22s;
	    animation-duration: 22s;
	    background-color: rgba(255, 255, 255, 0.25);
	}
	.bg-bubbles li:nth-child(5) {
	    left: 70%;
	}
	.bg-bubbles li:nth-child(6) {
	    left: 80%;
	    width: 120px;
	    height: 120px;
	    -webkit-animation-delay: 3s;
	    animation-delay: 3s;
	    background-color: rgba(255, 255, 255, 0.2);
	}
	.bg-bubbles li:nth-child(7) {
	    left: 32%;
	    width: 160px;
	    height: 160px;
	    -webkit-animation-delay: 7s;
	    animation-delay: 7s;
	}
	.bg-bubbles li:nth-child(8) {
	    left: 55%;
	    width: 20px;
	    height: 20px;
	    -webkit-animation-delay: 15s;
	    animation-delay: 15s;
	    -webkit-animation-duration: 40s;
	    animation-duration: 40s;
	}
	.bg-bubbles li:nth-child(9) {
	    left: 25%;
	    width: 10px;
	    height: 10px;
	    -webkit-animation-delay: 2s;
	    animation-delay: 2s;
	    -webkit-animation-duration: 40s;
	    animation-duration: 40s;
	    background-color: rgba(255, 255, 255, 0.3);
	}
	.bg-bubbles li:nth-child(10) {
	    left: 90%;
	    width: 160px;
	    height: 160px;
	    -webkit-animation-delay: 11s;
	    animation-delay: 11s;
	}
	@-webkit-keyframes square {
	    0% {
	        transform: translateY(0);
	    }
	    100% {
	        transform: translateY(-700px) rotate(600deg);
	    }
	}
	@keyframes  square {
	    0% {
	        transform: translateY(0);
	    }
	    100% {
	        transform: translateY(-700px) rotate(600deg);
	    }
	}
	</style>
	
	
	<style type="text/css">
	    * {
	        cursor: url(https://cur.cursors-4u.net/cursors/cur-2/cur116.cur), auto !important;
	    }
	</style><a href="https://www.cursors-4u.com/cursor/2008/12/17/cool-blue-outer-glow-pointer.html" target="_blank"
	    title="Cool Blue Outer Glow Pointer"><img src="https://cur.cursors-4u.net/cursor.png" border="0"
	        alt="Cool Blue Outer Glow Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
</head>

@if (Session::has('alertSuccess'))
<body onpageshow="alertSuccess()">
@elseif (Session::has('alertInfo'))
<body onpageshow="alertInfo()">
@elseif (Session::has('alertDanger'))
<body onpageshow="alertDanger()">
@else
<body>
@endif
    <div class="wrapper">
        <div class="container">
            <h1>Login</h1>
            <form class="form" method="post" action="{{ route('AuthLogin') }}">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" id="login-button">Login</button>
            </form>
        </div>
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

	@php
    echo "
    <script>
        function alertSuccess() {
            swal({
                width: 350,
                type: 'success',
                title: 'Sukses',
                text: '".Session::get('alertSuccess')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
        function alertInfo() {
            swal({
                width: 350,
                type: 'info',
                title: 'Info',
                text: '".Session::get('alertInfo')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
        function alertDanger() {
            swal({
                width: 350,
                type: 'error',
                title: 'Gagal',
                text: '".Session::get('alertDanger')."',
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        }
    </script>
    ";
    @endphp

</body>
</html>