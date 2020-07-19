<div class="container">
<div class="row">
		<div class="col-md-9 col-question">
			<div class="list-school">
				<div class="page-heading d-flex">
					<h4 class="box-title-page mr-auto">Có <?php echo mysqli_num_rows($data["SchoolTrangHienTai"]) ?> kết quả</h4>
					<div class="dh-cd d-flex">
						<a href="#"> <span class="top-school-star"> <svg width="1em"
									height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
									fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path
										d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
</svg>
						</span> <span class="top-school-text">TẤT CẢ >></span></a>
					</div>
				</div>
				<div class="list-item d-flex flex-wrap">
					<?php
    while ($row = mysqli_fetch_array($data["SchoolTrangHienTai"])) {
        ?>
        <div class="item-wrapper">
        <a href="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>">
						<div class="item-review">
							<div class="school-logo">
								<img
									src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>">
							</div>
							<div class="school-info">
								<div class="school-name"><?php echo $row["tenschool"] ?></div>
								<div class="school-rating d-flex">
									<div class="star">
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
									</div>
									<div class="rating-count">(<?php echo $row["luotdanhgia"] ?>)</div>
								</div>
								<div class="school-category">
									<span class="icon"><i class="fa fa-graduation-cap"
										aria-hidden="true"></i> </span> <span class="text"><?php echo $row["category"] ?></span>

								</div>
								<div class="school-address">
									<span class="icon"><i class="fa fa-building" aria-hidden="true"></i>
									</span> <span class="text"><?php echo $row["diachi"] ?></span>
								</div>
							</div>
						</div>
						</a>
					</div>
        <?php } ?>
        
					</div>
					<div class="container">
		<?php echo $data["Nav"] ?>
	</div>
			</div>
		</div>
		<div class="col-md-3 col-right">
			<div class="right-nav">
				<div class="wrapper-nav row">
					<div class="col-md-12 no-padding">
						<div class="item-list">
							<h3 class="nav-header">DANH MỤC</h3>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
								</span> <span class="tag-text">Đại học</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Cao đẳng</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Nghề</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Quốc tế</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Trung Tâm Tiếng Anh</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Anh TPHCM</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Anh Hà Nội</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Hàn</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Nhật</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Trung</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Pháp</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng Đức</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Tiếng TBN</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Kỹ năng, Nghiệp vụ</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Mỹ</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Anh</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Úc</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Singapore</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Nhật</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Hàn</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Đài Loan</span>
							</div>
							<div class="item-nav">
								<span class="tag-icon"><i class="fa fa-tag" aria-hidden="true"></i>
</span> <span class="tag-text">Du học Trung Quốc</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-social">
				<div class="wrapper-social row">
					<div class="col-md-12 no-padding">
						<div class="facebook-page">
							<h3 class="social-header">FACEBOOK</h3>
							<div id="fb-root"></div>
							<script async defer crossorigin="anonymous"
								src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=296849044479436&autoLogAppEvents=1"
								nonce="LpZo3nyz"></script>
							<div class="fb-page"
								data-href="https://www.facebook.com/Edu2Review"
								data-tabs="timeline" data-width="500" data-height=""
								data-small-header="false" data-adapt-container-width="true"
								data-hide-cover="false" data-show-facepile="true">
								<blockquote cite="https://www.facebook.com/Edu2Review"
									class="fb-xfbml-parse-ignore">
									<a href="https://www.facebook.com/Edu2Review">Edu2Review.com</a>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>