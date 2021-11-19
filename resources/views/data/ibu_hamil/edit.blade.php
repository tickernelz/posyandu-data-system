@extends('layouts.main')

@push('title', 'Edit Data Ibu Hamil')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Data Ibu Hamil</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <x-alert position="top" message="{{ session('success') }}"
                                 type="success"/>
                    @endif
                    <div class="new-user-info">
                        <form action="{{ route('ibu_hamil.edit.post', $data->id) }}" method="post">
                            @csrf
                            <div class="row mb-4">
                                <x-input-text name="nama" classes="" :value="$data->peserta->nama"
                                              type="" form="" label="Nama Ibu Hamil"/>
                                <x-input-text name="nik" classes="" :value="$data->peserta->nik"
                                              type="" form="" label="Nomor Induk Kependudukan"/>
                                <x-input-text name="kk" classes="" :value="$data->peserta->kk"
                                              type="" form="" label="Nomor Kartu Keluarga"/>
                                <x-text-area name="alamat" classes="" form="" label="Alamat">
                                    {{ $data->peserta->alamat }}
                                </x-text-area>
                                <div class="form-group">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Laki-Laki"
                                               name="kelamin" id="Laki-Laki" @if($data->peserta->kelamin === 'Laki-Laki') checked @endif>
                                        <label class="form-check-label" for="Laki-Laki">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Perempuan"
                                               name="kelamin" id="Perempuan" @if($data->peserta->kelamin === 'Perempuan') checked @endif>
                                        <label class="form-check-label" for="Perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <x-flatpickr :value="$data->peserta->tanggal_lahir" name="tanggal_lahir" label="Tanggal Lahir" form="" classes=""/>
                                <x-input-text name="hp" classes="" :value="$data->peserta->hp"
                                              type="number" form="" label="No. HP"/>
                                <x-input-text name="golongan_darah" classes="" :value="$data->golongan_darah"
                                              type="" form="" label="Golongan Darah"/>
                                <x-text-area name="riwayat_penyakit" classes="" form="" label="Riwayat Penyakit">
                                    {{ $data->riwayat_penyakit }}
                                </x-text-area>
                                <x-text-area name="riwayat_alergi" classes="" form="" label="Riwayat Alergi">
                                    {{ $data->riwayat_alergi }}
                                </x-text-area>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
    <script>
        $(".flatpickr").flatpickr(
            {
                locale: "id"
            }
        );
    </script>
@endpush
