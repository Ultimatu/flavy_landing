<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'visits',
        'country',
        'city',
        'region',
        'postal_code',
        'session_id',
        'user_agent',
    ];


    public static function updateOrCreate(array $attributes)
    {
         // Les colonnes à utiliser pour vérifier l'existence d'un enregistrement
         $uniqueColumns = ['ip_address', 'session_id'];

         // Recherche un enregistrement existant en fonction des colonnes uniques
         $visitor = self::where(function($query) use ($attributes, $uniqueColumns) {
             foreach ($uniqueColumns as $column) {
                 $query->where($column, $attributes[$column] ?? null);
             }
         })->first();
 
         // Si un enregistrement existe, met à jour les valeurs fournies, sinon crée un nouvel enregistrement
         if ($visitor) {
             $visitor->update([
                 'visits' => $visitor->visits + 1
             ]);
         } else {
            $attributes['visits'] = 1;
             $visitor = self::create($attributes);
         }
 
         return $visitor;
    }

  

    public function scopeVisitsCount($query)
    {
        return $query->sum('visits');
    }
}
