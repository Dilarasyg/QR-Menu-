@extends('sablon')
@section('content')
<div class="card">
            <div class="card-body">
            <h5 class="card-title"><a href="{{ route('kategoriDuzenle') }}">Yeni Kategori</a></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori Adı</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kategoriListe as $kategori)
                  <tr>
                    <th scope="row">{{ $kategori->id }}</th>
                    <td>{{ $kategori->kategori_adi }}</td>
                    <td><a href="{{ route('kategoriDuzenle',['id'=>$kategori->id]) }}">Düzenle</a> 
                    <a href="{{ route('kategoriSil',['id'=>$kategori->id]) }}"
                     onclick="return confirm('Bu kategoriyi silmek istediğinizden emin misiniz?')">Sil</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
@endsection