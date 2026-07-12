<?php
/**
 * Structured content for the homepage sections.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

function sirte_elc_platform_url(): string
{
    return 'https://e-learning.su.edu.ly/';
}

function sirte_elc_faculties(): array
{
    $base = 'https://e-learning.su.edu.ly/course/index.php?categoryid=';
    $logos = 'https://elc.center.su.edu.ly/faculitieslogos/';

    return [
        ['name' => 'كلية العلوم', 'logo' => $logos . 'sci.png', 'url' => $base . '225'],
        ['name' => 'كلية الاقتصاد', 'logo' => $logos . 'ec.png', 'url' => $base . '112'],
        ['name' => 'كلية الهندسة', 'logo' => $logos . 'eng.png', 'url' => $base . '151'],
        ['name' => 'كلية القانون', 'logo' => $logos . 'law.png', 'url' => $base . '259'],
        ['name' => 'كلية الطب البشري', 'logo' => $logos . 'med.png', 'url' => $base . '479'],
        ['name' => 'كلية الآداب', 'logo' => $logos . 'art.png', 'url' => $base . '485'],
        ['name' => 'كلية الزراعة', 'logo' => $logos . 'soil.png', 'url' => $base . '203'],
        ['name' => 'كلية طب وجراحة الفم والأسنان', 'logo' => $logos . 'dental.png', 'url' => $base . '477'],
        ['name' => 'كلية العلوم الصحية', 'logo' => $logos . 'helth.png', 'url' => $base . '405'],
        ['name' => 'كلية التربية', 'logo' => $logos . 'tar.png', 'url' => $base . '549'],
        ['name' => 'كلية تقنية المعلومات', 'logo' => $logos . 'it.png', 'url' => $base . '599'],
        ['name' => 'كلية هندسة الطاقة والتعدين مرادة', 'logo' => $logos . '6.png', 'url' => $base . '527'],
        ['name' => 'كلية العلوم الإنسانية والتطبيقية هراوة', 'logo' => $logos . '7.png', 'url' => $base . '621'],
        // The previous URL used category 634, which belongs to "مرحلة إعداد الطب".
        // Keep this item visible, but do not publish a misleading link until the
        // official Moodle category ID for the Zamzam faculty is confirmed.
        ['name' => 'كلية الآداب والعلوم زمزم', 'logo' => $logos . '8.png', 'url' => ''],
        ['name' => 'مرحلة إعداد الطب', 'logo' => $logos . '10.png', 'url' => $base . '634'],
    ];
}

function sirte_elc_documents(): array
{
    return [
        [
            'title' => 'الهيكل التنظيمي',
            'description' => 'يوضح الهيكل الإداري للمركز والمهام والمسؤوليات لكل وحدة تنظيمية لضمان سير العمل بكفاءة.',
            'url' => 'https://drive.google.com/file/d/1uRnLRksPXq0hZJAta0LgFIc3IEbHIwpA/view?usp=sharing',
            'icon' => 'network',
        ],
        [
            'title' => 'اللوائح والسياسات',
            'description' => 'تنظيم العمل داخل المنصة التعليمية وفق معايير الجودة والتعليم الإلكتروني المعتمدة.',
            'url' => 'https://drive.google.com/file/d/1pBXeaoySctqAi0Iv0Ts6LUACIUHrKXEP/view?usp=sharing',
            'icon' => 'shield',
        ],
        [
            'title' => 'الخطة الإستراتيجية',
            'description' => 'تحديد توجهات مستقبلية دقيقة لضمان تطوير مستمر وخدمات تعليمية تقنية عالية الجودة بشكل مستدام.',
            'url' => 'https://drive.google.com/file/d/1dtceTrEulFmmjfL9CKe6ZkdBYmkSJh8P/view?usp=sharing',
            'icon' => 'target',
        ],
        [
            'title' => 'أدلة استخدام المنصة الإلكترونية (Moodle)',
            'description' => 'أدلة وفيديوهات تعريفية لكيفية استخدام منصة التعليم الإلكتروني بالجامعة.',
            'url' => 'https://drive.google.com/drive/folders/1AKZO1vAChvwShv8sbYcWTugZCRo16Enc?usp=sharing',
            'icon' => 'book',
        ],
    ];
}

/**
 * Site-wide page map used by the header/footer navigation.
 * Codex/Mansour: create a WordPress Page for each slug below and assign
 * the matching "page-{key}.php" template from "الصفحة الأصل > القالب".
 */
function sirte_elc_pages(): array
{
    return [
        'about' => ['label' => 'عن المركز', 'slug' => 'about'],
        'academics' => ['label' => 'الكليات والمقررات', 'slug' => 'academics'],
        'governance' => ['label' => 'الحوكمة والوثائق', 'slug' => 'governance'],
        'news' => ['label' => 'الأخبار والفعاليات', 'slug' => 'news'],
        'guides' => ['label' => 'أدلة الاستخدام', 'slug' => 'guides'],
        'contact' => ['label' => 'اتصل بنا', 'slug' => 'contact'],
    ];
}

function sirte_elc_page_url(string $key): string
{
    $pages = sirte_elc_pages();

    if (! isset($pages[$key])) {
        return home_url('/');
    }

    $page = get_page_by_path($pages[$key]['slug']);

    if ($page instanceof WP_Post) {
        return get_permalink($page);
    }

    return home_url('/' . $pages[$key]['slug'] . '/');
}

