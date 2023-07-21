<?php

namespace App\Exports;

use App\Models\Regisbu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RegisExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Regisbu::all();
    }

    public function headings():array
    {
        return[
        'Nomor ID',
        'Nomor Registrasi',
        'Nama BU Registrasi',
        'Jumlah Karyawan Registrasi',
        'Tanggal Surat Pernyataan Tahap 1',
        'Nama File Pendukung Tahap 1',
        'Tanggal Pemeriksaan Tahap 2',
        'Nama Pemeriksa Tahap 2',
        'Hasil Pemeriksaan Tahap 2',
        'Tanggal SPHP Tahap 2',
        'Tanggal Surat Teguran I',
        'Tanggal Surat teguran II',
        'Tanggal Sanksi Administratif',
        'Status Canvasing',
        'Status Tahap 1',
        'Status tahap 2',
        'Status Tahap 3',
        'Status Tahap 4',
        'Status Tahap 5',
        'Status Upaya Lain',
        'Status Kepatuhan'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' =>true]],
        ];
    }
}
