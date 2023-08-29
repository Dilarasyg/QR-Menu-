@extends('sablon')
@section('content')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Menü Düzenle</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data"  action="{{ route('menuKayit',['id' => @$personel->id]) }}" >
              @csrf  
              <div class="col-12">
                  <label for="inputNanme4" class="form-label">Menü Adı</label>
                  <input type="text" class="form-control" name="menu_adi" id="inputNanme4" value="{{ @$personel->menu_adi }}">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Menü Fiyatı</label>
                  <input type="text" class="form-control" name="fyat" id="inputEmail4"  value="{{ @$personel->fyat}}">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Açıklama</label>
                  <input type="text" class="form-control" id="inputPassword4" name="açiklama" value="{{ @$personel->açiklama }}">
                </div>
                <div class="col-12">
              <label for="kategori" class="form-label">Kategori</label>
               <select class="form-select" id="kategori" name="kategori">
                <option value="">Kategori Seçin</option>
               @foreach ($kategoriListe as $kategori)
            <option value="{{ $kategori->kategori_adi }}" {{ @$personel->kategori == $kategori->id ? 'selected' : '' }}>
                {{ $kategori->kategori_adi }}
            </option>
               @endforeach
              </select>
              </div>
                <div class="col-12">
                <label for="inputPhoto" class="form-label">Fotoğraf</label>
               <input type="file" class="form-control" id="inputPhoto" name="fotograf">
               @if ($errors->has('fotograf'))
                 <div class="alert alert-danger">
               {{ $errors->first('fotograf') }}
                </div>
                 @endif
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
          
              </form><!-- Vertical Form -->

            </div>
          </div>
@endsection