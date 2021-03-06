<?php if ($Action[0] == 'like') {

    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl
    $EntryTitle = $Data["EntryTitle"];
    $EntryUrl = $Data["EntryUrl"];
    $EntryAuthor = $Data["EntryAuthor"];
    $EntryImageUrl = $Data["EntryImageUrl"];

    ?>


    <article class="Event <?php echo 'Event--' . $Domain; ?>">

        <header class="Event-header">

                <span class="Event-header__icon">
                    <i class="icon <?php echo 'icon--' . $Domain; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthDomainIcon; ?> <?php echo $heightDomainIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Domain; ?>"></use>
                        </svg>
                    </i>
                    <i class="icon <?php echo 'icon--' . $Action[0]; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthActionIcon; ?> <?php echo $heightActionIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Action[0]; ?>"></use>
                        </svg>
                    </i>
                </span>

            <a class="Event-header__time" href="<?php echo $EntryUrl ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
            </a>

            <p class="Event-header__text">
                <strong><?php echo $EntryAuthor ?></strong>'in tasarımını beğendi;
            </p>

        </header>

        <div class="Event-body">

            <figure>
                <img src="<?php echo $EntryImageUrl ?>" alt="<?php echo $EntryTitle ?>"/>
                <figcaption><?php echo $EntryTitle ?></figcaption>
            </figure>

        </div>

    </article>


<?php } ?>
