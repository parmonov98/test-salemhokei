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
        $this->call(UsersTableSeeder::class);
        $this->call(AdminMenusTableSeeder::class);
        $this->call(AdminMenuItemsTableSeeder::class);
        $this->call(AlbumImagesTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(ArticleAuthorTableSeeder::class);
        $this->call(ArticleCategoryTableSeeder::class);
        $this->call(ArticleImageTableSeeder::class);
        $this->call(ArticleTagTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SectionRegionTableSeeder::class);
        $this->call(SectionUserTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
