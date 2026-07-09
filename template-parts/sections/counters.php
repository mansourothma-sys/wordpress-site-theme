<?php
/**
 * Counter strip driven by real, derivable numbers (never invented marketing
 * stats). Uses live counts from theme-data.php.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$faculties_count = count(sirte_elc_faculties());
$documents_count = count(sirte_elc_documents());
$guides_count = count(sirte_elc_guides());
?>
<section class="section counters-section" aria-label="أرقام سريعة عن المركز">
    <div class="container counters-grid">
        <?php sirte_elc_counter_card('graduation', $faculties_count, '+', 'كليات مرتبطة بالمنصة'); ?>
        <?php sirte_elc_counter_card('network', 1, '', 'منصة تعليمية موحدة (Moodle)'); ?>
        <?php sirte_elc_counter_card('shield', $documents_count, '', 'وثائق حوكمة منشورة'); ?>
        <?php sirte_elc_counter_card('book', $guides_count, '+', 'مجموعات أدلة استخدام'); ?>
    </div>
</section>
