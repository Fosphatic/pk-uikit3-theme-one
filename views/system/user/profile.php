<?php $view->script('profile', 'system/user:app/bundle/profile.js', ['vue', 'uikit-form-password']) ?>
<div class="uk-width-large uk-margin uk-align-center">
  <div class="uk-card uk-card-default uk-padding">
    <form id="user-profile" class="pk-user pk-user-profile uk-form uk-form-stacked uk-width-medium-1-2 uk-width-large-1-3 uk-container-center" v-validator="form" @submit.prevent="save | valid">

        <h1 class="uk-h2 uk-text-center">{{ 'Your Profile' | trans }}</h1>

        <div class="uk-margin">
            <input class="uk-width-1-1 uk-input uk-margin-small" type="text" name="name" placeholder="<?= __('Name') ?>" v-model="user.name" v-validate:required>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline" v-show="form.name.invalid" uk-alert><a class="uk-alert-close" uk-close></a>{{ 'Name cannot be blank.' | trans }}</p>
        </div>

        <div class="uk-margin">
            <input class="uk-width-1-1 uk-input uk-margin-small" type="text" name="email" placeholder="<?= __('Email') ?>" v-model="user.email" v-validate:email v-validate:required>
            <p class="uk-alert-danger uk-text-danger uk-flex-inline" v-show="form.email.invalid" uk-alert><a class="uk-alert-close" uk-close></a>{{ 'Invalid Email.' | trans }}</p>
        </div>

        <div class="uk-margin uk-text-center">
            <a href="#" data-uk-toggle="{ target: '.js-password' }">{{ 'Change password' | trans }}</a>
        </div>

        <div class="uk-margin js-password uk-hidden">
            <div class="uk-form-password uk-width-1-1">
                <input class="uk-width-1-1 uk-input uk-margin-small" type="password" value="" placeholder="<?= __('Current Password') ?>" v-model="user.password_old">
                <a href="" class="uk-form-password-toggle" tabindex="-1" data-uk-form-password="{ lblShow: '{{ 'Show' | trans }}', lblHide: '{{ 'Hide' | trans }}' }">{{ 'Show' | trans }}</a>
            </div>
        </div>

        <div class="uk-form-row js-password uk-hidden">
            <div class="uk-form-password uk-width-1-1 uk-text-center">
                <input class="uk-width-1-1 uk-input uk-margin-small" type="password" value="" placeholder="<?= __('New Password') ?>" v-model="user.password_new">
                <a href="" class="uk-form-password-toggle" tabindex="-1" data-uk-form-password="{ lblShow: '{{ 'Show' | trans }}', lblHide: '{{ 'Hide' | trans }}' }">{{ 'Show' | trans }}</a>
            </div>
        </div>

        <p class="uk-margin uk-text-center">
            <button class="uk-button uk-button-primary uk-width-1-3" type="submit">{{ 'Save' | trans }}</button>
        </p>

    </form>
  </div>
</div>
