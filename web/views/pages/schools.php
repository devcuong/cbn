<link rel="stylesheet" type="text/css"
	href="//fonts.googleapis.com/css?family=Quicksand" />
<style>
.breadcrumb {
	background: none;
	margin-bottom: 0px;
}

.general-info {
	border: 1px solid #0275d8;
	min-height: 222px;
	display: flex;
	font-family: Quicksand;
	color: #4a4a4a;
	margin-bottom: 10px;
}

.general-info .school-logo {
	width: 20%;
}

.general-info .school-info {
	width: 80%;
}

.general-info .school-name {
	font-size: 20px;
	font-weight: 600 !important;
	color: #000;
	margin-top: 10px;
	margin-left: 4px;
	margin-bottom: 0px;
}

.general-info .school-name a {
	text-decoration: none;
}

.general-info .school-edu {
	font-size: 16px;
	font-weight: 600 !important;
	color: #000;
	margin-top: 5px;
	margin-left: 4px;
}

.icon {
	align-items: center;
	display: inline-flex;
	justify-content: center;
	height: 1.5rem;
	width: 1.5rem;
}

.icon .fa {
	font-weight: 900;
}

.school-info .school-rating {
    position: relative;
    top: -2px;
    font-size: 0.85rem;
    margin-left: 0.2rem;
}
</style>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Rfgsdgsdgsdfgs</li>
		</ol>
	</nav>
	<div class="general-info">
		<div class="school-logo">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/logo-dhkt.png">
		</div>
		<div class="school-info">
			<h2 class="school-name">
				<a href="#">Trường Đại Học Ngân Hàng TP. HCM</a>
			<span class="school-rating"> <span> <span
					class="icon is-small has-text-warning"> <i class="fa fa-star checked"></i>
				</span> <span class="icon is-small has-text-warning"> <i
						class="fa fa-star checked"></i>
				</span> <span class="icon is-small has-text-warning"> <i
						class="fa fa-star checked"></i>
				</span> <span class="icon is-small has-text-warning"> <i
						class="fa fa-star"></i>
				</span> <span class="icon is-small has-text-warning"> <i
						class="fa fa-star"></i>
				</span>
			</span>
			<span class="school-rating-count">(8)</span>
			</span>
			</h2>
			<div class="school-edu">
				<div class="edu-category">
					<span class="edu-category"> <span class="icon"><i
							class="fa fa-graduation-cap" aria-hidden="true"></i></span> Đại
						học
					</span>
				</div>
				<div class="school-location">
					<span class="school-location"> <span class="icon"><i
							class="fa fa-map-marker" aria-hidden="true"></i></span> 12 Nguyễn
						Văn Bảo, Phường 4, Gò Vấp, Hồ Chí Minh
					</span>
				</div>
			</div>
		</div>
	</div>
</div>