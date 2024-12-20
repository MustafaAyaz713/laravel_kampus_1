Bu proje, üniversite öğrencilerinin kampüs içi ve dışındaki etkileşimlerini artırmayı hedefleyen bir sosyal ağ platformudur. Platform, öğrencilerin akademik ve sosyal hayatlarını kolaylaştırmak için çeşitli özellikler sunar. Laravel framework'ü kullanılarak geliştirilmiştir.

🎯 Amaç
Öğrencilere kampüs etkinlikleri, kulüp bilgileri, duyurular ve rehberlik hizmetleri sunmak.
Üniversite e-posta adresleriyle güvenli giriş imkanı sağlayarak, yalnızca üniversite öğrencilerinin kullanımına özel bir ortam yaratmak.
Yapay zeka destekli asistan ile öğrencilerin sorularına hızlı ve doğru cevaplar vermek.
🚀 Özellikler
Güvenli Giriş: Üniversite e-posta adresi ile kullanıcı doğrulama.
Kişiselleştirilmiş Profil: Kullanıcıların akademik ve sosyal bilgilerini özelleştirebilmesi.
Kulüp ve Etkinlik Yönetimi: Öğrenciler, kampüs kulüplerine katılabilir ve etkinliklere göz atabilir.
Duyuru ve Haberler: Güncel kampüs duyurularını ve haberlerini takip etme.
Yapay Zeka Asistanı: Sorulara rehberlik edecek bir yapay zeka destekli chatbot.
Bildirim Sistemi: Yeni etkinlikler ve duyurular hakkında anlık bilgilendirme.
🛠️ Kurulum
Depoyu Klonla:

bash
Kodu kopyala
git clone https://github.com/MustafaAyaz713/laravel_kampus_1.git
cd laravel_kampus_1
Bağımlılıkları Yükle:

bash
Kodu kopyala
composer install
npm install
Çevre Değişkenlerini Ayarla: .env dosyasını oluştur ve veritabanı bilgilerini düzenle:

env
Kodu kopyala
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kampus_db
DB_USERNAME=root
DB_PASSWORD=your_password
Anahtar Oluştur ve Veritabanını Çalıştır:

bash
Kodu kopyala
php artisan key:generate
php artisan migrate
Geliştirme Sunucusunu Başlat:

bash
Kodu kopyala
php artisan serve
Proje Arayüzüne Erişin: Tarayıcınızda http://localhost:8000 adresini ziyaret edin.

📦 Kullanılan Teknolojiler
Laravel - PHP Framework
MySQL - Veritabanı Yönetimi
Vue.js - Ön Yüz
Tailwind CSS - Stil Yönetimi
Livewire - Dinamik Bileşenler
🌟 Katkıda Bulunma
Projeye katkıda bulunmak isterseniz:

Bu depoyu forklayın.
Yeni bir dal oluşturun: git checkout -b feature/yenilik
Değişikliklerinizi yapın ve commit atın: git commit -m 'Yeni bir özellik ekledim'
Dalınızı gönderin: git push origin feature/yenilik
Pull Request açın.
📧 İletişim
Proje ile ilgili sorularınız veya önerileriniz için bana ulaşabilirsiniz:

E-posta: mustafaayaz713@example.com
LinkedIn: Mustafa Ayaz
🔖 Lisans
Bu proje MIT Lisansı ile lisanslanmıştır.
