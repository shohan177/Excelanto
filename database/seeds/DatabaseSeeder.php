<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JobCategorySeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(JobPostSeeder::class);
        $this->call(AppliedJobSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(NewPassportSeeder::class);
        $this->call(LostPassportSeeder::class);
        $this->call(ExtensionPassportSeeder::class);
        $this->call(SubmittedTravelEnquirySeeder::class);
        $this->call(TravelEnquirySeeder::class);
        $this->call(MeetAndGreetSeeder::class);
        $this->call(JailDeportationSeeder::class);
        $this->call(DeadbodyTransferSeeder::class);
        $this->call(MedicalCompensationSeeder::class);
        $this->call(InsuranceServiceSeeder::class);
    }
}
