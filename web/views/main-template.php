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

.top-nav {
	min-height: 50px;
}

.top-nav a {
	color: #fff;
}

.top-head-container {
	background: #0275d8;
	border-bottom: 1px solid #0275d8;
}

.item-review {
	min-height: 100%;
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

.item-wrapper {
	max-width: 25%;
	border-bottom: 0.1px solid #e8e8eb;
}

.item-wrapper:hover {
	background: #f1f2f2;
	border-bottom: 2px solid #3273dc;
	cursor: pointer;
}

.col-question .col-banner {
	padding-left: 0px;
}

.top-banner {
	margin-top: 10px;
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
	color: #0040FF;
	font-family: 'Anton', sans-serif;
	font-size: 150%;
	font-weight: 400;
	padding-right: 10px;
	margin-bottom: -1px;
	border-bottom: 2px solid #0040FF;
}

.main-banner img {
	width: 100%;
}

.school-info .school-name {
	font-weight: 600 !important;
	font-size: 1rem;
	color: #00b7ff;
}

.list-item {
	border-left: 1px solid #e8e8eb;
	border-right: 1px solid #e8e8eb;
	border-top: 1px solid #e8e8eb;
}

.wrapper-nav {
	border: 1px solid #e8e8eb;
}

.checked {
	color: orange;
}

.item-list>.nav-header{
	color: #fff;
    background-color: #0040FF;
    font-family: 'Anton', sans-serif;
    font-size: 125%;
    text-transform: uppercase;
    padding-top: 0.5rem;
    padding-bottom: 0.25rem;
    padding-left: 1.25rem;
}
.item-list{
	text-align: center;
}
.item-list .item-nav{
	display: inline-block;
	border: 1px solid #ddd;
	margin-bottom: 5px;
	border-radius: 15px;
	box-shadow:2px 1px 2px #ddd;
	padding-left: 5px;
	padding-right: 5px;
}

.no-padding{
	padding-left: 0px;
	padding-right:0px;
}

</style>
</head>
<body>
	<div class="top-head-container">
		<div class="container">
			<div class="row top-nav">
				<div class="col-md-12">
					<ul class="nav">
						<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
						<li class="nav-item"><a class="nav-link disabled" href="#">Messages</a>
						</li>
					</ul>
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
				</div>
			</div>
			<div class="col-md-4">
    			<div class="new-review">
    			<div class="list-review">
    				<div class="item-review">abc</div>
    				<div class="item-review">cba</div>
    				<div class="item-review">cba</div>
    				<div class="item-review">cba</div>
    				<div class="item-review">cba</div>
    				<div class="item-review">cba</div>
    				<div class="item-review">cba</div>
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
			<div class="col-md-3">
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
			</div>
		</div>
	</div>
	<script src="<?php echo $servername ?>/web/public/js/jquery.min.js"></script>
	<script src="<?php echo $servername ?>/web/public/js/bootstrap.min.js"></script>
	<script src="<?php echo $servername ?>/web/public/js/scripts.js"></script>
</body>
</html>