@extends ('template.default')

@section('body')
<h1> Mutmainah Septiarini</h1>


<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Jumlah Guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sekolahs as $sekolah)
                        <tr>
                          <td>{{ $sekolah->nama_sekolah }}</td>
                          <td>{{ $sekolah->alamat }}</td>
                          <td>{{ $sekolah->jurusan }}</td>
                          <td>{{ $sekolah->jumlah_guru }}</td>
                          <td> 
                            <a href="{{ route('sekolahs.edit',$sekolah->id) }}">Edit</a>
                           <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="post">
                             @csrf

                             @method('DELETE')
                             <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endsection
