<?php

namespace App\Models;

use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory; 

    protected $table = 'buku';

    /**
     */
    protected $fillable = [
        'judul', 
        'pengarang', 
        'penerbit', 
        'kategori_buku_id' 
    ];

    /**
     */
    public function kategoriBuku()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_buku_id');
    }
}