/**
 * Key milestones. Keep this list limited to facts Mansour has confirmed;
 * add a year only once it is verified to avoid publishing incorrect dates.
 */
function sirte_elc_history(): array
{
    return [
        [
            'year' => '2022',
            'title' => 'قرار الإنشاء',
            'description' => 'صدور قرار معالي وزير التعليم العالي والبحث العلمي رقم (1620) لسنة 2022م بإنشاء مركز التعليم الإلكتروني بجامعة سرت.',
        ],
        [
            'year' => 'منذ الإنشاء',
            'title' => 'تشغيل المنصة التعليمية',
            'description' => 'إدارة منصة Moodle الموحدة للجامعة، وربط جميع الكليات بمقررات وأنشطة تعليمية إلكترونية ومدمجة.',
        ],
        [
            'year' => 'مستمر',
            'title' => 'التوسع والتطوير المؤسسي',
            'description' => 'تحديث مستمر للبنية التقنية، وتوسيع نطاق الدعم الفني والتدريب لأعضاء هيئة التدريس والطلاب في مختلف الكليات.',
        ],
    ];
}

/**
 * Organisational units (role-based, no personal names) — mirrors the
 * public "الهيكل التنظيمي" document without duplicating private details.
 */
function sirte_elc_org_units(): array
{
    return [
        [
            'title' => 'إدارة المركز',
            'description' => 'الإشراف العام على سياسات التعليم الإلكتروني وتنسيق العمل مع عمادات الكليات وإدارة الجامعة.',
            'icon' => 'target',
        ],
        [
            'title' => 'وحدة المنصة التقنية',
            'description' => 'إدارة وتشغيل منصة Moodle، والصيانة التقنية، وربط الأقسام والمقررات الدراسية.',
            'icon' => 'network',
        ],
        [
            'title' => 'وحدة التدريب والدعم الفني',
            'description' => 'تدريب أعضاء هيئة التدريس والطلاب، ومتابعة طلبات الدعم الفني اليومية عبر قنوات التواصل المتاحة.',
            'icon' => 'message',
        ],
        [
            'title' => 'وحدة الجودة والمتابعة',
            'description' => 'متابعة جودة المحتوى الإلكتروني والالتزام باللوائح والسياسات المعتمدة والخطة الإستراتيجية.',
            'icon' => 'shield',
        ],
    ];
}

/**
 * Usage guides grouped by audience. Reuses the same Google Drive resource
 * referenced in sirte_elc_documents() until dedicated per-topic links exist.
 */
function sirte_elc_guides(): array
{
    $folder = 'https://drive.google.com/drive/folders/1AKZO1vAChvwShv8sbYcWTugZCRo16Enc?usp=sharing';

    return [
        [
            'audience' => 'للطلاب',
            'title' => 'البدء باستخدام المنصة',
            'description' => 'كيفية تسجيل الدخول، والوصول إلى المقررات، وتسليم الواجبات والمشاركة في الاختبارات الإلكترونية.',
            'url' => $folder,
            'icon' => 'graduation',
        ],
        [
            'audience' => 'لأعضاء هيئة التدريس',
            'title' => 'إدارة المقررات الدراسية',
            'description' => 'إنشاء المقررات، وإضافة المحتوى والأنشطة، وإدارة الاختبارات وكشوف الدرجات على منصة Moodle.',
            'url' => $folder,
            'icon' => 'book',
        ],
        [
            'audience' => 'لجميع المستخدمين',
            'title' => 'استكشاف الأعطال الشائعة',
            'description' => 'حلول سريعة لمشكلات تسجيل الدخول، ورفع الملفات، وتوافق المتصفحات مع منصة التعليم الإلكتروني.',
            'url' => $folder,
            'icon' => 'shield',
        ],
    ];
}

/**
 * Frequently asked questions shown on the contact/support page.
 */
function sirte_elc_faq(): array
{
    return [
        [
            'question' => 'نسيت كلمة المرور الخاصة بي على المنصة، ماذا أفعل؟',
            'answer' => 'استخدم رابط "استعادة كلمة المرور" في صفحة الدخول بمنصة Moodle، وفي حال استمرار المشكلة تواصل مع الدعم الفني عبر واتساب أو البريد الإلكتروني.',
        ],
        [
            'question' => 'كيف أصل إلى مقررات كليتي؟',
            'answer' => 'من صفحة "الكليات والمقررات" اختر كليتك للانتقال مباشرة إلى تصنيف المقررات الخاص بها على المنصة.',
        ],
        [
            'question' => 'هل تتوفر أدلة استخدام لأعضاء هيئة التدريس؟',
            'answer' => 'نعم، صفحة "أدلة الاستخدام" تضم أدلة منفصلة للطلاب وأعضاء هيئة التدريس تغطي أهم مهام المنصة.',
        ],
        [
            'question' => 'كيف يمكنني الاطلاع على اللوائح والسياسات الرسمية للمركز؟',
            'answer' => 'جميع الوثائق التنظيمية والاستراتيجية متاحة للاطلاع والتحميل من صفحة "الحوكمة والوثائق".',
        ],
    ];
}

