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
								<div class="btn btn-transparent col-lg-3  bg-transparent bg-light padding-menu" v-for="(index, product) in products" v-on:click="add_pesanan(product.id)">
									<div>
										<div class="p-4"><img src="@{{product.image}}" style="max-width: 100%"></div>
									</div>
									<div class="category-description">@{{product.nama}}</div>
								</div>
							</div>
						</div>
						{{--  <div class="col-lg-2">
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
						</div>  --}}
					</div>
				</div>
				<div class="col-lg-4" style="background-color: white;">
					<div class="row text-center" style="padding-top: 10px;padding-bottom: 10px;/* margin-left: 1px; *//* margin-right: 2px; */">
						<div class="col-lg-3 "><i class="fa fa-user" style="margin: 10px;"></i></div>
						<div class="col-lg-6"><h4>New Customer</h4></div>
						<div class="col-lg-3  pd-4"><i class="fa fa-bars" style="margin: 10px;"></i></div>
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
                    <button class="form-control" onclick="window.location.reload(true)" style="cursor:pointer">CLEAR</button>
                    <hr class="col-lg-12"><button class="form-control" v-on:click="bayar()"  style="cursor:pointer">BAYAR</button>
                    <hr class="col-lg-12">
					<button class="form-control" style="background-color:#3B5EAB; color:white"><h1>Charge Rp. @{{total_bayar}}</h1></button>
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
						nama: "Capucino 1",
						harga: 20000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 2,
						nama: "Capucino 2",
						harga: 22000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 3,
						nama: "Capucino 1",
						harga: 20000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 4,
						nama: "Capucino 2",
						harga: 22000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 5,
						nama: "Capucino 1",
						harga: 20000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
						jumlah: 0,
						total: 0,
					},
					{
						id: 6,
						nama: "Capucino 2",
						harga: 22000,
						image: 'https://upload.wikimedia.org/wikipedia/commons/1/16/Classic_Cappuccino.jpg',
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
						alert('Upsss');
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
