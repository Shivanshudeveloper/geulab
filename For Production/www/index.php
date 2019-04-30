<!DOCTYPE html>
<html lang="en">

<head>
	<title>Param Lab Management | Powered By FlekDeno Technology</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" id="pwd" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>




					<div class="container-login100-form-btn">
						<a href="#" onclick="signInUser();" class="login100-form-btn">
							Login
						</a>
					</div>
					<br />

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	<script>
		var _0x2b6a = ["\x41\x49\x7A\x61\x53\x79\x41\x47\x31\x31\x42\x2D\x62\x4E\x57\x58\x38\x35\x47\x51\x53\x63\x2D\x65\x4C\x6A\x6A\x5A\x55\x4D\x35\x70\x52\x59\x77\x47\x59\x32\x30", "\x73\x69\x68\x2D\x61\x70\x70\x2D\x39\x34\x30\x35\x39\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x61\x70\x70\x2E\x63\x6F\x6D", "\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x69\x68\x2D\x61\x70\x70\x2D\x39\x34\x30\x35\x39\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x69\x6F\x2E\x63\x6F\x6D", "\x73\x69\x68\x2D\x61\x70\x70\x2D\x39\x34\x30\x35\x39", "\x73\x69\x68\x2D\x61\x70\x70\x2D\x39\x34\x30\x35\x39\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x63\x6F\x6D", "\x33\x30\x34\x35\x31\x35\x37\x36\x39\x36\x37\x36", "\x69\x6E\x69\x74\x69\x61\x6C\x69\x7A\x65\x41\x70\x70", "\x76\x61\x6C\x75\x65", "\x65\x6D\x61\x69\x6C", "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64", "\x70\x77\x64", "\x63\x6F\x64\x65", "\x6D\x65\x73\x73\x61\x67\x65", "\x63\x61\x74\x63\x68", "\x73\x69\x67\x6E\x49\x6E\x57\x69\x74\x68\x45\x6D\x61\x69\x6C\x41\x6E\x64\x50\x61\x73\x73\x77\x6F\x72\x64", "\x61\x75\x74\x68", "\x68\x72\x65\x66", "\x6C\x6F\x63\x61\x74\x69\x6F\x6E", "\x2E\x2F\x68\x6F\x6D\x65\x2E\x70\x68\x70", "\x4E\x6F\x20\x55\x73\x65\x72", "\x6C\x6F\x67", "\x6F\x6E\x41\x75\x74\x68\x53\x74\x61\x74\x65\x43\x68\x61\x6E\x67\x65\x64"];
		var config = {
			apiKey: _0x2b6a[0],
			authDomain: _0x2b6a[1],
			databaseURL: _0x2b6a[2],
			projectId: _0x2b6a[3],
			storageBucket: _0x2b6a[4],
			messagingSenderId: _0x2b6a[5]
		};
		firebase[_0x2b6a[6]](config);
		const signInUser = () => {
			var _0x328bx3 = document[_0x2b6a[9]](_0x2b6a[8])[_0x2b6a[7]];
			var _0x328bx4 = document[_0x2b6a[9]](_0x2b6a[10])[_0x2b6a[7]];
			firebase[_0x2b6a[15]]()[_0x2b6a[14]](_0x328bx3, _0x328bx4)[_0x2b6a[13]](function(_0x328bx5) {
				var _0x328bx6 = _0x328bx5[_0x2b6a[11]];
				var _0x328bx7 = _0x328bx5[_0x2b6a[12]];
				alert(_0x328bx7)
			})
		};
		firebase[_0x2b6a[15]]()[_0x2b6a[21]](function(_0x328bx8) {
			if (_0x328bx8) {
				window[_0x2b6a[17]][_0x2b6a[16]] = _0x2b6a[18]
			} else {
				console[_0x2b6a[20]](_0x2b6a[19])
			}
		})
	</script>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>