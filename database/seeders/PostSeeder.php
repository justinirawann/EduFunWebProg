<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post; 

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'category_id' => 1, 'writer_id' => 1, 'title' => 'Human and Computer Interaction', 'slug' => 'human-and-computer-interaction',
            'excerpt' => 'Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...',
            'body' => 'Human-Computer Interaction (HCI) adalah disiplin ilmu yang mempelajari, merancang, mengevaluasi, dan mengimplementasikan sistem komputasi interaktif agar dapat digunakan oleh manusia dengan mudah, aman, efektif, dan nyaman.',
            'published_at' => now()
        ]);

        Post::create([ 
            'category_id' => 1, 'writer_id' => 1, 'title' => 'User Experience', 'slug' => 'user-experience',
            'excerpt' => 'User Experience (UX) adalah keseluruhan pengalaman dan kepuasan pengguna saat berinteraksi dengan sebuah produk atau layanan digital.', 
            'body' => 'Ini mencakup persepsi, emosi, dan respons pengguna terhadap berbagai aspek sistem. UX yang baik sangat penting untuk kesuksesan produk digital karena menentukan seberapa mudah dan menyenangkan produk itu digunakan.', 
            'published_at' => now()
        ]);

        Post::create([ 
            'category_id' => 1, 'writer_id' => 1, 'title' => 'User Experience for Digital Immersive Technology', 'slug' => 'ux-digital-immersive',
            'excerpt' => 'UX untuk teknologi imersif seperti Virtual Reality (VR) dan Augmented Reality (AR) memiliki tantangan unik, terutama dalam hal interaksi dan kenyamanan.', 
            'body' => 'Pembahasan ini mencakup desain interaksi dalam ruang 3D, cara mengurangi motion sickness, dan bagaimana menciptakan rasa kehadiran (presence) yang meyakinkan bagi pengguna.', 
            'published_at' => now()
        ]);

        // Materi Software Engineering 
        Post::create([
            'category_id' => 2, 'writer_id' => 2, 'title' => 'Pattern Software Design', 'slug' => 'pattern-software-design',
            'excerpt' => 'Pattern Software Design adalah solusi umum yang telah teruji dan dapat digunakan kembali untuk masalah-masalah yang sering terjadi dalam desain perangkat lunak.',
            'body' => 'Mempelajari design pattern seperti Singleton, Factory, dan Observer membantu developer menulis kode yang lebih fleksibel, mudah dirawat, dan efisien untuk jangka panjang.', 
            'published_at' => now()
        ]);

        Post::create([ 
            'category_id' => 2, 'writer_id' => 2, 'title' => 'Agile Software Development', 'slug' => 'agile-software-development',
            'excerpt' => 'Agile adalah sebuah metodologi pengembangan perangkat lunak yang berfokus pada iterasi cepat, kolaborasi tim, dan adaptasi terhadap perubahan.', 
            'body' => 'Isi materi lengkap Agile Software Development. Berbeda dengan metode Waterfall yang kaku, Agile mengutamakan fleksibilitas dan feedback berkelanjutan dari klien. Scrum dan Kanban adalah dua framework Agile yang paling populer digunakan.', 
            'published_at' => now()
        ]);

        Post::create([ 
            'category_id' => 2, 'writer_id' => 3, 'title' => 'Code Reengineering', 'slug' => 'code-reengineering',
            'excerpt' => 'Code Reengineering adalah proses menganalisis dan merestrukturisasi kode yang ada untuk meningkatkan kualitas dan kemudahan perawatannya (maintainability).', 
            'body' => 'Ini bukan tentang menambahkan fitur baru, tetapi tentang membersihkan kode lama (refactoring), memperbaiki bug tersembunyi, dan mengadaptasi kode agar sesuai dengan standar modern tanpa mengubah fungsionalitas eksternalnya. ', 
            'published_at' => now()
        ]);
    }
}