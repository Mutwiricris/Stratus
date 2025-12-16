<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateFilamentUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'filament:create-production-user
                            {--email=hello@ascendstratus.com : The email address}
                            {--password=Bytech@123 : The password}
                            {--name=Admin User : The user name}
                            {--role=admin : The user role (admin or agent)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Filament admin user for production';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->option('email');
        $password = $this->option('password');
        $name = $this->option('name');
        $role = $this->option('role');

        // Check if user already exists
        $existingUser = User::where('email', $email)->first();

        if ($existingUser) {
            if ($this->confirm("User with email {$email} already exists. Update password and role?", true)) {
                $existingUser->update([
                    'password' => $password, // Will be auto-hashed by model cast
                    'role' => $role,
                    'status' => 'online',
                ]);

                $this->info("✅ User updated successfully!");
                $this->table(
                    ['Field', 'Value'],
                    [
                        ['Name', $existingUser->name],
                        ['Email', $existingUser->email],
                        ['Role', $existingUser->role],
                        ['Status', $existingUser->status],
                    ]
                );

                return Command::SUCCESS;
            } else {
                $this->info('Operation cancelled.');
                return Command::FAILURE;
            }
        }

        // Create new user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password, // Will be auto-hashed by model cast
            'role' => $role,
            'status' => 'online',
            'email_verified_at' => now(),
        ]);

        $this->info("✅ Filament user created successfully!");
        $this->newLine();
        $this->table(
            ['Field', 'Value'],
            [
                ['Name', $user->name],
                ['Email', $user->email],
                ['Role', $user->role],
                ['Status', $user->status],
                ['Can Access Filament', $user->isAdmin() ? 'Yes' : 'Yes (Agent)'],
            ]
        );
        $this->newLine();
        $this->info("🔑 Password: {$password}");
        $this->info("📧 Email: {$email}");
        $this->newLine();
        $this->info("You can now login to Filament with these credentials.");

        return Command::SUCCESS;
    }
}
