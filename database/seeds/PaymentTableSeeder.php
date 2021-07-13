<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
            [
                'student_id' => 1,
                'semester_id' => 3,
                'amount' => 9500,
                'head_id' => 1,
                'transaction_type' => 'debit',
                'payment_type' => 'cash'
            ],

            [
                'student_id' => 1,
                'semester_id' => 3,
                'amount' => 9000,
                'head_id' => 1,
                'transaction_type' => 'credit',
                'payment_type' => 'cash'
            ],

            [
                'student_id' => 3,
                'semester_id' => 7,
                'amount' => 9500,
                'head_id' => 3,
                'transaction_type' => 'debit',
                'payment_type' => 'cash'
            ]
        ];

        foreach ($payment as $payment){
            Payment::create($payment);
        }

    }
}
