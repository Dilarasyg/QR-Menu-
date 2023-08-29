@extends('sablon')
@section('content')
<div class="card">
            <div class="card-body">
              
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
                    @foreach($kategoriEkle as $kategori)
                  <tr>
                    <th scope="row">{{ $kategori->id }}</th>
                    <td>{{ $kategori->kategori_adi }}</td>
                     
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <!-- End Default Table Example -->
            </div>
          </div>
@endsection