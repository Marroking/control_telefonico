<?php

class SentryUserGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users_groups')->delete();

		$userUser = Sentry::getUserProvider()->findByLogin('user@user.com');
		$adminUser = Sentry::getUserProvider()->findByLogin('admin@admin.com');

		$userGroup = Sentry::getGroupProvider()->findByName('Usuarios');
		$adminGroup = Sentry::getGroupProvider()->findByName('Administrador');

	    // Assign the groups to the users
	    $userUser->addGroup($userGroup);
	    $adminUser->addGroup($adminGroup);
	}

}