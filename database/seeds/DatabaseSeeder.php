<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
        $this->call(ActivationsTableSeeder::class);
        $this->call(PersistencesTableSeeder::class);
        $this->call(ThrottleTableSeeder::class);
        $this->call(RemindersTableSeeder::class);
        $this->call(BandTableSeeder::class);
        $this->call(BandPatientTableSeeder::class);
        $this->call(BloodPressureTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(DepartmentPatientTableSeeder::class);
        $this->call(EmailsTableSeeder::class);
        $this->call(HeartRateTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(O2TableSeeder::class);
        $this->call(PatienthistoryTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(PatientPatienthistoryTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(TempTableSeeder::class);
    }
}
