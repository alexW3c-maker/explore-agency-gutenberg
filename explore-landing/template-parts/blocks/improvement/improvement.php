<?php
$first_focused = get_field('first_focused');
$google_star = get_field('google_star');
$google_count = get_field('google_count');
$first_title = get_field('first_title');
$first_text = get_field('first_text');
$second_text = get_field('second_text');
$second_images = get_field('second_images');
$phone_number = get_field('phone_number');
$button_text = get_field('button_text');
$min_ad_spend = get_field('min_ad_spend');
$services = get_field('services');
?>

<div id="improvement" class="improvement__block __container">
    <div class="top-row">
        <div class="first__block">
            <div class="first__head">
                <div class="first__focused --icon-home"><?php echo esc_html($first_focused); ?></div>
                <div class="first__google">
                    <?php if ($google_star): ?>
                        <img src="<?php echo esc_url($google_star['url']); ?>" alt="<?php echo esc_attr($google_star['alt']); ?>" />
                    <?php endif; ?>
                    <span><?php echo esc_html($google_count); ?></span>
                </div>
            </div>
            <div class="first__body">
                <h1 class="first__title"><?php echo esc_html($first_title); ?></h1>
                <p class="first__text"><?php echo esc_html($first_text); ?></p>
            </div>
        </div>
        <div class="second__block">
            <p class="second__text"><?php echo wp_kses_post($second_text); ?></p>
            <?php if ($second_images): ?>
                <?php foreach ($second_images as $image): ?>
                    <img class="second__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="third__block">
        <a href="tel:<?php echo esc_attr($phone_number); ?>" class="header__button third__link" data-fls-button data-fls-ripple>
            <?php echo esc_html($button_text); ?>
        </a>
        <p class="third__text"><?php echo esc_html($min_ad_spend); ?></p>
    </div>
    <div class="four__block">
    <?php if (!empty($services)) : ?>
    <?php foreach ($services as $service) : 
        $image = $service['image'] ?? null;
        $text = $service['text'] ?? '';
        ?>
        <div class="four__item">
            <div class="four__inner">
                <?php if ($image) : ?>
                    <img class="four__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="four__text"><?php echo esc_html($text); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
    </div>
</div>