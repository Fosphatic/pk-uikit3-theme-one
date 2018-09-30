<?php $view->script('registration', 'system/user:app/bundle/registration.js', ['vue', 'uikit-form-password']) ?>

    <form id="user-registration" class="pk-user pk-user-registration uk-form uk-form-stacked uk-width-1-2@m uk-width-1-3@l uk-container-center uk-text-center" v-validator="form" v-cloak @submit.prevent="submit | valid">

        <h1 class="uk-h2 uk-text-center"><?= __('Create an account') ?></h1>

        <div class="uk-alert-danger" v-show="error" uk-alert><a class="uk-alert-close" uk-close></a>{{ error }}</div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-large uk-width-3-4" type="text" name="username" placeholder="<?= __('Username') ?>" v-model="user.username" v-validate:pattern.literal="/^[a-zA-Z0-9._\-]{3,}$/">
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-3-4" v-show="form.username.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Username is invalid.') ?></p>
        </div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-large uk-width-3-4" type="text" name="name" placeholder="<?= __('Name') ?>" v-model="user.name" v-validate:required>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-3-4" v-show="form.name.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Name cannot be blank.') ?></p>
        </div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-large uk-width-3-4" type="email" name="email" placeholder="<?= __('Email') ?>" v-model="user.email" v-validate:email v-validate:required>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-3-4" v-show="form.email.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Email address is invalid.') ?></p>
        </div>

        <div class="uk-margin">
            <div class="uk-form-password uk-width-1-1">
                <input class="uk-input uk-form-width-large uk-width-3-4" type="password" name="password" placeholder="<?= __('Password') ?>" v-model="user.password" v-validate:required v-validate:pattern.literal="/^.{6,}$/">
            </div>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline uk-form-width-large uk-width-3-4" v-show="form.password.invalid" uk-alert><a class="uk-alert-close" uk-close></a><?= __('Password must be 6 characters or longer.') ?></p>
        </div>

        <p class="uk-form-row">
            <button class="uk-button uk-button-primary uk-width-1-3" type="submit"><?= __('Sign up') ?></button>
        </p>

        <p class="uk-text-center"><?= __('Already have an account?') ?> <a href="<?= $view->url('@user/login') ?>"><?= __('Login!') ?></a></p>

    </form>
