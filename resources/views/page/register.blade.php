@extends('layout.master')

@section('content')
	<div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-md-5">
				<h1>Hai !!</h1>
				<p>Alumni</p>
			</div>
			<div class="col-md-2">

				<div class="lineVertical">
				</div>
				<p style="text-align:center"></p>
			</div>
			<div class="col-md-5">
				<div class="registrationForm">

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nama">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control">
					</div>


					<div class="form-group">
						<select name="" id="input" class="form-control" required="required">
							<option value="">Pilih Jurusan</option>
							<option value="4306">Teknik Komputer dan Jaringan</option>
						</select>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="input">
								Pria
							</label>

							<label>
								<input type="radio" name="gender" id="input">
								Wanita

							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="department">
							<label for="">Tahun Lulus</label>
							<select name="" id="input" class="form-control" required="required">
								<option value=""></option>
							</select>
						</div>

						<div class="graduateYear">
							<label for="">Tahun Lulus</label>
							<select name="" id="input" class="form-control" required="required">
								<option value=""></option>
							</select>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="form-group">
						<button type="button" class="btn btn-default">Daftar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
