@extends('layouts/app')
@section('content')
<style type="text/css">
	th,td{
		text-align: center;
	}
</style>
<div class="col-md-3 col-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3>MY APPLICATION</h3>
                <h5>HALAMAN WEB</h5>
                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-center">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="" href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>


                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('golongan')}}">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('pegawai')}}">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('lembur_pegawai')}}">Lembur Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('tunjangan')}}">Tunjangan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('tunjangan_pegawai')}}">Tunjangan Karyawan</a><hr>
                    <a class="btn btn-primary form-control" href="{{url('penggajian')}}">Penggajian Karyawan</a><hr>  
  

                </div>
            </center>
        </div>
    </div>
</div>

<center><h1>Data golongan</h1></center>

<hr>
	<div class="col-md-8">
		<table class="table table-striped table-bordered table-hover">
			<!-- <table class="table table-default"> -->
				<tr class="danger">

			<a href="{{url('/golongan/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>
			{{$golongan->links()}}
			
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode golongan</center></th>
		<th><center>nama golongan</center></th>
		<th><center>besaran uang</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($golongan as $golongans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$golongans->kode_golongan}}</td>
			<td>{{$golongans->nama_golongan}}</td>
			<td>{{$golongans->besaran_uang}}</td>
			
		<td><a href="{{route('golongan.edit',$golongans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<th>
                                    {!!Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                    {!!Form::close()!!}
                                </th>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection