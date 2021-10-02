<?php

namespace Database\Seeders;

use App\Models\Plan;
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
        // \App\Models\User::factory(10)->create();

        // $table->string('name');
        // $table->integer('tier');
        // $table->string('type');
        // $table->string('annual_premium');
        // $table->string('overall_annual_limit');
        // $table->string('room_and_board');
        // $table->string('room_category');
        // // $table->enum('room_category', ['unhandled', 'ignored', 'warned'])->default('unhandled');
        // $table->integer('hospital_days');
        // $table->string('cnd');
        // $table->string('accidental_death');
        // $table->string('iee');

        // PPO = Preferred Provider Organization
        // HMO = Health Maintenance Organization
        // HSA = Health Savings Account
        // IDM = Indemnity Plans
        // AIO = All In One Premium Plans

        Plan::create([
            'name' => 'AIO Platinum',
            'type' => 'All In One Premium',
            'tier' => '1',
            'annual_premium' => 'RM 2,450',
            'overall_annual_limit' => 'RM 750,000',
            'room_and_board' => 'RM 850/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '180 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 700,000',
        ]);

        Plan::create([
            'name' => 'AIO Gold',
            'type' => 'All In One Premium',
            'tier' => '2',
            'annual_premium' => 'RM 2,200',
            'overall_annual_limit' => 'RM 370,000',
            'room_and_board' => 'RM 420/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '180 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 250,000',
        ]);

        Plan::create([
            'name' => 'AIO Silver',
            'type' => 'All In One Premium',
            'tier' => '3',
            'annual_premium' => 'RM 1,900',
            'overall_annual_limit' => 'RM 180,000',
            'room_and_board' => 'RM 220/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '180 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 250,000',
        ]);

        Plan::create([
            'name' => 'PPO Platinum',
            'type' => 'Preferred Provider Organization',
            'tier' => '1',
            'annual_premium' => 'RM 1,850',
            'overall_annual_limit' => 'RM 500,000',
            'room_and_board' => 'RM 500/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '150 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 500,000',
        ]);

        Plan::create([
            'name' => 'PPO Gold',
            'type' => 'Preferred Provider Organization',
            'tier' => '2',
            'annual_premium' => 'RM 1,650',
            'overall_annual_limit' => 'RM 200,000',
            'room_and_board' => 'RM 350/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '150 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 150,000',
        ]);

        Plan::create([
            'name' => 'PPO Silver',
            'type' => 'Preferred Provider Organization',
            'tier' => '3',
            'annual_premium' => 'RM 1,500',
            'overall_annual_limit' => 'RM 100,000',
            'room_and_board' => 'RM 180/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '150 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 150,000',
        ]);

        Plan::create([
            'name' => 'HMO Platinum',
            'type' => 'Health Maintenance Organization',
            'tier' => '1',
            'annual_premium' => 'RM 1,650',
            'overall_annual_limit' => 'RM 350,000',
            'room_and_board' => 'RM 400/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '120 days',
            'cnd' => 'Full Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 250,000',
        ]);

        Plan::create([
            'name' => 'HMO Gold',
            'type' => 'Health Maintenance Organization',
            'tier' => '2',
            'annual_premium' => 'RM 1,450',
            'overall_annual_limit' => 'RM 170,000',
            'room_and_board' => 'RM 280/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '120 days',
            'cnd' => '75% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 35,000',
        ]);

        Plan::create([
            'name' => 'HMO Silver',
            'type' => 'Health Maintenance Organization',
            'tier' => '3',
            'annual_premium' => 'RM 1,300',
            'overall_annual_limit' => 'RM 85,000',
            'room_and_board' => 'RM 150/day',
            'room_category' => 'Double Bedded',
            'hospital_days' => '120 days',
            'cnd' => '75% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 25,000',
        ]);

        Plan::create([
            'name' => 'HSA Platinum',
            'type' => 'Health Savings Account',
            'tier' => '1',
            'annual_premium' => 'RM 1,450',
            'overall_annual_limit' => 'RM 200,000',
            'room_and_board' => 'RM 150/day',
            'room_category' => 'Basic Suite',
            'hospital_days' => '100 days',
            'cnd' => '65% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 100,000',
        ]);

        Plan::create([
            'name' => 'HSA Gold',
            'type' => 'Health Savings Account',
            'tier' => '2',
            'annual_premium' => 'RM 1,250',
            'overall_annual_limit' => 'RM 70,000',
            'room_and_board' => 'RM 120/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '100 days',
            'cnd' => '65% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 40,000',
        ]);

        Plan::create([
            'name' => 'HSA Silver',
            'type' => 'Health Savings Account',
            'tier' => '3',
            'annual_premium' => 'RM 1,150',
            'overall_annual_limit' => 'RM 45,000',
            'room_and_board' => 'RM 100/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '100 days',
            'cnd' => '65% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 25,000',
        ]);

        Plan::create([
            'name' => 'IPM Platinum',
            'type' => 'Indemnity',
            'tier' => '1',
            'annual_premium' => 'RM 1,350',
            'overall_annual_limit' => 'RM 150,000',
            'room_and_board' => 'RM 110/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '90 days',
            'cnd' => '50% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 35,000',
        ]);

        Plan::create([
            'name' => 'IPM Gold',
            'type' => 'Indemnity',
            'tier' => '2',
            'annual_premium' => 'RM 1,150',
            'overall_annual_limit' => 'RM 60,000',
            'room_and_board' => 'RM 90/day',
            'room_category' => 'Standard Single Bed',
            'hospital_days' => '90 days',
            'cnd' => '50% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 25,000',
        ]);

        Plan::create([
            'name' => 'IPM Silver',
            'type' => 'Indemnity',
            'tier' => '3',
            'annual_premium' => 'RM 1,000',
            'overall_annual_limit' => 'RM 30,000',
            'room_and_board' => 'RM 70/day',
            'room_category' => 'Double Bedded',
            'hospital_days' => '90 days',
            'cnd' => '50% Reimbursement',
            'accidental_death' => 'RM 3,000',
            'iee' => 'RM 10,000',
        ]);
    }
}
