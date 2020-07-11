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
.review-avatar{
	float: left;
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
.review-content{
	margin-left: 65px;
    padding: 0px;
    display: block;
    background: #EFFBEF;
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
			<div class="review-avatar">
				<div class="review-xborder"></div>
				<img alt="Binh Nguyen"
					src="https://secure.gravatar.com/avatar/281900ded1468c7a46fdb098a12575d0?s=64&amp;d=mm&amp;r=g"
					srcset="https://secure.gravatar.com/avatar/281900ded1468c7a46fdb098a12575d0?s=128&amp;d=mm&amp;r=g 2x"
					class="avatar avatar-64 photo" height="64" width="64"
					itemprop="image">
			</div>
			<div class="review-content">
				<div class="review-header">
					<div class="wc-comment-author wcai-uname-info wcai-not-clicked">
						<a rel="nofollow" href="http://www.chiasefree.com" target="_blank">Binh
							Nguyen</a>
					</div>
					<div class="badge" style="background-color: #7e3bd0">
						<i class="fa fa-comments-o"></i> 1,124
					</div>
					<div class="wc-comment-link">
						<i class="fa fa-share-alt wc-share-link wpf-cta"
							aria-hidden="true" title="Share"></i><span
							class="share_buttons_box"><a class="wc_tw" target="_blank"
							href="https://twitter.com/intent/tweet?text=Th%E1%BA%A5y+n%C3%A2ng+l%C3%AAn+unlitimed+h%E1%BA%BFt+r+th%C3%AC+ph%E1%BA%A3i%0A...+&amp;url=https%3A%2F%2Fcanhme.com%2Fqc%2Fnhan-hoa-nang-cap-mien-phi-thong-so-hosting%2F%23comment-216557"
							title=""><i class="fa fa-twitter wpf-cta" aria-hidden="true"></i><span>Share
									On Twitter</span></a><a class="wc_go" target="_blank"
							href="https://plus.google.com/share?url=https://canhme.com/qc/nhan-hoa-nang-cap-mien-phi-thong-so-hosting/"
							title=""><i class="fa fa-google wpf-cta" aria-hidden="true"></i><span>Share
									On Google</span></a></span><i id="wcai-comment_216557"
							class="fas fa-info wpf-cta wcai-info wcai-not-clicked"></i>
					</div>
					<div class="wpdiscuz_clear"></div>
				</div>
				<div class="review-text">
					<p>Thấy nâng lên unlitimed hết r thì phải</p>
				</div>
				<div class="review-footer">
					<div class="wc-footer-left">
						<span class="wc-reply-button wc-cta-button" title="Trả lời"><i
							class="fa fa-reply" aria-hidden="true"></i> Trả lời</span>
					</div>
					<div class="wc-footer-right">
						<div class="wc-comment-date">
							<i class="fa fa-clock-o" aria-hidden="true"></i><a
								href="https://canhme.com/qc/nhan-hoa-nang-cap-mien-phi-thong-so-hosting/#comment-216557">16
								giờ trước</a>
						</div>
						<div class="wc-toggle"></div>
					</div>
					<div class="wpdiscuz_clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>