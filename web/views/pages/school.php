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
.list-review .review-item {
	margin-top: 50px;
	margin-bottom: 20px;
}

.review-box {
	box-sizing: border-box;
}

.review-avatar, .reply-avatar {
	float: left;
	margin-left: 5px;
}

.review-avatar .avatar, .reply-avatar .avatar {
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
.review-content, .reply-content {
	padding: 0px;
	display: block;
	background: #E0ECF8;
}

.review-header, .reply-header {
	border-bottom: 1px solid #DDDDDD;
	margin-bottom: 7px;
	align-items: stretch;
	display: flex;
}

.review-text, .reply-text {
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

.review-author, .reply-author {
	color: #669900 !important;
	align-items: center;
	font-size: 1rem;
	margin-left: 10px;
	display: flex;
	flex-grow: 1;
}

.reply-author i.fa-thumbs-up {
	color: red;
}

.reply-author i.fa-thumbs-down {
	color: blue;
}

.review-author .school-rating {
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
/*reply*/
.list-reply .reply-item {
	margin-top: 10px;
	margin-left: 50px;
}
</style>
<div class="container">
	<?php
while ($row = mysqli_fetch_array($data["School"])) {
    ?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"
					aria-hidden="true"></i> Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $row["category"] ?>&nbsp;<?php echo $row["tenschool"] ?></li>
		</ol>
	</nav>
	<div class="general-info">
		<div class="school-logo">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>"
				class="img-128">
		</div>
		<div class="school-info">
			<h2 class="school-name">
				<a href="#"><?php echo $row["tenschool"] ?></a> <span
					class="school-rating">
				<?php
    $n = $row["rate"];
    $whole = floor($row["rate"]);
    for ($i = 1; $i <= $whole; $i ++) {
        ?>
            <span class="fa fa-star checked"></span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
											<span class="fa fa-star"></span>
										<?php } ?>
				<span class="school-rating-count">(<?php echo mysqli_num_rows($data["School"]) ?>)</span>
				</span>
			</h2>
			<div class="school-edu">
				<div class="edu-category">
					<span class="edu-category"> <span class="icon"><i
							class="fa fa-graduation-cap" aria-hidden="true"></i></span><?php echo $row["category"]?>
					</span>
				</div>
				<div class="school-infrastructure">
					<span class="school-location"> <span class="icon"><i
							class="fa fa-rss" aria-hidden="true"></i> </span>
						<?php echo $row["website"]?>
					</span>
				</div>
				<div class="school-location">
					<span class="school-location"> <span class="icon"><i
							class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $row["diachi"]?>
					</span>
				</div>
			</div>
		</div>
		<button
			class="button-review button is-success is-medium is-rounded upload-review"
			data-target="#review-modal" data-toggle="modal">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="general-mobile-view">
		<div class="school-logo-mobile">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>"
				class="img-128">
		</div>
		<div class="school-info-mobile">
			<h2 class="school-name">
				<a href="#"><?php echo $row["tenschool"] ?></a>
			</h2>
			<div class="school-rating-count">Reviews - <?php echo mysqli_num_rows($data["School"]) ?></div>
			<div class="school-rating">
				Trung bình: <?php
    $n = $row["rate"];
    $whole = floor($row["rate"]);
    for ($i = 1; $i <= $whole; $i ++) {
        ?>
            <span class="fa fa-star checked"></span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
											<span class="fa fa-star"></span>
										<?php } ?>
			</div>
		</div>
	</div>
	<div class="more-info-mobile">
		<div class="school-edu">
			<div class="edu-category">
				<span class="edu-category"> <span class="icon"><i
						class="fa fa-graduation-cap" aria-hidden="true"></i></span><?php echo $row["category"]?>
				</span>
			</div>
			<div class="school-infrastructure">
				<span class="school-location"> <span class="icon"><i
						class="fa fa-rss" aria-hidden="true"></i> </span>
<?php echo $row["website"]?>
				</span>
			</div>
			<div class="school-location">
				<span class="school-location"> <span class="icon"><i
						class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $row["diachi"]?>
				</span>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="button-review-mobile">
		<button
			class="button-review button is-success is-medium is-rounded upload-review">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="review-section">
		<div class="list-review">
		 <?php
$rowIndex = 0;
while ($r = mysqli_fetch_array($data["Review"])) {
    ?>
			<div class="review-item review-box">
				<div class="review-content">
					<div class="review-header">
						<div class="review-avatar">
							<div class="review-xborder"></div>
							<img alt="<?php echo $r["review_reviewer"]?>"
								src="<?php echo $servername ?>/web/public/images/<?php echo $r["review_member"].".png"?>"
								class="avatar">
						</div>
						<div class="review-author">
							<?php echo $r["review_reviewer"]?>&nbsp;(<?php echo $r["review_about"]?>)<span
								class="school-rating"> <?php
    $n = $r["review_sao"];
    $whole = floor($r["review_sao"]);
    for ($i = 1; $i <= $whole; $i ++) {
        ?>
            <span class="fa fa-star checked"></span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
											<span class="fa fa-star"></span>
										<?php } ?>
							</span>
						</div>
						<div class="review-share-link">
							<i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Share
						</div>
					</div>
					<div class="review-text">
						<p><?php echo $r["review_noidung"]?></p>
					</div>
					<div class="review-footer">
						<a href="#"><span class="reply-button" title="Trả lời"><i
								class="fa fa-reply" aria-hidden="true"></i>Trả lời</span></a> <a
							href="#"><span class="delete-button" title="Xóa review"><i
								class="fa fa-trash" aria-hidden="true"></i>Yêu cầu Xóa</span></a>
					</div>
				</div>
				<div class="list-reply">
				       <?php
    
    $dataReply = $r["reply_data"];
    $arrJson = json_decode($dataReply);
    for ($i = 0; $i < count($arrJson); $i ++) {
        ?>
					<div class="reply-item">
						<div class="reply-content">
							<div class="reply-header">
								<div class="reply-avatar">
									<div class="reply-xborder"></div>
									<img alt="<?php echo $arrJson[$i]->replyer ?>"
										src="<?php echo $servername ?>/web/public/images/<?php echo $arrJson[$i]->member ?>.png"
										class="avatar">
								</div>
								<div class="reply-author"><?php echo $arrJson[$i]->replyer ?>&nbsp;đã&nbsp;
								<?php if (($arrJson[$i]->reaction)=="LIKE") {?>
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
								<?php } else if(($arrJson[$i]->reaction)=="HATE") { ?>
								<i class="fa fa-thumbs-down" aria-hidden="true"></i>
								<?php }else{ ?>
					đề nghị xóa X
					<?php } ?>
								</div>
							</div>
							<div class="reply-text">
								<p><?php echo $arrJson[$i]->noidung ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="modal fade" id="review-modal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">VIẾT REVIEW CHO
						TRƯỜNG</h5>
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="review-form">
						<div class="form-group">
							<label for="reviewer" class="col-form-label">Tên Họ</label> <input
								type="text" class="form-control" id="reviewer"
								placeholder="Tên người viết review (Mặc định là KHÁCH)">
						</div>
						<div class="form-group">
							<label for="reviewer" class="col-form-label">Thông Tin</label> <input
								type="text" class="form-control" id="about"
								placeholder="Học viên/Sinh viên/Phụ Huynh...">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Review Trường <span
								class="text-danger">(Bắt buộc)</span></label>
							<textarea class="form-control" id="message-text"
								placeholder="Hãy cung cấp thông tin thật chính xác"></textarea>
						</div>
						<div class="form-group">
							<label for="reviewer" class="col-form-label">Bạn cho trường mấy
								điểm</label> <select class="form-control" id="score"
								name="score">
								<option value="5">5 điểm - Tuyệt vời</option>
								<option value="4">4 điểm - Quá tốt</option>
								<option value="3" selected>3 điểm - Tạm được</option>
								<option value="2">2 điểm - Không tốt</option>
								<option value="1">1 điểm - Cực kỳ tệ</option>
							</select>
						</div>
						<input type="hidden" name="schoolId" value=""> <input
							type="hidden" name="schoolUrl" value="">
						<div class="g-recaptcha"
							data-sitekey="6LevlLEZAAAAAEGrjvk9tDC7xoUOmCeCRma6RY7-"
							data-callback="onReviewCaptchaSuccess">
						</div>
						<div class="form-group"><mark>Người đăng chịu trách nhiệm về tính xác thực của nội dung</mark></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-dismiss="modal">Hủy Bỏ</button>
					<button type="button" class="btn btn-primary button-review-submit" disabled>Đăng Review</button>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo $servername ?>/web/public/js/review.js" async
 	defer></script>
</div>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>