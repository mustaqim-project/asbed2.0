<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaloriMakanan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_makanan',
        'porsi_gr',
        'kalori',
        'protein',
        'lemak',
        'karbohidrat',
        'serat',
        'gula',
        'kategori',
    ];

    /**
     * Calculate the total calories based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateCalories(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->kalori / $defaultPortion) * $portion : 0;
    }

    /**
     * Calculate the total protein based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateProtein(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->protein / $defaultPortion) * $portion : 0;
    }

    /**
     * Calculate the total fat based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateFat(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->lemak / $defaultPortion) * $portion : 0;
    }

    /**
     * Calculate the total carbohydrates based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateCarbs(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->karbohidrat / $defaultPortion) * $portion : 0;
    }

    /**
     * Calculate the total fiber based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateFiber(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->serat / $defaultPortion) * $portion : 0;
    }

    /**
     * Calculate the total sugar based on the given portion.
     *
     * @param  float  $portion
     * @return float
     */
    public function calculateSugar(float $portion): float
    {
        $defaultPortion = floatval($this->porsi_gr);
        return $portion > 0 ? ($this->gula / $defaultPortion) * $portion : 0;
    }
}
