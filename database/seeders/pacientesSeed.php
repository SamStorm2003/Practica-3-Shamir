<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class pacientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        model::unguard();
        $pacientes = [
            ['nombre' => 'Peter', 'apellido_paterno' => 'Perez', 'apellido_materno' => 'Machuca', 'fecha_nacimiento' => '2003-05-15', 'genero' => 'Masculino', 'direccion' => 'Pampahasi N 10', 'telefono' => '78942862', 'email' => 'peterperez095@gmail.com', 'tipo_sangre' => 'O+', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-04-02', 'medico_asignado' => 'Dr. Gomez', 'estado' => '1'],
            ['nombre' => 'Ana', 'apellido_paterno' => 'Martinez', 'apellido_materno' => 'Lopez', 'fecha_nacimiento' => '1990-07-22', 'genero' => 'Femenino', 'direccion' => 'Miraflores N 654', 'telefono' => '78996554', 'email' => 'anamartinez@gmail.com', 'tipo_sangre' => 'A-', 'alergias' => 'Penicilina', 'fecha_ingreso' => '2024-08-12', 'medico_asignado' => 'Dr. Fernandez', 'estado' => '1'],
            ['nombre' => 'Pedro', 'apellido_paterno' => 'Hernandez', 'apellido_materno' => 'Ramos', 'fecha_nacimiento' => '1995-10-10', 'genero' => 'Masculino', 'direccion' => 'Los pinos N 202', 'telefono' => '75395145', 'email' => 'pedrohernandez859@gmail.com', 'tipo_sangre' => 'B+', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-12-10', 'medico_asignado' => 'Dra. Martinez', 'estado' => '1'],
            ['nombre' => 'Laura', 'apellido_paterno' => 'Garcia', 'apellido_materno' => 'Sanchez', 'fecha_nacimiento' => '2001-02-25', 'genero' => 'Femenino', 'direccion' => 'Calle potosi N 181', 'telefono' => '79546985', 'email' => 'lauragarcia55@gmail.com', 'tipo_sangre' => 'AB+', 'alergias' => 'Diclofenaco', 'fecha_ingreso' => '2024-08-15', 'medico_asignado' => 'Dr. Lopez', 'estado' => '1'],
            ['nombre' => 'Carlos', 'apellido_paterno' => 'Ramirez', 'apellido_materno' => 'Vazquez', 'fecha_nacimiento' => '1996-11-30', 'genero' => 'Masculino', 'direccion' => 'Avenida saveedra N 25', 'telefono' => '654321987', 'email' => 'carlosramirez935@gmail.com', 'tipo_sangre' => 'O-', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-08-20', 'medico_asignado' => 'Dra. Torres', 'estado' => '1'],
            ['nombre' => 'Maria', 'apellido_paterno' => 'Jimenez', 'apellido_materno' => 'Mamani', 'fecha_nacimiento' => '1998-03-18', 'genero' => 'Femenino', 'direccion' => 'Calle bush N 1587', 'telefono' => '789123456', 'email' => 'mariajimenez@gmail.com', 'tipo_sangre' => 'B-', 'alergias' => 'Lactosa', 'fecha_ingreso' => '2024-12-25', 'medico_asignado' => 'Dra. Ortega', 'estado' => '1'],
            ['nombre' => 'Jose', 'apellido_paterno' => 'Gonzalez', 'apellido_materno' => 'Alvarez', 'fecha_nacimiento' => '1987-06-10', 'genero' => 'Masculino', 'direccion' => 'Avenida Hernando siles N 157', 'telefono' => '7236548', 'email' => 'josegonzalez@gmail.com', 'tipo_sangre' => 'A+', 'alergias' => 'Nuez', 'fecha_ingreso' => '2024-09-01', 'medico_asignado' => 'Dra. Sanchez', 'estado' => '1'],
            ['nombre' => 'Danner', 'apellido_paterno' => 'Calle', 'apellido_materno' => 'Rios', 'fecha_nacimiento' => '1996-12-05', 'genero' => 'Masculino', 'direccion' => 'Calle Triangular N 89', 'telefono' => '7852315', 'email' => 'dannercall@gmail.com', 'tipo_sangre' => 'AB-', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-09-22', 'medico_asignado' => 'Dr. Lopez', 'estado' => '1'],
            ['nombre' => 'Luis', 'apellido_paterno' => 'Torres', 'apellido_materno' => 'Castro', 'fecha_nacimiento' => '2008-08-20', 'genero' => 'Masculino', 'direccion' => 'Pampahasi Bajo N 895', 'telefono' => '79632584', 'email' => 'luitorr@gmail.com', 'tipo_sangre' => 'O+', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-09-04', 'medico_asignado' => 'Dr. Fernandez', 'estado' => '1'],
            ['nombre' => 'Sofía', 'apellido_paterno' => 'Gomez', 'apellido_materno' => 'Rivera', 'fecha_nacimiento' => '1996-09-12', 'genero' => 'Femenino', 'direccion' => 'Avenida max paredes N 78', 'telefono' => '68455726', 'email' => 'sofigomez@gmail.com', 'tipo_sangre' => 'B-', 'alergias' => 'Gatos', 'fecha_ingreso' => '2024-09-04', 'medico_asignado' => 'Dra. Martinez', 'estado' => '1'],
            ['nombre' => 'Miguel', 'apellido_paterno' => 'Vega', 'apellido_materno' => 'Mendez', 'fecha_nacimiento' => '1993-04-08', 'genero' => 'Masculino', 'direccion' => 'Calle Perez N 1864', 'telefono' => '654321987', 'email' => 'miguevega@gmail.com', 'tipo_sangre' => 'A-', 'alergias' => 'Sol', 'fecha_ingreso' => '2024-11-20', 'medico_asignado' => 'Dr. Gomez', 'estado' => '1'],
            ['nombre' => 'Felix', 'apellido_paterno' => 'Ruiz', 'apellido_materno' => 'García', 'fecha_nacimiento' => '1986-11-29', 'genero' => 'Masculino', 'direccion' => 'Avenida saveedra N 4775', 'telefono' => '74123658', 'email' => 'felixruz52@gmail.com', 'tipo_sangre' => 'B+', 'alergias' => 'Nuez', 'fecha_ingreso' => '2024-11-25', 'medico_asignado' => 'Dr. Ortega', 'estado' => '1'],
            ['nombre' => 'Dennis', 'apellido_paterno' => 'Condori', 'apellido_materno' => 'Troche', 'fecha_nacimiento' => '1996-07-18', 'genero' => 'Masculino', 'direccion' => 'Avenida Perez N 89', 'telefono' => '79325886', 'email' => 'denisop8528@gmail.com', 'tipo_sangre' => 'O-', 'alergias' => 'Aspirina', 'fecha_ingreso' => '2024-10-01', 'medico_asignado' => 'Dr. Fernandez', 'estado' => '1'],
            ['nombre' => 'Camila', 'apellido_paterno' => 'Rocavado', 'apellido_materno' => 'Moreno', 'fecha_nacimiento' => '1993-06-20', 'genero' => 'Femenino', 'direccion' => 'Calle potosi N 98', 'telefono' => '75863284', 'email' => 'camilarocavado@gmail.com', 'tipo_sangre' => 'B-', 'alergias' => 'Ibuprofeno', 'fecha_ingreso' => '2024-10-13', 'medico_asignado' => 'Dra. Sanchez', 'estado' => '1'],
            ['nombre' => 'Fernando', 'apellido_paterno' => 'Alvarez', 'apellido_materno' => 'Flores', 'fecha_nacimiento' => '2000-05-17', 'genero' => 'Masculino', 'direccion' => 'Calle Franklin N 895', 'telefono' => '7895632', 'email' => 'fernanalvarez25@gmail.com', 'tipo_sangre' => 'A+', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-10-19', 'medico_asignado' => 'Dr. Martinez', 'estado' => '1'],
            ['nombre' => 'Verónica', 'apellido_paterno' => 'Ortiz', 'apellido_materno' => 'Quispe', 'fecha_nacimiento' => '2001-02-12', 'genero' => 'Femenino', 'direccion' => 'Avenida Bush N 848', 'telefono' => '73251498', 'email' => 'veronicortiz@gmail.com', 'tipo_sangre' => 'O+', 'alergias' => 'Gluten', 'fecha_ingreso' => '2024-10-20', 'medico_asignado' => 'Dr. Lopez', 'estado' => '1'],
            ['nombre' => 'Kevin', 'apellido_paterno' => 'Rocha', 'apellido_materno' => 'Paredes', 'fecha_nacimiento' => '2009-11-11', 'genero' => 'Masculino', 'direccion' => 'Plaza Uyuni N 658', 'telefono' => '654321987', 'email' => 'kevinrocha@gmail.com', 'tipo_sangre' => 'AB+', 'alergias' => 'Mostaza', 'fecha_ingreso' => '2024-10-20', 'medico_asignado' => 'Dr. Sanchez', 'estado' => '1'],
            ['nombre' => 'July', 'apellido_paterno' => 'Seong', 'apellido_materno' => 'Gonzalez', 'fecha_nacimiento' => '2004-09-08', 'genero' => 'Femenino', 'direccion' => 'Avenida Saveedra N 59', 'telefono' => '789654321', 'email' => 'julyseong582@gmail.com', 'tipo_sangre' => 'B+', 'alergias' => 'Ninguna', 'fecha_ingreso' => '2024-10-27', 'medico_asignado' => 'Dr. Fernandez', 'estado' => '1'],
        ];
        foreach ($pacientes as $paciente) {
            \App\Models\pacientes::create($paciente);
        }
        model::unguard();

    }
}
