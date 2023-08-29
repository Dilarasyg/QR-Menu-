@extends('sablon')
@section('content')
<div class="card">
            <div class="card-body">
            <h5 class="card-title"> <a href="{{ route('menuDuzenle') }}">Yeni Menü</a></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menü adı</th>
                    <th scope="col">Menü fiyatı</th> 
                    <th scope="col">Açıklama</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">Kategori</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($menuEkle as $personel)
                  <tr>
                    <th scope="row">{{ $personel->id }}</th>
                    <td>{{ $personel->menu_adi }}</td>
                    <td>{{ $personel->fyat }}</td>
                    <td>{{ $personel->açiklama }}</td>
                    <td><img src="{{ $personel->fotograf }}" width="100px"></td>
                    <td>{{ $personel->kategori}}</td>    
                    <td><a href="{{ route('menuDuzenle',['id'=>$personel->id]) }}">Düzenle</a> <a href="{{ route('menuSil', ['id' => $personel->id]) }}"
                           onclick="return confirm('Bu menüyü silmek istediğinizden emin misiniz?')">Sil</a></td>
                       
                    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
@endsection