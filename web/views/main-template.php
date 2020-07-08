<?php require_once 'web/core/Config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 4, from LayoutIt!</title>
<meta name="description"
	content="Source code generated using layoutit.com">
<meta name="author" content="LayoutIt!">
<link href="<?php echo $servername ?>/web/public/css/bootstrap.min.css"
	rel="stylesheet">
<link href="<?php echo $servername ?>/web/public/css/style.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
body {
	background:
}

.top-head-container {
	background: #0275d8;
	border-bottom: 1px solid #0275d8;
}

.item-review {
	min-height: 100%;
	min-width: 100%;
	padding: 5px;
	margin-bottom: 10px;
	margin-top: 5px;
}

.item-wrapper:nth-child(even) {
	background-image: linear-gradient(to top, #e6e9f06b 0%, #eef1f56e 100%);
}

.school-logo {
	text-align: center;
}

.school-logo img {
	width: 100%;
	border: 1px solid #ddd;
}

@media ( min-width : 768px) {
	.item-wrapper {
		width: 25%;
		border-bottom: 0.1px solid #e8e8eb;
	}
	.school-info .school-name {
		font-weight: 600 !important;
		font-size: 1rem;
		color: #00b7ff;
	}
	.school-info .school-rating {
		font-weight: 600 !important;
		font-size: 1rem;
	}
	.school-info .school-category {
		font-weight: 600 !important;
		font-size: 1rem;
	}
	.school-info .school-address {
		font-weight: 600 !important;
		font-size: 1rem;
	}
}

@media ( max-width : 768px) {
	.item-wrapper {
		width: 100%;
		border-bottom: 0.1px solid #e8e8eb;
	}
	.school-info .school-name {
		font-weight: 600 !important;
		font-size: 1.5rem;
		color: #00b7ff;
	}
	.school-info .school-rating {
		font-weight: 600 !important;
		font-size: 1.5rem;
	}
	.school-info .school-category {
		font-weight: 600 !important;
		font-size: 1.5rem;
	}
	.school-info .school-address {
		font-weight: 600 !important;
		font-size: 1.5rem;
	}
	.col-banner {
		padding-left: 0px;
		padding-right: 0px;
		padding-bottom: 10px;
	}
}

.item-wrapper:hover {
	background: #f1f2f2;
	border-bottom: 2px solid #3273dc;
	cursor: pointer;
}

.top-banner {
	margin-top: 10px;
	margin-bottom: 10px;
}

@media ( min-width : 1200px) .container {
	max-width
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	:
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	1100
	px
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	!
	important
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	;
}

.d-flex {
	display: -ms-flexbox !important;
	display: -webkit-box !important;
	display: flex !important;
}

.page-heading {
	margin-top: 20px;
	margin-bottom: 10px;
	border-bottom: 1px solid #d0d1d5;
}

.dh-cd .top-school-star {
	color: #FE2E2E;
	margin-right: 5px;
}

.dh-cd .top-school-text {
	font-weight: bold;
}

.dh-cd {
	border-bottom: 3px solid #FE2E2E;
}

.dh-cd a:hover {
	text-decoration: none;
}

.page-heading h4 {
	display: inline-block;
	color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 150%;
	font-weight: 400;
	padding-right: 10px;
	margin-bottom: -1px;
	border-bottom: 2px solid #0275d8;
}

.main-banner {
	position: relative;
}

.main-banner .hero {
	position: absolute;
	bottom: 50px;
	left: 15%;
	width: 70%;
	z-index: 1000;
	background: rgba(0, 0, 0, 0.2);
}

.z-1 {
	z-index: 1;
}

.hero-body {
	flex-grow: 1;
	flex-shrink: 0;
	padding: 1rem 1rem;
}

.field.has-addons {
	display: flex;
	justify-content: flex-start;
}

.field.has-addons .control.is-expanded {
	flex-grow: 1;
}

.banner-search-box {
	border-radius: 30px;
	background-color: transparent;
	position: relative;
	background: #fff;
}

.box-search {
	border-radius: 30px !important;
	overflow: hidden;
	background-color: #fff;
	border: 1px solid #ced4da;
	position: relative;
	display: flex;
	flex-wrap: wrap;
}

.input-group-append {
	margin-left: -1px;
	display: flex;
}

.box-search .input-group-append .btn {
	background-color: transparent;
	border: none;
}

.input-group-append .btn {
	padding: 0px 12px;
	width: 42px;
	text-align: center;
	position: relative;
	z-index: 2;
}

.box-search .input-group-append .btn i {
	color: #b62831;
}

.fa-search:before {
	content: "\f002";
}

.main-banner img {
	width: 100%;
}

.list-item {
	border-left: 1px solid #e8e8eb;
	border-right: 1px solid #e8e8eb;
	border-top: 1px solid #e8e8eb;
}

.wrapper-nav {
	border: 1px solid #e8e8eb;
}

.wrapper-social {
	border: 1px solid #e8e8eb;
}

.right-social {
	margin-top: 10px;
}

.checked {
	color: orange;
}

.item-list>.nav-header {
	color: #fff;
	background-color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	text-transform: uppercase;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.facebook-page>.social-header {
	color: #fff;
	background-color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	text-transform: uppercase;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.item-list {
	text-align: center;
}

.item-list .item-nav {
	display: inline-block;
	border: 1px solid #ddd;
	margin-bottom: 5px;
	border-radius: 15px;
	box-shadow: 2px 1px 2px #ddd;
	padding-left: 5px;
	padding-right: 5px;
}

.item-list .item-nav:hover {
	background: #f1f2f2;
	border: 1px solid #3273dc;
	cursor: pointer;
}

.no-padding {
	padding-left: 0px;
	padding-right: 0px;
}

.col-new-review {
	border: 1px solid #0275d8;
}

.col-right {
	margin-top: 20px;
}

.list-new-review .item-new-review {
	/*padding-bottom: 10px;*/
	padding-top: 5px;
	border-bottom: 1px dashed #0275d8;
	min-height: 100px;
	max-height: 100px;
	overflow: hidden;
}

.item-new-review .user-name {
	font-weight: bold;
	color: #0275d8;
	padding-left: 5px;
}

.item-new-review .review-school-name {
	color: #FE2E2E;
}

.item-new-review .review-rate {
	color: #fff;
	padding: 3px;
	background: #0275d8;
}

.item-new-review .review-rate .bi-star-fill {
	margin-left: 3px;
}

.container-scroll {
	overflow: auto;
}

.new-review-container {
	max-height: 342px;
}
/* width */
::-webkit-scrollbar {
	width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
	background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
	background: #ddd;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
	background: #555;
}

.topnav {
	overflow: hidden;
	background-color: #0275d8;
	height: 100%;
}

/*.main-logo img{
	display:none;
	width: 20%;
	padding: 0px;
}*/

@media ( min-width : 768px) {
	.topnav a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 25px 16px;
		text-decoration: none;
		font-size: 17px;
		height: 100%;
	}
	.topnav a:hover {
		background-color: #2E9AFE;
		color: white;
		border-bottom: 1px solid #FFFFFF;
	}
	.topnav a.active {
		background-color: #2E9AFE;
		color: white;
		border-bottom: 1px solid #FFFFFF;
	}
	.topnav .icon {
		display: none;
	}
}

@media ( max-width : 768px) {
	.topnav {
		min-height: 20px;
	}
	.topnav a {
		color: #fff;
		display: none;
	}
	.topnav a.icon {
		float: right;
		display: block;
	}
	.topnav a.icon i {
		color: #fff;
	}
	.topnav.responsive {
		position: relative;
	}
	.topnav.responsive .icon {
		position: absolute;
		right: 0;
		top: 0;
	}
	.topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
		text-decoration: none;
	}
}

@media screen and (min-width: 1088px) {
	.navbar>.container .navbar-brand {
		margin-left: -.75rem;
	}
}

.navbar-brand {
	align-items: stretch;
	display: flex;
	flex-shrink: 0;
}



.navbar-brand .logo .logo__header {
	margin-left: 0.5rem;
}

.has-text-white {
	color: #fff !important;
}
.is-size-5 {
    font-size: 1.25rem !important;
}
.navbar-brand .logo .logo__header {
	margin-left: 0.5rem;
}

.navbar-brand .logo .logo__header a {
	color: white;
}

.navbar-brand .logo .logo__header a:hover {
	text-decoration: none;
}
@media screen and (max-width: 768px){
    .navbar-brand {
        margin-right: 0px;
    	text-align: center;
    	min-height: 1.5rem;
    }
    .navbar-brand .logo {
        justify-content: center;
    	margin: 0 auto;
    }
    .navbar-brand .logo .logo__img {
        	width: 2rem;
    }
    .navbar-brand .logo .logo__header a {
    	font-size: 1rem;
    }
    .navbar-brand .logo .logo__header {
    	margin-bottom: 0px;
    }
    .navbar-brand .logo .logo__header {
    	margin-top: 0px;
    }
    .top-box-mobile {
        background-color: #585858;
    	border-bottom: 1px solid #ddd;
    }
}
@media screen and (min-width: 768px){
    .navbar-brand .logo {
    	padding: 0.3rem 0 0;
    	display: flex;
    	align-items: center;
    }
    .navbar-brand .logo .logo__img {
    	width: 4rem;
    }
    
}
</style>
</head>
<body>
	<div class="top-head-container">
		<div class="container">
			<div class="row top-nav">
				<div class="col-md-3 top-box-mobile">
					<div class="navbar-brand">
						<div class="logo" data-no-instant="">
							<a href="//congtytop.com"> <img class="logo__img"
								src="//congtytop.com/mvc/public/images/logo.png" alt="">
							</a>
							<h1 class="logo__header has-text-white is-size-5">
								<a href="<?php echo $servername ?>"> <b>CÔNG TY TOP</b></a>
							</h1>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="topnav" id="myTopnav">
						<a href="#home" class="active">Home</a> <a href="#news">News</a> <a
							href="#contact">Contact</a> <a href="#about">About</a> <a
							href="javascript:void(0);" class="icon" onclick="showNav()"> <i
							class="fa fa-bars"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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
										<form
											action="<?php echo $servername ?>/tim-kiem/trang-ket-qua"
											method="POST">
											<div class="input-group box-search">
												<input name="company-search" id="company-search"
													class="input form-control ui-autocomplete-input"
													type="text" placeholder="Tìm trường học" autocomplete="off">
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
						<div class="item-new-review">
							<span class="user-name">Học viên&nbsp;</span>đã review <span
								class="review-school-name">Công Nghiệp TPHCM &nbsp;</span> <span
								class="review-rate">5<svg width="0.8em" height="0.8em"
									viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
									xmlns="http://www.w3.org/2000/svg">
  <path
										d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
</svg></span>
							<div class="short-review">Cơ sở vật chất khá ổn, mát mẻ và thoải
								mái Giáo viên nhiệt tình và có trình độ Tư vấn viên thân thiện
								và nhiệt tình Cơ sở vật chất khá ổn, mát mẻ và thoải mái Giáo
								viên nhiệt tình và có trình độ Tư vấn viên thân thiện và nhiệt
								tình</div>
						</div>
						<div class="item-new-review">
							<span class="user-name">Học viên&nbsp;</span>đã review <span
								class="review-school-name">Công Nghiệp TPHCM &nbsp;</span> <span
								class="review-rate">5<svg width="0.8em" height="0.8em"
									viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
									xmlns="http://www.w3.org/2000/svg">
  <path
										d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
</svg></span>
							<div class="short-review">Cơ sở vật chất khá ổn, mát mẻ và thoải
								mái Giáo viên nhiệt tình và có trình độ Tư vấn viên thân thiện
								và nhiệt tình Cơ sở vật chất khá ổn, mát mẻ và thoải mái Giáo
								viên nhiệt tình và có trình độ Tư vấn viên thân thiện và nhiệt
								tình</div>
						</div>
						<div class="item-new-review">cba</div>
						<div class="item-new-review">cba</div>
						<div class="item-new-review">cba</div>
						<div class="item-new-review">cba</div>
						<div class="item-new-review">cba</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-question">
				<div class="list-question">
					<div class="page-heading d-flex">
						<h4 class="box-title-page mr-auto">MỚI NHẤT</h4>
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
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-wrapper">
							<div class="item-review">
								<div class="school-logo">
									<img
										src="<?php echo $servername ?>/web/public/asset/schools/logo/1office-workway-logo.png"
										class="img-thumbnail">
								</div>
								<div class="school-info">
									<div class="school-name">Trường Đại Học Tổng Hợp</div>
									<div class="school-rating d-flex">
										<div class="star">
											<span class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span
												class="fa fa-star checked"></span> <span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="rating-count">(15)</div>
									</div>
									<div class="school-category">
										<span class="icon"><svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-tags-fill"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
  <path
													d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
</svg></span> <span class="text">Trường Đại Học</span>

									</div>
									<div class="school-address">
										<span class="icon"> <svg width="1em" height="1em"
												viewBox="0 0 16 16" class="bi bi-building"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
													d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
  <path
													d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
</svg>
										</span> <span class="text">Nhiều Cơ Sở</span>
									</div>
								</div>
							</div>
						</div>

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
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Đại học</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Cao đẳng</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Nghề</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Quốc tế</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Trung Tâm Tiếng Anh</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Anh TPHCM</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Anh Hà Nội</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Hàn</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Nhật</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Trung</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Pháp</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng Đức</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Tiếng TBN</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Kỹ năng, Nghiệp vụ</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Mỹ</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Anh</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Úc</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Singapore</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Nhật</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Hàn</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Đài Loan</span>
								</div>
								<div class="item-nav">
									<span class="tag-icon"><svg width="1em" height="1em"
											viewBox="0 0 16 16" class="bi bi-tag-fill"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd"
												d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
</svg></span> <span class="tag-text">Du học Trung Quốc</span>
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
	<script src="<?php echo $servername ?>/web/public/js/jquery.min.js"></script>
	<script
		src="https://www.layoutit.com/builder/v4/layoutit/src/js/popper.min.js"></script>
	<script src="<?php echo $servername ?>/web/public/js/bootstrap.min.js"></script>
	<script src="<?php echo $servername ?>/web/public/js/scripts.js"></script>
	<script type="text/javascript">
	function showNav() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	</script>
</body>
</html>