<style>
.breadcrumb {
	background: none;
	margin-bottom: 0px;
}

.breadcrumb i {
	font-size: 1.2rem;
	font-weight: 600;
}

.breadcrumb a {
	text-decoration: none;
}

.box {
	padding: 10px;
	margin-bottom: 10px;
}

.box-border {
	background-color: #fff;
	border-width: 1px;
	border-style: solid;
	border-color: #e5e6e9 #dfe0e4 #d0d1d5;
	border-radius: 3px;
}

.form-login .title-login {
	font-size: 150%;
	font-weight: bold;
	margin-top: 20px;
}
</style>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo $servername ?>"><i
					class="fa fa-home" aria-hidden="true"></i> TRANG CHỦ</a></li>
			<li class="breadcrumb-item active" aria-current="page">ĐĂNG NHẬP</li>
		</ol>
	</nav>
</div>
<div class="container">
	<div class="box box-border form-login">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-md-2 col-xs-4 text-center">
				<h1 class="title-login">ĐĂNG NHẬP</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="card-block p-2">
					<form class="ng-pristine ng-invalid ng-invalid-required">
						<label>Tài khoản:</label>
						<div class="input-username">
							<input
								class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
								ng-model="userName" id="username" name="username"
								ng-keypress="($event.charCode==13)?dangNhap():return"
								placeholder="Tài khoản" required="" type="text"> <span
								class="clear-text ng-hide"
								ng-show="userName &amp;&amp; userName.length > 0"
								ng-click="userName = ''"><i class="fa fa-times"></i></span>
						</div>
						<label>Mật khẩu:</label>
						<div class="input-password">
							<input
								class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
								ng-model="password"
								ng-keypress="($event.charCode==13)?dangNhap():return"
								id="password" name="password" placeholder="Mật khẩu" required=""
								type="password"> <span class="clear-text ng-hide"
								ng-show="password &amp;&amp; password.length > 0"
								ng-click="password = ''"><i class="fa fa-times"></i></span> <span
								ng-click="showPassword = !showPassword"><i class="fa fa-eye"></i></span>
						</div>
					</form>
					<div class="text-center">
						<!-- ngIf: thongBao -->
					</div>
					<button class="btn btn-primary btn-block" ng-click="dangNhap()">
						<!-- ngIf: !spinner -->
						<span ng-if="!spinner" class="ng-scope">Đăng nhập</span>
						<!-- end ngIf: !spinner -->
						<!-- ngIf: spinner -->
					</button>
					<div class="text-center">
						<a class="btn btn-link" id="forget-password" href="/quen-mat-khau">Quên
							mật khẩu?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>