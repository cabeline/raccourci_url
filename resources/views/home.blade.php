<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-48.png" sizes="48x48">
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-64.png" sizes="64x64">
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-128.png" sizes="128x128">
        <link rel="apple-touch-icon" sizes="152x152" href="https://tinyurl.com/images/icons/favicon-152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="https://tinyurl.com/images/icons/favicon-167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://tinyurl.com/images/icons/favicon-180.png">
        <link rel="icon" type="image/png" href="https://tinyurl.com/images/icons/favicon-192.png" sizes="192x192">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script type="text/javascript">
            window.Spark = {"cardUpFront":false,"collectsBillingAddress":false,"collectsEuropeanVat":false,"createsAdditionalTeams":true,"csrfToken":"anPEpmWJrpgv13ET56HAg5ivb6rxYjRTc4DaeBgj","currency":"USD","currencyLocale":"en","env":"production","roles":{"admin":"Admin","member":"Collaborator"},"state":null,"stripeKey":"pk_live_51H4yVKFoQollccOglSdqQ9hK0Ux7GcxtldtbJleZP9qMPYdJ3p76bqxEf7rWwXwxgTi1qiYgBOYCNhiNgZvIljCo00pCY5HoQC","cashierPath":"stripe","teamsPrefix":"team","teamsIdentifiedByPath":true,"usesApi":true,"usesStripe":true,"chargesUsersPerSeat":false,"seatName":null,"chargesTeamsPerSeat":false,"teamSeatName":null,"chargesUsersPerTeam":false,"chargesTeamsPerMember":false,"mustVerifyEmail":true,"usesTwoFactorAuth":true,"canBillCustomers":true,"canBillTeams":true,"hasPaidPlans":true,"hasPaidTeamPlans":false,"trialDays":0,"teamTrialDays":0,"defaultRole":"member","locale":"en","locales":{"en":{"name":"English","native":"English","flag":"us"}},"recaptcha_sitekey":"6Lc26-sUAAAAAHzSaCpYwJCwoy5PVUgmiijMKsob","CCPA":false,"GDPR":false,"domains":{"is_base":true,"current":"tinyurl.com","source":null,"available":[{"domain":"tinyurl.com","isPublic":true,"allowForGuests":true,"canSwitchDomain":true,"guestCanUseCustomAlias":true},{"domain":"rotf.lol","isPublic":true,"allowForGuests":false,"canSwitchDomain":true,"guestCanUseCustomAlias":false},{"domain":"tiny.one","isPublic":true,"allowForGuests":false,"canSwitchDomain":true,"guestCanUseCustomAlias":false}]},"authy_enabled":false,"promotion":{"coupon":null,"percent":null},"operationsCosts":{"tinyurl_stats_enable":1,"tinyurl_stats_disable":0}};
        </script>

        <!--my_work -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <div id="tinyurl" v-cloak>
            <keep-alive>
        <router-view></router-view>
    </keep-alive>

        <transition name="fade" mode="out-in">
            <router-view name="modal"></router-view>
        </transition>

        <notifications>
            <template slot="body" slot-scope="{item, close}">
                <div class="vue-notification-template vue-notification"
                     :class="item.type"
                     @click="close"
                     role="alert"
                >
                    <div class="notification-title" v-if="item.title" v-html="item.title"></div>
                    <div class="notification-content" v-html="item.text"></div>
                </div>
            </template>
        </notifications>

        <transition name="fade" mode="out-in">
            <div class="bg_popup" v-cloak v-if="screenLocked"></div>
        </transition>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- my_work -->
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </body>
</html>
