@extends('layouts.base')

@section('title', 'POS')

@section('content')

	<div id="app" style="margin-top: 40px;">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-10">
							<div class="row">
								<div class="btn btn-transparent col-lg-3 border bg-transparent bg-light padding-menu" v-for="(index, product) in products" v-on:click="add_pesanan(product.id)">
									<div class="col-lg-12 border bg-light bg-transparent padding-category">
										<div class="p-4"><img src="@{{product.image}}" style="max-width: 100%"></div>
									</div>
									<div class="category-description">@{{product.nama}}</div>
								</div>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="row text-center">
								<div class="col-lg-12 p-1 border bg-light bg-transparent padding-category">
									<div class="btn-transparent bg-dark p-4"><h1>Cu</h1></div>
									<div class="category-description">Cumi dan Kangkung</div>
								</div>
								<div class="col-lg-12 p-1 border bg-light bg-transparent padding-category">
									<div class="btn-transparent bg-dark p-4"><h1>Sa</h1></div>
									<div class="category-description">Sayuran</div>
								</div>
								<div class="col-lg-12 p-1 border bg-light bg-transparent padding-category">
									<div class="btn-transparent bg-dark p-4"><h1>Ik</h1></div>
									<div class="category-description">Ikan</div>
								</div>
								<div class="col-lg-12 p-1 border bg-light bg-transparent padding-category">
									<div class="btn-transparent bg-dark p-4"><h1>Mi</h1></div>
									<div class="category-description">Minuman</div>
								</div>
								<div class="col-lg-12 p-1 border bg-light bg-transparent padding-category">
									<div class="btn-transparent bg-dark p-4"><h1>Ha</h1></div>
									<div class="category-description">Happy Hour</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row text-center" style="margin-left: 1px; margin-right: 2px;">
						<div class="col-lg-3 border"><i class="fa fa-user" style="margin: 10px;"></i></div>
						<div class="col-lg-6"><h4>New Customer</h4></div>
						<div class="col-lg-3 border pd-4"><i class="fa fa-bars" style="margin: 10px;"></i></div>
					</div>
					<hr class="col-lg-12">
					<div style="background-color: white;" class="border">
						<table class="table">
							<tr v-for="(index, order) in orders">
								<td>@{{order.nama}}</td>
								<td v-if="order.jumlah > 1">x @{{order.jumlah}}</td>
								<td v-if="order.jumlah == 1"></td>
								<td>Rp. @{{order.total}}</td>
							</tr>
							<tr>
								<td>Total:</td>
								<td>x @{{total_item}}</td>
								<td>Rp. @{{total_bayar}}</td>
							</tr>
						</table>
					</div>
					<hr class="col-lg-12">
					<input class="form-control" type="number" name="bayarkan" v-model="bayarkan" placeholder="Rp."><br>
					<button v-on:click="bayar()" class="btn btn-info float-right"><h1>Charge Rp. @{{total_bayar}}</h1></button>
				</div>
			</div>
			
		</div>
		<br>
		<hr>
		<br>
	</div>


	<script type="text/javascript" src="{{ secure_asset('js/vue.min.js') }}"></script>
	<script type="text/javascript">
		new Vue({
			el: '#app',
			data: {
				menu: 'Daftar Menu',
				pesanan: 'Daftar Pesanan',
				total_item: 0,
				total_bayar: 0,
				bayarkan: 0,
				// kembalian: 0,
				products: [
					{
						id: 1,
						nama: "Cumi Tepung",
						harga: 20000,
						image: 'https://i.pinimg.com/originals/0d/f8/ff/0df8ff689a5b263ad6d11e5a3c733b9f.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 2,
						nama: "Cumi Bakar",
						harga: 22000,
						image: 'https://i2.wp.com/resepkoki.id/wp-content/uploads/2017/02/Resep-Cumi-Bakar.jpg?fit=2322%2C2235&ssl=1',
						jumlah: 0,
						total: 0,
					},
					{
						id: 3,
						nama: "Cumi Cabe Goreng",
						harga: 20000,
						image: 'https://img-global.cpcdn.com/recipes/7ee2c20392265df7/751x532cq70/cumi-crispy-bawang-pedas-cumi-cabe-garam-foto-resep-utama.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 4,
						nama: "Cah Kangkung",
						harga: 10000,
						image: 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Resep-Tumis-kangkung.jpg?fit=2448%2C2288&ssl=1',
						jumlah: 0,
						total: 0,
					},
					{
						id: 5,
						nama: "Tahu Goreng",
						harga: 15000,
						image: 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/sasefoto/original/37631_supaya-tahu-goreng-tidak-keriput-ingat-selalu-cara-menggoreng-ini.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 6,
						nama: "Cah Toge",
						harga: 10000,
						image: 'https://cdn0-production-images-kly.akamaized.net/H8neBPztEBU4Q_AL9uZBX-KY6XU=/375x208/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2483203/original/053824300_1543321404-resep-tumis-tauge-saus-tiram-ala-anak-kos.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 7,
						nama: "Kerang",
						harga: 25000,
						image: 'https://media-cdn.tripadvisor.com/media/photo-s/14/08/a9/ba/kerang-bakar-jimbaran.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 8,
						nama: "Kepiting",
						harga: 35000,
						image: 'https://craftlog.com/m/i/5221029=s1280=h960',
						jumlah: 0,
						total: 0,
					},
					{
						id: 9,
						nama: "Gurame Asam",
						harga: 25000,
						image: 'https://www.agrowindo.com/wp-content/uploads/2017/07/Peluang-usaha-gurame-asam-pedas-dan-analisa-usahanya.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 10,
						nama: "Udang Bakar",
						harga: 30000,
						image: 'https://doyanresep.com/wp-content/uploads/2019/03/resep-udang-bakar-madu.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 11,
						nama: "Udang Saos",
						harga: 25000,
						image: 'https://img-global.cpcdn.com/recipes/3285d0e89b215424/751x532cq70/udang-saus-padang-foto-resep-utama.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 12,
						nama: "Udang Mayonaise",
						harga: 25000,
						image: 'https://selerasa.com/wp-content/uploads/2015/07/images_ikan_resep_udang_19-udang-saus-mayonaise.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 13,
						nama: "Iced Tea",
						harga: 8000,
						image: 'https://warungdulukala.com/wp-content/uploads/2018/09/es-teh-manis-1.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 14,
						nama: "Es Jeruk Nipis",
						harga: 10000,
						image: 'https://img-global.cpcdn.com/recipes/a77ed129737ae82c/751x532cq70/es-timun-jeruk-nipis-pr_recookanekaminumandingin-foto-resep-utama.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 15,
						nama: "Nasi Putih",
						harga: 5000,
						image: 'https://awsimages.detik.net.id/visual/2019/07/09/5eb5d75b-7eae-4e9c-8a94-1b3a536891ec_169.jpeg?w=650',
						jumlah: 0,
						total: 0,
					},

				],
				orders: [],
			},
			methods: {
				add_pesanan: function(id){
					menu = this.products.find(product => product.id == id);
					tmp = this.orders.find(order => order.id == menu.id);
					if(tmp){
						total_item = this.orders.find(order => order.id == menu.id).jumlah += 1
						total_bayar = this.orders.find(order => order.id == menu.id).total = total_item * menu.harga
						console.log("tambah");
					} else {
						this.orders.push(menu);
						total_item = this.orders.find(order => order.id == menu.id).jumlah = 1
						total_bayar = this.orders.find(order => order.id == menu.id).total = total_item * menu.harga
						console.log("tambah baru");
					}
					this.total_item += 1;
					this.total_bayar += menu.harga;
					console.log(this.orders);
				},
				bayar: function(){
					if(this.bayarkan < this.total_bayar){
						alert('Uang Kurang');
					} else {
						alert('Kembalian anda adalah Rp. ' + (this.bayarkan - this.total_bayar));
						this.orders = [];
						this.total_item = 0;
						this.total_bayar = 0;
						this.bayarkan = 0;
					}
				}
			}
		})
	</script>
@endsection