
<form method="POST"
	action="<?php echo $servername ?>/quan-tri/them-cong-ty"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tên trường</label> <input type="text" class="form-control"
			id="ten-truong" name="ten-truong" placeholder="Enter Tên Trường"
			onblur="blurTenTruong()">
	</div>
	<div class="form-group">
		<label>Slug trường</label> <input type="text" class="form-control"
			id="slug-truong" name="slug-truong" placeholder="Slug công ty"
			readonly>
	</div>
	<div class="form-group">
		<label>logo trường</label> <input type="file" class="form-control"
			id="logo-cong-ty" name="logo-cong-ty" placeholder="logo công ty"
			accept="image/x-png,image/gif,image/jpeg">
	</div>
	<div class="form-group">
		<label>Category</label>
		<div class="custom-select" style="width: 200px;">
			<select name="category" id="category">
			<option value="dai-hoc">Đại Học</option>
			<option value="cao-dang">Cao Đẳng</option>
			<option value="nghe">Nghề</option>
			<option value="trung-tam-tieng-anh">Trung Tâm Tiếng Anh</option>
			<option value="trung-tam-tieng-han">Trung Tâm Tiếng Hàn</option>
			<option value="trung-tam-tieng-nhat">Trung Tâm Tiếng Nhật</option>
			<option value="trung-tam-tieng-trung">Trung Tâm Tiếng Trung</option>
			<option value="trung-tam-tieng-phap">Trung Tâm Tiếng Pháp</option>
			<option value="trung-tam-tieng-duc">Trung Tâm Tiếng Đức</option>
			<option value="trung-tam-tieng-tbn">Trung Tâm Tiếng Tây Ban Nha</option>
			<option value="du-hoc-my">Du Học Mỹ</option>
			<option value="du-hoc-anh">Du Học Anh</option>
			<option value="du-hoc-uc">Du Học Úc</option>
			<option value="du-hoc-singapore">Du Học Singapore</option>
			<option value="du-hoc-nhat">Du Học Nhật</option>
			<option value="du-hoc-han">Du Học Hàn</option>
			<option value="du-hoc-dai-loan">Du Học Đài Loan</option>
			<option value="du-hoc-trung-quoc">Du Học Trung Quốc</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label>website</label> <input type="text" class="form-control"
			id="nhan-vien" name="nhan-vien" placeholder="Nhân viên">
	</div>
	<div class="form-group">
		<label>Địa chỉ</label> <input type="text" class="form-control"
			id="dia-chi" name="dia-chi" placeholder="Địa chỉ">
	</div>
	 <div class="form-group">
    <label>Link school</label>
    <input type="text" class="form-control" id="link-school" name="link-school" placeholder="Link School">
  </div>
</form>