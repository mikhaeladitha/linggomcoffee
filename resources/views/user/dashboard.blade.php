@extends('user.headerfooter')

@section('title')
<title>{{config('app_name','Linggom Coffee')}} - Home </title>
@endsection('title')

@section('content')

<!-- HERO SECTION -->
<section class="home-slider owl-carousel">

<!--SLIDER  ITEM 1  -->
<div class="slider-item" style="background-image: url({{asset('../images/lico-black-1.png')}});">
	<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
			<div class="col-md-8 col-sm-12 text-center ftco-animate">
				<span class="subheading">Welcome</span>
				<h1 class="mb-4">The Best Coffee Testing Experience</h1>
				<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				<p>
					<a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Produk</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- SLIDER ITEM 2 -->
<div class="slider-item" style="background-image: url({{asset('images/lico-black-2.png')}});">
	<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
				<div class="col-md-8 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome</span>
					<h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
					<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p>
						<a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Produk</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SLIDER ITEM 3 -->
<div class="slider-item" style="background-image: url({{asset('images/lico-black-4.png')}});">
	<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
				<div class="col-md-8 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome</span>
					<h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
					<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p> 
						<a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Produk</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- AKHIR HERO SECTION-->

<!-- ABOUT SECTION -->
<section class="ftco-about d-md-flex" id="about">
<div class="one-half img" style="background-image: url({{asset('images/about.jpg')}});"></div>
	<div class="one-half ftco-animate">
		<div class="overlap">
		<div class="heading-section ftco-animate ">
			<span class="subheading">Linggom Coffee</span> <br><br>
			<h2 class="mb-4">Tentang Kami</h2>
		</div>
		<div>
			<p>
			Linggom Coffee merupakan merek dagang produk kopi dari perkebunan kopi Dairi tepatnya di kota Sidikalang, Tigalingga, dan sekitarnya. 
			Biji kopi pilihan ini ditanam pada ketinggian maksimum 800 mdpl (meter di atas permukaan laut). 
			Kopi Sidikalang sangat terkenal akan kopinya yang enak dan aromanya loh, sobat Lico! <br><br>
			<i>Alex Simare-mare (Pemilik Usaha)</i> – Usaha ini berawal dari pergumulan adik saya, Lodewyk Tua Parlinggoman yang sekaligus menjadi pergumulan keluarga. 
			Untuk mengatasi rasa stress dan depresi karena permasalahan ini, maka Saya mengajak adik untuk memulai usaha kopi. Karsa ini berdasar pada kota kelahiran kita, Kota Sidikalang – <em>Kota Kopi</em>. LINGGOM diambil dari nama adik Saya yang artinya adalah tempat berteduh. Selanjutnya filosofi nama ini menjadi visi dari Linggom Coffee. Dimana produk ini dapat dinikmati dan dimanapun akan memberikan rasa linggom (-bahasa batak toba yang berarti teduh).
			Linggom Coffee ingin menaikkan kembali kejayaan kopi Sidikalang sesuai Third Wave Industry yang sedang marak belakangan ini.
			</p>
		</div>
	</div>
</div>
</section>

<!-- TEAM SECTION -->
<section class="ftco-section" id="team">
<div class="container">
	<div class="row align-items-center">
		<div class="col-md-6 pr-md-5">
			<div class="heading-section text-md-right ftco-animate">
				<span class="subheading">Linggom Coffee</span>
					<br><br>
				<h2 class="mb-4">Di balik Linggom Coffee</h2>
				<p class="mb-4">
					<i>Alex Simare-mare</i> - 
					" Proses pembuatan produk Linggom Coffee melibatkan semua stakeholder dari hulu ke hilir, terutama di hulunya, 
					yaitu para petani lokal. Ke depannya, melalui usaha ini, Saya berharap semua pihak yang terlibat dari hulu ke hilir dapat memiliki value 
					lebih dan menjadi lebih sejahtera."
				</p>
				<p><a href="{{__('/profiles')}}" class="btn btn-primary btn-outline-primary px-4 py-3">Mereka yang terlibat</a></p>
			</div>
		</div>

		<!-- FOTO TEAM INTI -->
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url({{asset('images/menu-1.jpg')}});"></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="menu-entry mt-lg-4">
						<a href="#" class="img" style="background-image: url({{asset('images/menu-2.jpg')}});"></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url({{asset('images/menu-3.jpg')}});"></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="menu-entry mt-lg-4">
						<a href="#" class="img" style="background-image: url({{asset('images/menu-4.jpg')}});"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- PRODUCT UTAMA -->
