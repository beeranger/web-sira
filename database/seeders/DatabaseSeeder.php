<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory(10)->create();

        User::create(['name'=>'Admin','username'=>'adminra','is_admin'=>1,'password'=>Hash::make('password')]);
        User::create(['name'=>'Admin Super','username'=>'superuser','is_admin'=>1,'password'=>Hash::make('password')]);

        Category::create(['name'=>'Program','slug'=>'program']);
        Category::create(['name'=>'Berita','slug'=>'berita']);
        Category::create(['name'=>'PPDB','slug'=>'ppdb']);
        Category::create(['name'=>'Fasilitas','slug'=>'fasilitas']);
        Photo::create(['category_id'=>1,'unit_id'=>2,'url'=>'smp_1.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>2,'url'=>'smp_2.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>2,'url'=>'smp_3.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>2,'url'=>'smp_5.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>2,'url'=>'smp_4.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>1,'url'=>'sd_1.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>1,'url'=>'sd_2.jpg']);
        Photo::create(['category_id'=>1,'unit_id'=>1,'url'=>'sd_3.jpg']);
        Photo::create(['category_id'=>4,'unit_id'=>1,'url'=>'sd_4.jpg']);
        Photo::create(['category_id'=>4,'unit_id'=>1,'url'=>'sd_5.jpg']);
        
        Unit::create([
            'name'=>'SDI',
            'slug'=>'sdi',
            // 'visi'=>'SD yang ramah anak dan menjadi pribadi yang kuat, ceria, cerdas, mandiri, dan berakhlak islami.',           
            // 'misi'=>'<p>Mengembangkan potensi dan bakat individual peserta didik untuk membentuk karakter anak yang religius, nasionalis, integritas, mandiri, dan gotong royong.</p>
            // <p>Mewujudkan ekosistem belajar yang cinta agama dan bangsa.</p><p>Melaksanakan manajemen mutu sekolah yang responsive dan akuntabel</p>',
            // 'program'=>'<p>Kegiatan pembelajaran berbasis Kurikulum 2013</p>
            // <p>Klinik belajar</p>
            // <p>Belajar Al-Quran metode Ummi dan tahfidz</p>
            // <p>Belajar Siroh Nabawiyah dan Sahabat serta tokoh-tokoh Islam</p>
            // <p>Pembiasaan salat, zikir, dan doa</p>
            // <p>Bahasa Daerah dan Bahasa Inggris</p>
            // <p>Komputer</p>
            // <p>Educational Field Trip</p>
            // <p>SDIRA Camp</p>
            // <p>Quran Camp</p>
            // <p>Live-In Program</p>
            // <p>Ekstrakurikuler</p>',
            // 'target'=>'<p>Mahir dalam membaca, menulis, dan berhitung</p>
            // <p>Mampu mengenal dan mengembangkan kecerdasan intelektual, psikomotorik, dan emosional</p>
            // <p>Lancar membaca Al-Quran dan hafal 3 juz</p>
            // <p>Mengenal dan dapat meneladani tokoh-tokoh Islam dan para pejuang kemerdekaan</p>
            // <p>Terbiasa melaksanakan ibadah wajib dan sunnah dengan penuh kesadaran</p>
            // <p>Memiliki rasa cinta terhadap bangsa dan tanah air Indonesia</p>
            // <p>Memiliki sikap jujur, bertanggung jawab, toleran, mandiri, dan peduli.</p>
            // <p>Memiliki kemampuan kerjasama, menghargai dan membantu orang lain</p>',            
        ]);
        Unit::create([
            'name'=>'SMPI',
            'slug'=>'smpi',
            // 'visi'=>'SMP unggulan yang ramah anak menjadi pribadi yang kuat, ceria, cerdas, mandiri, dan berakhlak islami.',            
            // 'misi'=>'<p>Terbumikannya kecintaan pada Al-Quran dan sunnah Rasulullah Muhammad SAW melalui kegiatan pendidikan yang bercirikan Islam dan kearifan lokal.</p>
            // <p>Terbangunnya ekosistem pendidikan yang islami serta unggul dalam literasi, numerasi, dan sains melalui pembelajaran yang ramah, inovatif, kreatif, dan partisipatif.</p>
            // <p>Terwujudnya semangat keunggulan melalui penanaman dasar-dasar kemampuan berpikir ilmiah</p><p>Terlaksananya manajemen mutu sekolah yang responsif dan akuntabel</p>',
            // 'program'=>'<p>Kegiatan pembelajaran berbasis Kurikulum 2013</p>
            // <p>Klinik belajar</p>
            // <p>Belajar Al-Quran metode Ummi dan tahfidz</p>
            // <p>Belajar Siroh Nabawiyah dan Sahabat serta tokoh-tokoh Islam</p>
            // <p>Pembiasaan salat, zikir, dan doa</p>
            // <p>Bahasa Daerah dan Bahasa Inggris</p>
            // <p>Komputer</p>
            // <p>Educational Field Trip</p>
            // <p>SDIRA Camp</p>
            // <p>Quran Camp</p>
            // <p>Live-In Program</p>
            // <p>Ekstrakurikuler</p>',
            // 'target'=>'<p>Mahir dalam membaca, menulis, dan berhitung</p>
            // <p>Mampu mengenal dan mengembangkan kecerdasan intelektual, psikomotorik, dan emosional</p>
            // <p>Lancar membaca Al-Quran dan hafal 3 juz</p>
            // <p>Mengenal dan dapat meneladani tokoh-tokoh Islam dan para pejuang kemerdekaan</p>
            // <p>Terbiasa melaksanakan ibadah wajib dan sunnah dengan penuh kesadaran</p>
            // <p>Memiliki rasa cinta terhadap bangsa dan tanah air Indonesia</p>
            // <p>Memiliki sikap jujur, bertanggung jawab, toleran, mandiri, dan peduli.</p>
            // <p>Memiliki kemampuan kerjasama, menghargai dan membantu orang lain</p>',            
        ]);


        // Post::factory(20)->create();
        // Photo::factory(20)->create();
    }
}
