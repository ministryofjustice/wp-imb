<div <?php post_class('card card-default'); ?> id="job-<?= get_the_ID(); ?>">
    <div class="card-heading" role="tab" id="heading<?php the_ID(); ?>">
        <h3 class="card-title entry-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
    </div>
    <div id="collapse<?php the_ID(); ?>" class="card-collapse collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordion">
        <div class="card-body">
            <?php $description = get_post_meta( $post->ID, 'description', true ); ?>
            <?php if(!empty($description)): ?>
                <p><?= $description; ?></p>
            <?php endif; ?>

            <?php $time = get_post_meta( $post->ID, 'time-commitment', true ); ?>
            <?php if(!empty($time)): ?>
                <p><strong>Time commitment per month:</strong> <?= $time ?></p>
            <?php endif; ?>

            <?php $rcr = get_post_meta( $post->ID, 'rcr', true ); ?>
            <?php if(!empty($rcr)): ?>
                <p><strong>Recruitment Campaign Reference (to be quoted on all correspondence and forms):</strong> <?= $rcr ?></p>
            <?php endif; ?>

            <?php $date = get_post_meta( $post->ID, 'closing-date', true ); ?>
            <?php if(!empty($date)): ?>
                <?php $date = DateTime::createFromFormat("Y-m-d", $date); ?>
                <p><strong>Closing date for completed returned applications:</strong> <?= date_format($date, 'd/m/Y') ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