<section class="ftco-section">
<div class="container">
	<div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section ftco-animate text-center">
			<span class="subheading">Linggom Coffee</span> <br>
			<h2 class="mb-4">Daftar Produk</h2>
			<p>Kopi Produk Lico dipetik dan diolah oleh petani di single Origin Sidikalang, Kabupaten Dairi, dan kota di sekitarnya. 
				<a href="{{__('/products')}}"></a>
			</p>
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach($products as $product)
		<div class="col-md-3">
			<div class="menu-entry">
				<img href="#" class="img" style="width:200px" src="../images/{{$product->gambar}}"></a>
				<div class="text text-center pt-3">
					<h3><a href="#">{{$product->nama_produk}}</a></h3>
					<p>{{$product->description}}</p>
					<p class="price"><span>@currency($product->harga)</span></p>
					<p>
						<!-- Cek apakah produk tersebut sudah ada di ada di database cart atas nama pengguna yg sedang login -->					
						<button type="submit" name="add" class="btn btn-outline-primary btn-primary">Add to Cart</button>	
					</p>
				</div>
			</div>
		</div>
		@endforeach
		<a href="" style="text-decoration:underline">Lihat semua produk</a>
	</div>
</div>
</section>

<!-- TESTIMONIAL PEMBELI -->
<section class="ftco-section img" id="ftco-testimony" style="background-image: url({{asset('images/bg_1.jpg')}});"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center mb-5">
		<div class="col-md-7 heading-section text-center ftco-animate">
			<span class="subheading">Testimony</span>
				<br>
			<h2 class="mb-4">Dari mereka yang sudah membeli</h2>
			<p>Testimonial diberikan oleh pelanggan dari berbagai daerah</p>
		</div>
		</div>
	</div>
	<div class="container-wrap">
		<div class="row d-flex no-gutters">
		<div class="col-lg align-self-sm-end ftco-animate">
			<div class="testimony">
				<blockquote>
				<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small.&rdquo;</p>
				</blockquote>
				<div class="author d-flex mt-4">
				<div class="image mr-3 align-self-center">
					<img src="images/person_1.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		</div>
		<div class="col-lg align-self-sm-end">
			<div class="testimony overlay">
				<blockquote>
				<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
				</blockquote>
				<div class="author d-flex mt-4">
				<div class="image mr-3 align-self-center">
					<img src="images/person_2.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		</div>
		<div class="col-lg align-self-sm-end ftco-animate">
			<div class="testimony">
				<blockquote>
				<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
				</blockquote>
				<div class="author d-flex mt-4">
				<div class="image mr-3 align-self-center">
					<img src="images/person_3.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		</div>
		<div class="col-lg align-self-sm-end">
			<div class="testimony overlay">
				<blockquote>
				<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.&rdquo;</p>
				</blockquote>
				<div class="author d-flex mt-4">
				<div class="image mr-3 align-self-center">
					<img src="images/person_2.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		</div>
		<div class="col-lg align-self-sm-end ftco-animate">
			<div class="testimony">
			<blockquote>
				<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
			</blockquote>
			<div class="author d-flex mt-4">
				<div class="image mr-3 align-self-center">
				<img src="images/person_3.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
			</div>
			</div>
		</div>
		</div>
	</div>
</section>
@endsection('content')