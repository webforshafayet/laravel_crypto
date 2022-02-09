<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],

            'last_name' => $input['last_name'],
            'contact_number' => $input['contact_number'],
            'choose_package' => $input['choose_package'],
            'country' => $input['country'],
            'sum' => $input['sum'],
            'frequent_deposit' => $input['frequent_deposit'],
            'select_cover_duration' => $input['select_cover_duration'],

            'address' => $input['address'],
            'state' => $input['state'],
            'city' => $input['city'],
            'date' => $input['date'],
            'sex' => $input['sex'],
            'ben_name' => $input['ben_name'],
            'ben_number' => $input['ben_number'],
            'ben_relationship' => $input['ben_relationship'],
            'ben_percentage' => $input['ben_percentage'],

            'password' => Hash::make($input['password']),
             
             
        ]);
    }
}
