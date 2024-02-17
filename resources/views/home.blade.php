@extends('master')

@section('konten')

<style>
body {
    background-color: #a9a9a9; 
}
</style>

<br>
<br>
<!-- Page Content Section -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Artikel Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px; margin: auto;" id="band">
    <div class="w3-card w3-padding">
        <h1 class="w3-wide">DATA MAHASISWA</h1>
        <hr>
        <br>
        <div class="w3-row">
            <div class="w3-half w3-padding">
            <div class="w3-half w3-padding" style="text-align: left;">
                <img src="img/about.jpeg" style="width: 80%; height: 50%" alt="">
            </div>
            
            </div>
           
            <div class="w3-half w3-padding">
                <h3 class="w3-wide">Nama            = Rafly Maulana ZUlyzar</h3>   
                <h3 class="w3-wide">NIM             = 10122790</h3>
                <h3 class="w3-wide">Fakultas        = Teknik dan Ilmu Komputer</h3>
                <h3 class="w3-wide">Jurusan         = Teknik Informatika</h3>
                <h3 class="w3-wide">About Web       = Web CRUD sederhana </h3>
                
                    
                    
         
            </div>
        </div>
    </div>
  </div>
</div>

<style>
.w3-row {
    display: flex;
}

.w3-half {
    flex: 1;
}

.w3-card {
    background-color: #000; /* Matte Black */
    color: #FFA500; /* Orange */
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
</style>
@endsection