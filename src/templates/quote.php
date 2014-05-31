<div class="quotebox">
<?php if (!empty($author) || !empty($date)) { ?>
    <div class="decoda-quote-head">
        <?php if (!empty($date)) { ?>
            <span class="decoda-quote-date">
                <?php echo date($dateFormat, is_numeric($date) ? $date : strtotime($date)); ?>
            </span>
        <?php }

        if (!empty($author)) { ?>
            <cite>
                <?php echo $this->getFilter()->message('quoteBy', array(
                    'author' => htmlentities($author, ENT_NOQUOTES, 'UTF-8')
                )); ?>
            </cite>
        <?php } ?>

        <span class="clear"></span>
    </div>
<?php } ?>
    <blockquote class="decoda-quote">
        <div class="decoda-quote-body">
            <?php echo $content; ?>
        </div>
    </blockquote>
</div>