<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'show-users']);

        Permission::create(['name' => 'create-domain']);
        Permission::create(['name' => 'edit-domain']);
        Permission::create(['name' => 'delete-domain']);
        Permission::create(['name' => 'show-domain']);

        Permission::create(['name' => 'create-partenaire']);
        Permission::create(['name' => 'edit-partenaire']);
        Permission::create(['name' => 'delete-partenaire']);
        Permission::create(['name' => 'show-partenaire']);

        Permission::create(['name' => 'create-photo']);
        Permission::create(['name' => 'edit-photo']);
        Permission::create(['name' => 'delete-photo']);
        Permission::create(['name' => 'show-photo']);

        Permission::create(['name' => 'create-projet']);
        Permission::create(['name' => 'edit-projet']);
        Permission::create(['name' => 'delete-projet']);
        Permission::create(['name' => 'show-projet']);

        Permission::create(['name' => 'create-right']);
        Permission::create(['name' => 'edit-right']);
        Permission::create(['name' => 'delete-right']);
        Permission::create(['name' => 'show-right']);

        Permission::create(['name' => 'create-titre']);
        Permission::create(['name' => 'edit-titre']);
        Permission::create(['name' => 'delete-titre']);
        Permission::create(['name' => 'show-titre']);

        $supadminRole = Role::create(['name' => 'Super Administrateur']);
        $adminRole = Role::create(['name' => 'Administrateur']);
        $moderatorRole = Role::create(['name' => 'Moderateur']);
        $editeurRole = Role::create(['name' => 'Editeur']);
        $agentRole = Role::create(['name' => 'Agent ASES']);
        $visiteurRole = Role::create(['name' => 'Visiteur']);

        $visiteurRole->givePermissionTo([
            'show-partenaire',
            'show-projet',
            'show-titre',
        ]);

        $agentRole->givePermissionTo([
            'show-domain',
            'show-partenaire',
            'show-photo',
            'show-projet',
        ]);

        $editeurRole->givePermissionTo([
            'create-domain',
            'edit-domain',
            'delete-domain',
            'show-domain',
            'create-partenaire',
            'edit-partenaire',
            'delete-partenaire',
            'show-partenaire',
            'create-photo',
            'edit-photo',
            'delete-photo',
            'show-photo',
            'create-projet',
            'edit-projet',
            'delete-projet',
            'show-projet',
        ]);


        $moderatorRole->givePermissionTo([
            'create-domain',
            'edit-domain',
            'delete-domain',
            'show-domain',
            'create-partenaire',
            'edit-partenaire',
            'delete-partenaire',
            'show-partenaire',
            'create-photo',
            'edit-photo',
            'delete-photo',
            'show-photo',
            'create-projet',
            'edit-projet',
            'delete-projet',
            'show-projet',
            'create-titre',
            'edit-titre',
            'delete-titre',
            'show-titre',
        ]);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'show-users',
            'create-domain',
            'edit-domain',
            'delete-domain',
            'show-domain',
            'create-partenaire',
            'edit-partenaire',
            'delete-partenaire',
            'show-partenaire',
            'create-photo',
            'edit-photo',
            'delete-photo',
            'show-photo',
            'create-projet',
            'edit-projet',
            'delete-projet',
            'show-projet',
            'create-right',
            'edit-right',
            'delete-right',
            'show-right',
            'create-titre',
            'edit-titre',
            'delete-titre',
            'show-titre',
        ]);

        $supadminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'show-users',
            'create-domain',
            'edit-domain',
            'delete-domain',
            'show-domain',
            'create-partenaire',
            'edit-partenaire',
            'delete-partenaire',
            'show-partenaire',
            'create-photo',
            'edit-photo',
            'delete-photo',
            'show-photo',
            'create-projet',
            'edit-projet',
            'delete-projet',
            'show-projet',
            'create-right',
            'edit-right',
            'delete-right',
            'show-right',
            'create-titre',
            'edit-titre',
            'delete-titre',
            'show-titre',
        ]);

        $users = User::factory()->create([
            'name' => 'Georges AYENI',
            'email' => 'contact@ongases.org',
        ]);

        $users->assignRole('Super Administrateur');

        User::factory()->create([
            'name' => 'Georges AYENI',
            'email' => 'admin@mail.com',
        ]);

        User::factory()->create([
            'name' => 'Simple User',
            'email' => 'simple@mail.com',
        ]);

        User::factory(10)->create();
    }
}
