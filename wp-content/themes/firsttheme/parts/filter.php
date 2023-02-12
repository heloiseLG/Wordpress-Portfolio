<a href="<?= get_post_type_archive_link('post') ?>" class="nav-link">Tous</a>
<?php foreach ($projets as $projet) : ?>
    <li class="nav-item">
        <a href="<?= get_term_link($projet) ?>" class="nav-link <?= is_tax('projet', $projet->term_id) ? 'active' : '' ?>"><?= $projet->name ?></a>
    </li>
<?php endforeach; ?>