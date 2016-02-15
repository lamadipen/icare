<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
        $this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
        $this->call('PageTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('ProductPictureTableSeeder');
        $this->call('InquiryTableSeeder');
	}
}


class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert(
            array(
                'name' => 'Pawan Krishna Shrestha',
                'email' => 'pawanshr@gmail.com',
                'password' => bcrypt("pawanshr"),
                'remember_token' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('users')->insert(
            array(
                'name' => 'Shrwan Krishna Shrestha',
                'email' => 'shrwan@gmail.com',
                'password' => bcrypt("pawanshr"),
                'remember_token' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(
            array(
                'title' => 'Category1',
                'description' => 'Category Description 1',
                'parentid'  => 0,
                'deleted_at' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('categories')->insert(
            array(
                'title' => 'Category2',
                'description' => 'Category Description 2',
                'parentid'  => 0,
                'deleted_at' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('categories')->insert(
            array(
                'title' => 'Category12',
                'description' => 'Category Description 2',
                'parentid'  => 1,
                'deleted_at' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}

class PageTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();

        DB::table('pages')->insert(
            array(
                'title' => 'About Us',
                'description' => '<p style="text-align: center;"><strong>Objectives</strong></p>

<blockquote>
<p style="text-align: center;">iCare Comforts deals in customized as well as offers a broad range of ready to use fabric products.</p>
</blockquote>

<p style="text-align: center;"><strong>Mission</strong></p>

<blockquote>
<p style="text-align: center;">Create fabrics for everyday living that inspire appreciation for the finer things in life.</p>
</blockquote>

<p style="text-align: center;"><strong>Vision</strong></p>

<blockquote>
<p style="text-align: center;">To provide outstanding value by delivering best-in-class designer products at affordable prices.</p>
</blockquote>',
                'slug'  => 'page1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('pages')->insert(
            array(
                'title' => 'Page 2 title',
                'description' => 'Page 2 description',
                'slug'  => 'page2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('pages')->insert(
            array(
                'title' => 'Page 3 title',
                'description' => 'Page 3 description',
                'slug'  => 'page3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('pages')->insert(
            array(
                'title' => 'Page 4 title',
                'description' => 'Page 4 description',
                'slug'  => 'page4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}

class ProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        DB::table('products')->insert(
            array(
                'cat_id' => 1,
                'title' => 'Product 1 title',
                'description' => '<p>product_1_title, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>',
                'slug'  => 'product_1_title',
                'price'  => 100.00,
                'weight'  => 13.5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('products')->insert(
            array(
                'cat_id' => 2,
                'title' => 'Product 2 title',
                'description' => '<p>product_2_title, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>',
                'slug'  => 'product_2_title',
                'price'  => 430.50,
                'weight'  => 20.75,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}


class ProductPictureTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productpictures')->truncate();

        DB::table('productpictures')->insert(
            array(
                'product_id' => 1,
                'caption' => 'Product Picture 1 caption',
                'filename_thumb'  => 'product-thumb-1.jpg',
                'filename_mid'  => 'product-1.jpg',
                'filename_big'  => 'product-1.jpg',
                'isdefault'  => 1,
                'order'  => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('productpictures')->insert(
            array(
                'product_id' => 1,
                'caption' => 'Product Picture 2 caption',
                'filename_thumb'  => 'product-thumb-2.jpg',
                'filename_mid'  => 'product-2.jpg',
                'filename_big'  => 'product-2.jpg',
                'isdefault'  => 0,
                'order'  => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('productpictures')->insert(
            array(
                'product_id' => 1,
                'caption' => 'Product Picture 3 caption',
                'filename_thumb'  => 'product-thumb-3.jpg',
                'filename_mid'  => 'product-3.jpg',
                'filename_big'  => 'product-3.jpg',
                'isdefault'  => 0,
                'order'  => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('productpictures')->insert(
            array(
                'product_id' => 2,
                'caption' => 'Product Picture 1 caption',
                'filename_thumb'  => 'product-thumb-1.jpg',
                'filename_mid'  => 'product-1.jpg',
                'filename_big'  => 'product-1.jpg',
                'isdefault'  => 1,
                'order'  => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('productpictures')->insert(
            array(
                'product_id' => 2,
                'caption' => 'Product Picture 2 caption',
                'filename_thumb'  => 'product-thumb-2.jpg',
                'filename_mid'  => 'product-2.jpg',
                'filename_big'  => 'product-2.jpg',
                'isdefault'  => 0,
                'order'  => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('productpictures')->insert(
            array(
                'product_id' => 2,
                'caption' => 'Product Picture 3 caption',
                'filename_thumb'  => 'product-thumb-3.jpg',
                'filename_mid'  => 'product-3.jpg',
                'filename_big'  => 'product-3.jpg',
                'isdefault'  => 0,
                'order'  => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}

class InquiryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inquiries')->truncate();

        DB::table('inquiries')->insert(
            array(
                'productid' => 1,
                'name' => 'Pawan K',
                'email'  => 'pawan@pawan.com',
                'description'  => 'what is the shipment method and payment mode?',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('inquiries')->insert(
            array(
                'productid' => 2,
                'name' => 'Pawan KS',
                'email'  => 'pawanks@pawanks.com',
                'description'  => 'how much is the price?',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }
}