<style>
.image.is-32x32 {
	height: 32px;
	width: 32px;
}

.image {
	position: relative;
}

figure {
	margin: 0;
	padding: 0;
}

.image img {
	display: block;
	height: auto;
	width: 100%;
}

.autocomplete-suggestion {
	display: flex;
	align-items: center;
	padding: 0.4rem;
}

.ui-autocomplete {
	padding: 0;
}

.autocomplete-suggestion b {
	font-weight: 700;
	color: #209cee;
}

.autocomplete-suggestion .school-logo-auto-complete {
	margin-right: 0.25rem;
	display: flex;
	align-items: center;
	border: 1px solid #c2c2c2;
}

.autocomplete-suggestion .school-name-auto-complete {
	margin-top: 5px;
}

.ui-menu-item .ui-menu-item-wrapper.ui-state-active {
	background: #F5FCFF !important;
	font-weight: bold !important;
	color: #000 !important;
	border: none;
}
</style>
<div class="container">
	<div class="row top-banner">
		<div class="col-md-8 col-banner">
			<div class="main-banner">
				<img alt="review trường học, trung tâm du học"
					src="<?php echo $servername ?>/web/public/images/school-banner.jpg">
				<div class="hero">
					<div class="hero-body z-1">
						<div>
							<div class="field has-addons">
								<div
									class="control has-icons-left is-expanded banner-search-box">
									<form action="<?php echo $servername ?>/tim-kiem/trang-ket-qua"
										method="POST">
										<div class="input-group box-search">
											<input name="school-search" id="school-search"
												class="input form-control ui-autocomplete-input" type="text"
												placeholder="Tìm trường bạn quan tâm / Tìm là có"
												autocomplete="off">
											<div class="input-group-append">
												<button class="btn" type="submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 no-padding col-new-review">
			<div class="new-review container-scroll new-review-container">
				<div class="list-new-review">
				<?php
    while ($r = mysqli_fetch_array($data["15ReviewMoiNhat"])) {
        ?>
        <div class="item-new-review">
						<span class="user-name"><?php echo $r["reviewer"] ?>&nbsp;</span>đã
						review <a
							href="<?php echo $servername ?>/school/<?php echo $r["slugschool"] ?>-<?php echo $r["id"] ?>"><span
							class="review-school-name"><?php echo $r["tenschool"] ?> &nbsp;</span></a>
						<span class="review-rate"><?php echo $r["sao"] ?><i
							class="fa fa-star" aria-hidden="true"></i> </span>
						<div class="short-review"><?php echo $r["noidung"] ?></div>
					</div>
        <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-question">
			<div class="list-school">
				<div class="page-heading d-flex">
					<h4 class="box-title-page mr-auto">MỚI NHẤT</h4>
					<div class="dh-cd d-flex">
						<a href="<?php echo $servername ?>"> <i class="fa fa-star" aria-hidden="true"></i> <span
							class="top-school-text">TẤT CẢ >></span></a>
					</div>
				</div>
				<div class="list-item d-flex flex-wrap">
					<?php
    while ($row = mysqli_fetch_array($data["SchoolTrangHienTai"])) {
        ?>
        <div class="item-wrapper">
						<a
							href="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>">
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
											aria-hidden="true"></i> </span> <span class="text">
									<?php echo $row["category"] ?>
									</span>

									</div>
									<div class="school-address">
										<span class="icon"><i class="fa fa-building"
											aria-hidden="true"></i> </span> <span class="text">
									<?php
        
$allDiaChi = $row["diachi"];
        $lstDiaChi = explode("||", $allDiaChi);
        if (count($lstDiaChi) > 1) {
            echo "Nhiều địa điểm";
        } else {
            echo $allDiaChi;
        }
        ?></span>
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
			<?php require_once "web/views/partials/right-nav.php"?>
			<?php require_once 'web/views/partials/right-social.php';?>
		</div>
	</div>
</div>
<script>
    jQuery.ui.autocomplete.prototype._resizeMenu = function() {
        this.menu.element.outerWidth(this.element.outerWidth())
    }, $(function() {
        $("#school-search").autocomplete({
            source: function(e, t) {
                var keyWord = e.term;
                $.ajax({
                    type: "post",
                    url: SiteName+"/tim-kiem/schools",
                    dataType: "json",
                    data: {
                    	tenschool: e.term
                    },
                    success: function(e) {
                        t($.map(e, function(e) {
                            var t = SiteName+"/school/" + e.slugschool + "-" + e.id + "/";
                            return {
                                label: e.tenschool,
                                url: t,
                                image: e.logo,
                                slug: e.slugschool,
                                term: keyWord
                            }
                        }))
                    }
                })
            },
            position: {
                offset: '0 4' // Shift 0px left, 4px down.
            },
            minlength: 2,
            select: function(e, t) {
                window.location.href = t.item.url
            },
            open: function() {},
            close: function() {}
        })
	 $("#school-search").data( "ui-autocomplete" )._renderItem = function( div, item ) {
          	 
        	div.addClass('autocomplete-suggestions');
            var $childDiv = $('<div>');
            var $img = $('<img>');
			var	$figure = $('<figure>');
			var $span = $('<span>');
			// image
			$figure.addClass("school-logo-auto-complete image is-32x32");
			// tên school
			$span.addClass("school-name-auto-complete");
			// suggest result
			$childDiv.addClass("autocomplete-suggestion");
            $img.attr({
              src: SiteName+'/web/public/asset/schools/logo/' + item.image,
              alt: item.label,
            });
            $childDiv.attr('data-value', item.label);
            $childDiv.attr('data-slug', item.slug);
            
            $figure.append($img);
            //text
            var search = item.term.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
            const re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            var normalLabel =  item.label;
            var boldLabel = normalLabel.replace(re, "<b>$1</b>");
            $span.append(boldLabel);
            $childDiv.append($figure).append($span);    
            return $childDiv.appendTo(div);
          };
        
    });
    </script>