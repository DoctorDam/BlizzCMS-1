    <section class="uk-section uk-section-xsmall" data-uk-height-viewport="expand: true">
      <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-margin-small uk-flex uk-flex-middle" data-uk-grid>
          <div class="uk-width-expand">
            <h4 class="uk-h4 uk-margin-remove"><?= lang('changelogs') ?></h4>
            <ul class="uk-breadcrumb uk-margin-remove">
              <li><a href="<?= site_url('admin') ?>"><?= lang('dashboard') ?></a></li>
              <li><a href="<?= site_url('changelogs/admin') ?>"><?= lang('changelogs') ?></a></li>
            </ul>
          </div>
          <div class="uk-width-auto">
            <a href="<?= site_url('changelogs/admin') ?>" class="uk-button uk-button-primary uk-button-small"><i class="fas fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <?= $template['partials']['alerts'] ?>
        <?= form_open(current_url()) ?>
        <div class="uk-card uk-card-default">
          <div class="uk-card-header">
            <h5 class="uk-h5 uk-text-uppercase uk-text-bold"><i class="fas fa-pen"></i> <?= lang('create_changelog') ?></h5>
          </div>
          <div class="uk-card-body">
            <div class="uk-margin-small">
              <label class="uk-form-label"><?= lang('title') ?></label>
              <div class="uk-form-controls">
                <input class="uk-input uk-width-1-1" type="text" name="title" value="<?= set_value('title') ?>" placeholder="<?= lang('title') ?>">
              </div>
              <?= form_error('title', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
            </div>
            <div class="uk-margin-small">
              <label class="uk-form-label"><?= lang('description') ?></label>
              <div class="uk-form-controls">
                <textarea class="uk-textarea textarea-content" name="description" rows="12"><?= set_value('description') ?></textarea>
              </div>
              <?= form_error('description', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
            </div>
          </div>
        </div>
        <button class="uk-button uk-button-primary uk-margin-small" type="submit"><i class="fas fa-plus"></i> <?= lang('create') ?></button>
        <?= form_close() ?>
      </div>
    </section>