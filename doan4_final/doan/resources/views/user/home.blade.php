<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>DShop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="/user/css/linearicons.css">
	<link rel="stylesheet" href="/user/css/font-awesome.min.css">
	<link rel="stylesheet" href="/user/css/themify-icons.css">
	<link rel="stylesheet" href="/user/css/bootstrap.css">
	<link rel="stylesheet" href="/user/css/owl.carousel.css">
	<link rel="stylesheet" href="/user/css/nice-select.css">
	<link rel="stylesheet" href="/user/css/nouislider.min.css">
	<link rel="stylesheet" href="/user/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="/user/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="/user/css/magnific-popup.css">
	<link rel="stylesheet" href="/user/css/main.css">
	<link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	
</head>

<body>

	<!-- Start Header Area -->
	@include('user.header')
	<!-- End Header Area -->
    {{-- content --}}
    @yield('content')

	<!-- start footer Area -->
	@include('user.footer')
	<!-- End footer Area -->

	<script src="/user/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="/user/js/vendor/bootstrap.min.js"></script>
	<script src="/user/js/jquery.ajaxchimp.min.js"></script>
	<script src="/user/js/jquery.nice-select.min.js"></script>
	<script src="/user/js/jquery.sticky.js"></script>
	<script src="/user/js/nouislider.min.js"></script>
	<script src="/user/js/countdown.js"></script>
	<script src="/user/js/jquery.magnific-popup.min.js"></script>
	<script src="/user/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="/user/js/gmaps.min.js"></script>
	<script src="/user/js/main.js"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>
	<script>
		// THÊM SP VÀO GIỎ HÀNG
		function AddCart(id){
			$.ajax({
				url:'/addcart/'+id,
				type:'GET',
				dataType:'json',		
			}).done(function(response){
				console.log(response);
				alertify.success('Thêm vào giỏ thành công!');
			})
		}
		// THAY ĐỔI SỐ LƯỢNG SP
		$('input[type="number"]').change(function(id){
			var value = $(this).val();
			var id =$(this).data('id');
			
			$.ajax({
				url:'/updatecart',
				type:'GET',
				dataType:'json',	
				data:{id:id,quantity:value},
			}).done(function(response){
				// $('#cart').html(response.cart_component);
				console.log(response);
				alertify.success('Sửa số lượng thành công!');
				location.reload();

			})
		})
		//XÓA SP KHỎI GIỎ HÀNG
		$(document).on('click', '#delete', function() {
  			// event.preventDefault();
			// var href = $(this).attr('href');
			var id =$(this).data('id');
			// alert(id);

			$.ajax({
				url: '/deletecart',
				type: 'GET',
				dataType: 'json', 
				data:{id:id},
			}).done(function(response){
				console.log(response);
				alertify.success('Xóa thành công!');
				location.reload();
			})
		})
		// ĐĂNG BÌNH LUẬN VÀO SP
		$(document).on('click', '#postcomment', function() {
  			// event.preventDefault();
			// var href = $(this).attr('href');
			var id =$(this).data('id');
			// alert(id);

			$.ajax({
				url: '/user/comment',
				type: 'post',
				dataType: 'json', 
				data:{id:id},
			}).done(function(response){
				console.log(response);
				alertify.success('Thêm bình luận thành công!');
				location.reload();
			})
		})
		// LẤY DỮ LIỆU MIN VÀ MAX GIÁ TIỀN
		function updateMinMaxValues() {
			var lowerValue = document.getElementById("lower-value").innerHTML;
			var upperValue = document.getElementById("upper-value").innerHTML;
			
			

			document.getElementById("min").value = lowerValue;
			document.getElementById("max").value = upperValue;
		}

		// PHÂN TRANG
		// let table = new DataTable('#myTable');
	</script>
</body>

</html>