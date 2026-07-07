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
        ['name' => 'كلية الآداب والعلوم زمزم', 'logo' => $logos . '8.png', 'url' => $base . '634'],
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

