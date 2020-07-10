<style>
.breadcrumb {
	background: none;
	margin-bottom: 0px;
}
.breadcrumb i{
	font-size:1.2rem;
	font-weight: 600;
}
.breadcrumb a{
	text-decoration: none;
}
.general-info {
	border: 1px solid #0275d8;
	display: flex;
	color: #4a4a4a;
	margin-bottom: 10px;
}

.general-info .school-name {
	font-size: 20px;
	font-weight: 600 !important;
	color: #000;
	margin-top: 0px;
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

.img-128 {
	width: 128px !important;
	height: 128px !important;
}

@media screen and (max-width: 768px) {
	.general-info {
		display: none;
	}

	.general-mobile-view, .more-info-mobile{
		display: flex;
		background-color: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 50, .04);
        transition: all .3s ease-in-out;
        width: 100%;
        overflow-x: hidden;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.general-mobile-view .school-logo-mobile{
        margin-right: 10px;
    }
	.school-info-mobile{
        display: block;
    }
    .school-info-mobile .school-rating-count{
        font-weight: 600;
    	margin-top: 5px;
    }
    .school-info-mobile h2{
        margin-bottom: 0px;
    	line-height: 1rem;
    }
	.school-info-mobile .school-name a{
        font-size: 1rem;
		font-weight: 600;
		text-decoration: none;
    }
	.school-info-mobile .school-rating {
		position: relative;
		font-size: 1rem;
		font-weight: 600; 
	}
	.school-info-mobile .school-rating i:nth-last-child(even){
        margin-left: 5px;
		margin-right: 5px;
    }
}
/*hiển thị mobile*/
@media screen and (min-width: 768px) {
	.general-mobile-view {
		display: none;
	}
	.more-info-mobile{
        display: none;
    }
}
</style>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
			Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Rfgsdgsdgsdfgs</li>
		</ol>
	</nav>
	<div class="general-info">
		<div class="school-logo">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/logo-dhkt.png"
				class="img-128">
		</div>
		<div class="school-info">
			<h2 class="school-name">
				<a href="#">Trường Đại Học Ngân Hàng TP. HCM Trường Đại Học Ngân Hàng TP. HCM</a> <span
					class="school-rating"> <span> <span
						class="icon is-small has-text-warning"> <i
							class="fa fa-star checked"></i>
					</span> <span class="icon is-small has-text-warning"> <i
							class="fa fa-star checked"></i>
					</span> <span class="icon is-small has-text-warning"> <i
							class="fa fa-star checked"></i>
					</span> <span class="icon is-small has-text-warning"> <i
							class="fa fa-star"></i>
					</span> <span class="icon is-small has-text-warning"> <i
							class="fa fa-star"></i>
					</span>
				</span><span class="school-rating-count">(8)</span>
				</span>
			</h2>
			<div class="school-edu">
				<div class="edu-category">
					<span class="edu-category"> <span class="icon"><i
							class="fa fa-graduation-cap" aria-hidden="true"></i></span> Đại
						học
					</span>
				</div>
				<div class="school-infrastructure">
					<span class="school-location"> <span class="icon"><i class="fa fa-rss" aria-hidden="true"></i>
</span> https://fontawesome.com/
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
	<div class="general-mobile-view">
		<div class="school-logo-mobile">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/logo-dhkt.png"
				class="img-128">
		</div>
		<div class="school-info-mobile">
			<h2 class="school-name">
				<a href="#">Trường Đại Học Ngân Hàng TP. HCM Trường Đại Học Ngân Hàng TP. HCM</a> 
			</h2>
			<div class="school-rating-count">Reviews - 8</div>
			<div
					class="school-rating">Trung bình: <span> <i
							class="fa fa-star checked"></i><i
							class="fa fa-star checked"></i><i
							class="fa fa-star checked"></i><i
							class="fa fa-star"></i><i
							class="fa fa-star"></i>
				</span> 
				</div>
		</div>
	</div>
	<div class="more-info-mobile">
		<div class="school-edu">
				<div class="edu-category">
					<span class="edu-category"> <span class="icon"><i
							class="fa fa-graduation-cap" aria-hidden="true"></i></span> Đại
						học
					</span>
				</div>
				<div class="school-infrastructure">
					<span class="school-location"> <span class="icon"><i class="fa fa-rss" aria-hidden="true"></i>
</span> https://fontawesome.com/
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