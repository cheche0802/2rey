<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //user
      Permission::create([
        'name'         => 'Navegar Usuarios',
        'slug'        => 'admin.users.index',
        'description' => 'Lista y navega todos los usuarios del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Usuarios',
        'slug'        => 'admin.users.show',
        'description' => 'ver detalle de todos los usuarios del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Usuarios',
        'slug'        => 'admin.users.edit',
        'description' => 'editar informacion de los usuarios del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Usuarios',
        'slug'        => 'admin.users.destroy',
        'description' => 'Eliminar los usuarios del sistema',
      ]);
      //Roles
      Permission::create([
        'name'         => 'Navegar roles',
        'slug'        => 'admin.roles.index',
        'description' => 'Lista y navega todos los roles del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Roles',
        'slug'        => 'admin.roles.create',
        'description' => 'Lista y navega todos los roles del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Roles ',
        'slug'        => 'admin.roles.show',
        'description' => 'ver detalle de todos los roles del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Roles',
        'slug'        => 'admin.roles.edit',
        'description' => 'editar informacion de los roles del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Roles',
        'slug'        => 'admin.roles.destroy',
        'description' => 'Eliminar los roles del sistema',
      ]);
      //products
      Permission::create([
        'name'         => 'Navegar Producto',
        'slug'        => 'user.products.index',
        'description' => 'Lista y navega todos los Productos del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Producto',
        'slug'        => 'user.products.create',
        'description' => 'Lista y navega todos los Productos del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Producto ',
        'slug'        => 'user.products.show',
        'description' => 'ver detalle de todos los Productos del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Producto',
        'slug'        => 'user.products.edit',
        'description' => 'editar informacion de los Productos del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Producto',
        'slug'        => 'user.products.destroy',
        'description' => 'Eliminar los Productos del sistema',
      ]);
      //almacen
      Permission::create([
        'name'         => 'Navegar Almacen',
        'slug'        => 'user.stores.index',
        'description' => 'Lista y navega todos los Almacen del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Almacen',
        'slug'        => 'user.stores.create',
        'description' => 'Lista y navega todos los Almacen del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Almacen ',
        'slug'        => 'user.stores.show',
        'description' => 'ver detalle de todos los Almacen del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Almacen',
        'slug'        => 'user.stores.edit',
        'description' => 'editar informacion de los Almacen del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Almacen',
        'slug'        => 'user.stores.destroy',
        'description' => 'Eliminar los Almacen del sistema',
      ]);
      //Categorias
      Permission::create([
        'name'         => 'Navegar Categorias',
        'slug'        => 'user.categories.index',
        'description' => 'Lista y navega todos los Categorias del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Categorias',
        'slug'        => 'user.categories.create',
        'description' => 'Lista y navega todos las Categorias del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Categorias ',
        'slug'        => 'user.categories.show',
        'description' => 'ver detalle de todos las Categorias del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Categorias',
        'slug'        => 'user.categories.edit',
        'description' => 'editar informacion de las Categorias del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Categorias',
        'slug'        => 'user.categories.destroy',
        'description' => 'Eliminar las Categorias del sistema',
      ]);
      //Detalle
      Permission::create([
        'name'         => 'Navegar Detalle',
        'slug'        => 'user.details.index',
        'description' => 'Lista y navega todos los Detalles del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Detalle',
        'slug'        => 'user.details.create',
        'description' => 'Lista y navega todos las Detalles del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Detalle ',
        'slug'        => 'user.details.show',
        'description' => 'ver detalle de todos las Detalles del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Detalle',
        'slug'        => 'user.details.edit',
        'description' => 'editar informacion de las Detalles del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Detalle',
        'slug'        => 'user.details.destroy',
        'description' => 'Eliminar las Detalles del sistema',
      ]);
      //Movimiento
      Permission::create([
        'name'         => 'Navegar Movimiento',
        'slug'        => 'user.moviments.index',
        'description' => 'Lista y navega todos los Movimientos del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion Movimiento',
        'slug'        => 'user.moviments.create',
        'description' => 'Lista y navega todos las Movimientos del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de Movimiento ',
        'slug'        => 'user.moviments.show',
        'description' => 'ver detalle de todos las Movimientos del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar Movimiento',
        'slug'        => 'user.moviments.edit',
        'description' => 'editar informacion de las Movimientos del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar Movimiento',
        'slug'        => 'user.moviments.destroy',
        'description' => 'Eliminar las Movimientos del sistema',
      ]);
      //Historia
      Permission::create([
        'name'         => 'Navegar historia',
        'slug'        => 'admin.histories.index',
        'description' => 'Lista y navega todos los Historias del sistema',
      ]);
      Permission::create([
        'name'         => 'Creacion historia',
        'slug'        => 'admin.histories.create',
        'description' => 'Lista y navega todos las Historias del sistema',
      ]);
      Permission::create([
        'name'         => 'Ver detalle de historia ',
        'slug'        => 'admin.histories.show',
        'description' => 'ver detalle de todos las Historias del sistema',
      ]);
      Permission::create([
        'name'         => 'Modificar historia',
        'slug'        => 'admin.histories.edit',
        'description' => 'editar informacion de las Historias del sistema',
      ]);
      Permission::create([
        'name'         => 'Eliminar historia',
        'slug'        => 'admin.hhistories.destroy',
        'description' => 'Eliminar las Historias del sistema',
      ]);

    }
}
