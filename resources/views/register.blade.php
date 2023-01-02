<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content=""/>
    <title>PPDB </title>
    <link rel="stylesheet" href="css/register.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>


    <section class="container">
      <header>Formulir PPDB </header>
      @csrf
      <form action="{{route('register.post')}}" method="POST" class="form">
       <div class="input-box">
          <label>NISN</label>
          <input type="integer" placeholder="Masukkan NISN" name="nisn" id="nisn" required />
        </div>

        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" name="name" id="name" required />
        </div>

        <div class="gender-box">
        <h3>Jenis Kelamin</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" id="gender" value="girl"/>
              <label for="check-male">Perempuan</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" id="gender" value="boy"/>
              <label for="check-female">Laki-laki</label>
            </div>
          </div>
        </div>

       <div class="input-box">
          <label>Asal Sekolah</label>
          <br>
              <select name="school" id="school" onchange="tampil()" class="input-box">
                <option hidden>Pilih Asal Sekolah</option>
                <option value="lainnya">Lainnya</option>
                @foreach($data as $school)
                <option value="{{$school['nama_sekolah']}}">{{$school['nama_sekolah']}}</option>
                @endforeach
              </select>
        </div>
        </div>

        <div id="tampil" class="input-box" class="form-control" name="school"></div>
        <script>
         function tampil() {
            var school = document.getElementById("school").value
            console.log(school)
            if (school == "lainnya") {
                document.getElementById("tampil").innerHTML="<input type='text' id='school' placeholder='Tambah Data Asal Sekolah'>";
            }
            else {
                document.getElementById("tampil").innerHTML="";
            }
        }
      </script>

        <div class="input-box">
          <label>Email</label>
          <input type="email" placeholder="Masukkan Email" name="email" required />
          <!-- <input type="hidden" name="role" id="role" value="user"> -->
        </div>

        <div class="input-box">
          <div class="input-box">
            <label>Nomor Telphone</label>
            <input type="number" placeholder="Masukkan Nomor Telephone" name="tlp" required />
          </div>
        </div>

        <div class="input-box address">
          <label>Nomor Telephone Orangtua</label>
          <div class="column">
            <input type="number" placeholder="Masukkan Nomor Ayah" name="papa" required />
            <input type="number" placeholder="Masukkan Nomor Ibu" name="mama" required />
          </div>
        </div>
        @csrf
        <br> 
        {{-- <button type="submit"></button> --}}
        <button type="submit" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;" >Submit</button>
        <br>      
        <a href="/login" class="button" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;">Login</a>
        
      </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#school").select2({
                placeholder: "Please Select"
            });
        });
    </script>



    
  </body>
</html>


 
