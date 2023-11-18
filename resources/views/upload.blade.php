@include('layouts.head')
@include('layouts.navbar')
@include('layouts.menu')

<br><br><br><br><br><br><br><br>
	<form action="/upload-image" method="POST" enctype="multipart/form-data" > <!-- يجب تحديد نوع التشفير -->
		@method('POST')
		@csrf
	  
		<div class="form-group">
			<label>صورة</label>
			<input type="file" name="image" required>
		</div>
		<button type="submit">رفع الملف</button>
	</form>
@include('layouts.footer')
@include('layouts.footer-scrpt')