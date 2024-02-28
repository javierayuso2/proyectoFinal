<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities'; // Nombre de la tabla en la base de datos

    protected $fillable = ['activity_id', 'emotion_state_id', 'info']; // Campos que se pueden asignar de manera masiva

    public function emotionStates()
{
    return $this->belongsToMany(EmotionState::class);
}

    // Aquí podrías definir relaciones con otros modelos si es necesario
}
