<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::create([
            'name_ar' => 'Tuline Technology',
            'name_en' => 'Tuline Technology',
            'description_ar' => 'Tuline Technology هي شركة متخصصة في تطوير البرمجيات تقدم حلولاً متكاملة للشركات والأفراد. تركز الشركة على تصميم وتطوير تطبيقات مخصصة، بالإضافة إلى تقديم خدمات استشارية في مجالات التقنية والبرمجيات. تتميز Tuline Technology بتقديم حلول تلائم احتياجات العملاء، سواء كانت تطبيقات ويب، تطبيقات موبايل، أو أنظمة إدارة أعمال، مع التركيز على الجودة والابتكار لتعزيز الكفاءة وتحقيق أهداف العملاء التقنية.',
            'description_en' => 'Tuline Technology is a software development company that offers comprehensive solutions for businesses and individuals. The company focuses on designing and developing custom applications, as well as providing consulting services in technology and software. Tuline Technology is distinguished by its ability to deliver solutions tailored to client needs, whether they are web applications, mobile apps, or business management systems, with an emphasis on quality and innovation to enhance efficiency and achieve clients\' technical goals.',
            'web_link' => 'https://tuline-website.web.app',
            'ios_link' => '',
            'android_link' => '',
        ]);
        $project->addMedia(__DIR__ . '/img_project/hero-1.png')->preservingOriginal()->toMediaCollection();


        $project = Project::create([
            'name_ar' => 'شادي',
            'name_en' => 'Shadi',
            'description_ar' => 'شركة شادي متخصصة في تقديم خدمات الصيانة والتصليح للمعدات والأجهزة المنزلية والتجارية. تسعى الشركة لتوفير حلول صيانة موثوقة وفعالة، مع التركيز على جودة الخدمة ورضا العملاء. يقدم فريق شادي من الفنيين المهرة خدمات متنوعة تشمل صيانة الأجهزة الكهربائية، أنظمة التكييف، السباكة، والنجارة. نحن نضمن تنفيذ كل خدمة بأعلى معايير الاحترافية والكفاءة، مما يجعلنا الخيار المثالي لاحتياجات الصيانة الخاصة بك.',
            'description_en' => 'Shadi Maintenance specializes in providing maintenance and repair services for residential and commercial equipment and appliances. The company is dedicated to delivering reliable and efficient maintenance solutions, with a strong focus on service quality and customer satisfaction. The skilled Shadi team offers a range of services, including electrical appliance repair, HVAC maintenance, plumbing, and carpentry. We ensure that each service is carried out with the highest standards of professionalism and efficiency, making us the ideal choice for your maintenance needs.',
            'web_link' => 'https://company-website1.web.app',
            'ios_link' => '',
            'android_link' => '',
        ]);
        $project->addMedia(__DIR__ . '/img_project/hero-2.png')->preservingOriginal()->toMediaCollection();


        $project = Project::create([
            'name_ar' => 'UPIT',
            'name_en' => 'UPIT',
            'description_ar' => 'UPIT هي شركة متخصصة في تأجير السيرفرات وتقديم حلول الاستضافة المتقدمة للشركات والأفراد. توفر الشركة خيارات متنوعة من السيرفرات القابلة للتخصيص لتناسب احتياجات العملاء المختلفة، مع ضمان الأداء العالي والأمان والاستقرار. تلتزم UPIT بتقديم دعم فني مستمر وخدمات موثوقة لضمان استمرارية عمل العملاء بكفاءة وسلاسة، مما يجعلها شريكاً موثوقاً في مجالات الاستضافة والبنية التحتية الرقمية.',
            'description_en' => 'UPIT specializes in server rentals and advanced hosting solutions for businesses and individuals. The company offers a variety of customizable server options to meet diverse client needs, ensuring high performance, security, and stability. UPIT is committed to providing continuous technical support and reliable services to guarantee efficient and seamless operations for clients, making it a trusted partner in hosting and digital infrastructure.',
            'web_link' => 'https://upit-company.web.app',
            'ios_link' => '',
            'android_link' => '',
        ]);
        $project->addMedia(__DIR__ . '/img_project/hero-3.png')->preservingOriginal()->toMediaCollection();
    }
}
