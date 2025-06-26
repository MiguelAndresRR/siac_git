<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuariosFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // Contraseña por defecto
            'password' => static::$password ??= Hash::make('password'), // Contraseña por defecto
            'id_rol' => $this->faker->numberBetween(1,2),
            'documento' => $this->faker->unique()->numerify('##########'), // Documento de 10 dígitos
            'telefono_usuario' => $this->faker->phoneNumber, // Número de teléfono
        ];
    }
}
