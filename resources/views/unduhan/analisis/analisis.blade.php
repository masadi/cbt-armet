<table border="1">
  <thead>
    <tr>
        <th align="center" colspan="16">ANALISIS BUTIR SOAL</th>
    </tr>
    <tr>
        <th align="center" colspan="16"></th>
    </tr>
    <tr>
      <th colspan="2">Sekolah</th>
      <th colspan="14">: {{$data->jadwal_ujian->rombongan_belajar->sekolah->nama}}</th>
    </tr>
    <tr>
      <th colspan="2">Mata Pelajaran</th>
      <th colspan="14">: {{$data->jadwal_ujian->mata_pelajaran->nama}}</th>
    </tr>
    <tr>
      <th colspan="2">Kelas</th>
      <th colspan="14">: {{$data->jadwal_ujian->rombongan_belajar->nama}}</th>
    </tr>
    <tr>
      <th colspan="2">Nama Ujian</th>
      <th colspan="14">: {{$data->jadwal_ujian->jadwal->nama}}</th>
    </tr>
    <tr>
      <th colspan="2">Tanggal Ujian</th>
      <th colspan="14">: {{$data->jadwal_ujian->jadwal->tanggal_indo}}</th>
    </tr>
    <tr>
      <th colspan="2">Materi Pokok</th>
      <th colspan="14">: </th>
    </tr>
    <tr>
      <th colspan="16"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center" rowspan="2" style="vertical-align: middle">No.</td>
      <td align="center" rowspan="2" style="vertical-align: middle">No. Item</td>
      <td align="center" colspan="3">Statistik Item</td>
      <td align="center"></td>
      <td align="center" colspan="5">Statistik Option</td>
      <td align="center"></td>
      <td align="center" colspan="4">Tafsiran</td>
    </tr>
    <tr>
      <td align="center">Prop. Correct</td>
      <td align="center">Biser	Point</td>
      <td align="center">Biser</td>
      <td align="center"></td>
      <td align="center">Opt.</td>
      <td align="center">Prop. Endorsing</td>
      <td align="center">Biser</td>
      <td align="center">Point Biser</td>
      <td align="center">Key</td>
      <td align="center"></td>
      <td align="center">Daya Pembeda</td>
      <td align="center">Tingkat Kesulitan</td>
      <td align="center">Efektifitas Option</td>
      <td align="center">Status Soal</td>
    </tr>
    @foreach($data->jawaban_soal as $soal)
      <tr>
          <td align="center">{{ $loop->iteration }}</td>
          <td align="center">{{ $loop->iteration }}</td>
          <td align="center">
            @if ($soal->jawaban_benar->count())
                @if($soal->jawaban_benar->count() - 4 > $data->jawaban_soal->count())
                -
              @else
                  {{($soal->jawaban_benar->count()) ? $soal->jawaban_benar->count() / $data->jadwal_ujian->soal_ujian->peserta : 0}}
              @endif
            @endif
          </td>
          <td align="center">
            <!--=IF(CELL("col";BH65)-59>$D$2;"-";((BH57-$BE$60)/$BE$61)*(BH58/BH63))-->
          </td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
      </tr>
    @endforeach
  </tbody>
</table>
{{dd($data)}}