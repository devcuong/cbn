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
	.general-mobile-view, .more-info-mobile {
		display: flex;
		background-color: #fff;
		box-shadow: 0 2px 2px 0 rgba(0, 0, 50, .04);
		transition: all .3s ease-in-out;
		width: 100%;
		overflow-x: hidden;
		margin-bottom: 10px;
		margin-top: 10px;
		font-weight: 600;
	}
	.general-mobile-view .school-logo-mobile {
		margin-right: 10px;
	}
	.school-info-mobile {
		display: block;
	}
	.school-info-mobile .school-rating-count {
		font-weight: 600;
		margin-top: 5px;
	}
	.school-info-mobile h2 {
		margin-bottom: 0px;
		line-height: 1rem;
	}
	.school-info-mobile .school-name a {
		font-size: 1rem;
		font-weight: 600;
		text-decoration: none;
	}
	.school-info-mobile .school-rating {
		position: relative;
		font-size: 1rem;
		font-weight: 600;
	}
	.school-info-mobile .school-rating i:nth-last-child(even) {
		margin-left: 5px;
		margin-right: 5px;
	}
	.button.upload-review {
		background-color: #f7941d;
	}
	.button.is-rounded {
		border-radius: 0px;
		padding-left: 1em;
		padding-right: 1em;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
	}
	.button-review-mobile {
		text-align: center;
	}
	.button-review-mobile .button-review {
		box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);
		opacity: 0.85;
		border: none;
		transition: 0.2s all;
		color: #fff;
	}
	.button-review-mobile .button-review:hover {
		background-color: #23d160;
		border-color: transparent;
		color: #fff;
	}
	.button.is-medium {
		font-size: 1.25rem;
	}
}
/*hiển thị mobile*/
@media screen and (min-width: 768px) {
	.general-mobile-view, .more-info-mobile, .button-review-mobile {
		display: none;
	}
	.button.upload-review {
		background-color: #f7941d;
	}
	.button.is-rounded {
		border-radius: 0px;
		padding-left: 1em;
		padding-right: 1em;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
	}
	.general-info .button-review {
		position: absolute;
		box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);
		opacity: 0.85;
		border: none;
		top: 6rem;
		right: 1.5rem;
		transition: 0.2s all;
		color: #fff;
	}
	.general-info .button-review:hover {
		background-color: #23d160;
		border-color: transparent;
		color: #fff;
	}
	.button.is-medium {
		font-size: 1.25rem;
	}
}

/*review*/
.review-box {
	box-sizing: border-box;
}

.review-avatar {
	float: left;
	margin-left: 5px;
}

.review-avatar .avatar {
	box-shadow: 0px 0px 6px 1px rgba(0, 0, 0, 0.2);
	width: 50px;
	height: 50px;
}
/*.review-avatar{
    width: 50px;
    float: left;
    text-align: center;
    line-height: 16px;
}
.review-xborder{
	display: none;
    height: 20px;
    border-right: 1px solid #ddd;
    width: 100%;    
    right: -17px;
}*/
.review-content {
	padding: 0px;
	display: block;
	background: #E0ECF8;
}

.review-header {
	border-bottom: 1px solid #DDDDDD;
	margin-bottom: 7px;
	height: 50px;
	display: flex;
}

.review-text {
	line-height: 20px;
	text-align: left;
	padding: 5px 10px;
	min-height: 50px;
}

.review-footer {
	font-size: 13px;
	font-weight: normal;
	padding: 2px 10px 10px 10px;
	margin-top: 0px;
	min-height: 28px;
	text-align: left;
}

.review-footer a {
	color: #fff;
	text-decoration: none;
}

.review-footer .reply-button {
	background-color: #23d160;
	border: 1px solid rgba(0, 0, 0, 0.1);
	line-height: 1.4;
	margin: 6px 0px 2px 15px;
	color: #fff;
	padding: 5px;
}

.review-footer .delete-button {
	background-color: #f05555;
	border: 1px solid rgba(0, 0, 0, 0.1);
	line-height: 1.4;
	margin: 6px 0px 2px 15px;
	color: #fff;
	padding: 5px;
}

.review-footer .delete-button:hover {
	color: #fff;
	text-decoration: none;
	background-color: #0275d8;
}

.review-footer .reply-button:hover {
	color: #fff;
	text-decoration: none;
	background-color: #f7941d;
}

.review-author {
	color: #669900 !important;
	align-items: center;
	font-size: 1rem;
	margin-left: 10px;
	display: flex;
	flex-grow: 1;
}

.review-author .school-rating{
	color: #000;
}

.review-share-link {
	font-size: 1rem;
	display: flex;
	align-items: center;
	padding: 0 0.75rem;
}

.share-icon {
	font-size: 13px;
	padding: 3px 3px 3px 3px;
	line-height: 15px;
}
</style>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"
					aria-hidden="true"></i> Trang chủ</a></li>
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
				<a href="#">Trường Đại Học Ngân Hàng TP. HCM Trường Đại Học Ngân
					Hàng TP. HCM</a> <span class="school-rating"> <span> <span
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
					<span class="school-location"> <span class="icon"><i
							class="fa fa-rss" aria-hidden="true"></i> </span>
						https://fontawesome.com/
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
		<button
			class="button-review button is-success is-medium is-rounded upload-review">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="general-mobile-view">
		<div class="school-logo-mobile">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/logo-dhkt.png"
				class="img-128">
		</div>
		<div class="school-info-mobile">
			<h2 class="school-name">
				<a href="#">Trường Đại Học Ngân Hàng TP. HCM Trường Đại Học Ngân
					Hàng TP. HCM</a>
			</h2>
			<div class="school-rating-count">Reviews - 8</div>
			<div class="school-rating">
				Trung bình: <span> <i class="fa fa-star checked"></i><i
					class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
					class="fa fa-star"></i><i class="fa fa-star"></i>
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
				<span class="school-location"> <span class="icon"><i
						class="fa fa-rss" aria-hidden="true"></i> </span>
					https://fontawesome.com/
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
	<div class="button-review-mobile">
		<button
			class="button-review button is-success is-medium is-rounded upload-review">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="review-section">
		<div class="review-item review-box">
			<div class="review-content">
				<div class="review-header">
					<div class="review-avatar">
						<div class="review-xborder"></div>
						<img alt="Binh Nguyen"
							src="<?php echo $servername ?>/web/public/images/guest-avatar.png"
							class="avatar">
					</div>
					<div class="review-author">
						Binh Nguyen&nbsp;(abc)<span class="school-rating"> <span> <span
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
						</span>
						</span>
					</div>
					<div class="review-share-link">
						<i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Share
					</div>
				</div>
				<div class="review-text">
					<p>Thấy nâng lên unlitimed hết r thì phải</p>
				</div>
				<div class="review-footer">
					<a href="#"><span class="reply-button" title="Trả lời"><i
							class="fa fa-reply" aria-hidden="true"></i>Trả lời</span></a> <a
						href="#"><span class="delete-button" title="Xóa review"><i
							class="fa fa-trash" aria-hidden="true"></i>Yều cầu Xóa</span></a>
				</div>
			</div>
		</div>
	</div>
</div>