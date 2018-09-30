    <form class="pk-user pk-user-login uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container-center uk-text-center" action="<?= $view->url('@user/authenticate') ?>" method="post">

        <h1 class="uk-h2"><?= __('Sign in to your account') ?></h1>

        <?= $view->render('messages') ?>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-large uk-width-2-3" type="text" name="credentials[username]" value="<?= $this->escape($last_username) ?>" placeholder="<?= __('Username') ?>" required autofocus>
        </div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-large uk-width-2-3" type="password" name="credentials[password]" value="" placeholder="<?= __('Password') ?>" required>
        </div>

        <p class="uk-margin">
            <button class="uk-button uk-button-primary uk-width-1-2 uk-width-2-3" type="submit"><?= __('Sign in') ?></button>
        </p>

        <ul class="uk-flex uk-flex-inline uk-text-small" uk-grid>
            <li>
                <label><input type="checkbox" class="uk-checkbox" name="remember_me"> <?= __('Remember Me') ?></label>
            </li>
            <li class="uk-text-right">
                <a class="uk-link" href="<?= $view->url('@user/resetpassword') ?>"><?= __('Request Password') ?></a>
            </li>
        </ul>

        <?php if ($app->module('system/user')->config('registration') != 'admin') : ?>
        <p class="uk-margin-large-top uk-text-center"><?= __('No account yet?') ?> <a href="<?= $view->url('@user/registration') ?>"><?= __('Sign up now') ?></a></p>
        <?php endif ?>

        <input type="hidden" name="redirect" value="<?= $this->escape($redirect) ?>">
        <?php $view->token()->get() ?>

    </form>
