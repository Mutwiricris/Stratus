<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create {--email=} {--password=} {--name=}';

    protected $description = 'Create a new admin user for the Filament panel';

    public function handle(): int
    {
        $this->info('🔧 Creating Admin User for Ascend Stratus Support');
        $this->newLine();

        // Get user input
        $name = $this->option('name') ?? $this->ask('What is the admin\'s name?', 'Admin User');
        $email = $this->option('email') ?? $this->ask('What is the admin\'s email?', 'admin@ascendstratus.com');
        $password = $this->option('password') ?? $this->secret('What is the admin\'s password?') ?? 'password';

        // Validate email
        $validator = Validator::make(['email' => $email], [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            $this->error('❌ Email is invalid or already exists!');

            $existingUser = User::where('email', $email)->first();
            if ($existingUser) {
                $this->warn("User already exists with role: {$existingUser->role}");

                if ($this->confirm('Do you want to reset this user\'s password?')) {
                    $existingUser->update(['password' => Hash::make($password)]);
                    $this->info('✅ Password reset successfully!');
                    $this->showCredentials($email, $password);
                    return self::SUCCESS;
                }
            }

            return self::FAILURE;
        }

        // Create admin user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'admin',
            'status' => 'online',
        ]);

        $this->newLine();
        $this->info('✅ Admin user created successfully!');
        $this->newLine();

        $this->showCredentials($email, $password);

        return self::SUCCESS;
    }

    private function showCredentials(string $email, string $password): void
    {
        $this->table(
            ['Field', 'Value'],
            [
                ['Email', $email],
                ['Password', $password],
                ['Panel URL', url('/stratus')],
            ]
        );

        $this->newLine();
        $this->warn('⚠️  Please keep these credentials safe!');
        $this->info('🌐 Access the admin panel at: ' . url('/stratus'));
    }
}
