

<?php
$title = get_field('title');
$items = get_field('items');
?>

<div id="profit" class="profit__block __container">
    <?php if ($title): ?>
        <h2 class="profit__title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <div class="profit__wrapper">
        <?php if ($items): ?>
            <?php foreach ($items as $item): 
                $subtitle = $item['subtitle'] ?? '';
                $text = $item['text'] ?? '';
                $subitems = $item['subitems'] ?? [];
            ?>
                <div class="profit__item">
                    <?php if ($subtitle): ?>
                        <h3 class="profit__subtitle"><?php echo esc_html($subtitle); ?></h3>
                    <?php endif; ?>
                    <?php if ($text): ?>
                        <p class="profit__text"><?php echo esc_html($text); ?></p>
                    <?php endif; ?>
                    <?php if ($subitems): ?>
                        <?php foreach ($subitems as $subitem):
                            $icon = $subitem['icon'] ?? null;
                            $content = $subitem['content'] ?? '';
                            $icon_url = '';
                            $icon_alt = '';
                            if ($icon) {
                                if (is_array($icon)) {
                                    $icon_url = $icon['url'] ?? '';
                                    $icon_alt = $icon['alt'] ?? '';
                                } elseif (is_numeric($icon)) {
                                    $icon_url = wp_get_attachment_image_url($icon, 'full');
                                    $icon_alt = get_post_meta($icon, '_wp_attachment_image_alt', true);
                                } elseif (is_string($icon)) {
                                    $icon_url = $icon;
                                }
                            }
                        ?>
                            <div class="profit__subitem">
                                <?php if ($icon_url): ?>
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>" />
                                <?php endif; ?>
                                <?php echo esc_html($content); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>