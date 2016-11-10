<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Utilities\Constant;

use App\Models\User;
use App\Models\Post;
use App\Models\PostImage;

class UserSeeder extends Seeder {

    CONST DIR_PATH = __DIR__ . '/../../public/images/full_size/' ,
          MAX = 5;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->populateAdminUser();
        $this->populatePosts();
    }

    private function populateAdminUser() {

        $adminAccount = User::where([
            'email' => 'admin@trashure.com',
        ])->first();

        if ( ! $adminAccount ) {
            User::create([
                'name'      => 'Admin',
                'email'     => 'admin@trashure.com',
                'password'  => bcrypt('trashure2016'),
                'user_type' => Constant::ADMIN_ROLE,
                'location'  => '',
                'contact'   => ''
            ]);
        }
    }

    private function populatePosts()
    {
        $user = User::create([
            'name'      => 'John Roca',
            'email'     => 'john.roca@gmail.com',
            'password'  => bcrypt('password'),
            'user_type' => Constant::SELLER_ROLE,
            'location'  => 'Anibong Tacloban City',
            'contact'   => '09178930824'
        ]);

        $post = Post::create([
            'user_id' => $user->id,
            'title'   =>  'Unused refrigerator',
            'description' => 'unused refrigerator that can be recycled.'
        ]);

        for ($i = 1; $i <= self::MAX; $i ++) {
            $fileName = $i . '.jpg';
            if(File::exists(self::DIR_PATH. $fileName))
            {
                $img = PostImage::create([
                    'name' => $fileName,
                    'url'  => $fileName
                ]);

                DB::table('posts_images')->insert([
                    'image_id' => $img->id,
                    'post_id'  => $post->id
                ]);
            }
        }
    }
}
