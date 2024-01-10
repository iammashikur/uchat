<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(AttachmentSeeder::class);
        $this->call(ChannelSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(ConversationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserConversationSeeder::class);
    }
}
