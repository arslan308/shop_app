<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-Frame-Options" value="*">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Shopify App made with Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@4.17.1/styles.min.css"
/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

      <div class="cstm-spiner" style="--top-bar-background:#00848e;display:none; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
        <div class="Polaris-ProgressBar Polaris-ProgressBar--sizeSmall"><progress class="Polaris-ProgressBar__Progress" value="40" max="100"></progress>
          <div class="Polaris-ProgressBar__Indicator" style="width: 40%;"><span class="Polaris-ProgressBar__Label">40%</span></div>
        </div>
      </div>

        <main class="p-4">
            <div style="height: 55px;display:none;" class="save_bar">
                <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                  <div class="Polaris-Frame" data-polaris-layer="true">
                    <div class="Polaris-Frame__Skip"><a href="#AppFrameMainContent" class="Polaris-Frame__SkipAnchor">Skip to content</a></div>
                    <div class="Polaris-Frame__ContextualSaveBar Polaris-Frame-CSSAnimation--startFade Polaris-Frame-CSSAnimation--endFade">
                      <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                        <div class="Polaris-Frame-ContextualSaveBar">
                          <div class="Polaris-Frame-ContextualSaveBar__LogoContainer" style="width: 124px;"><img src="https://cdn.shopify.com/s/files/1/0446/6937/files/jaded-pixel-logo-gray.svg?6215648040070010999" alt="" style="width: 124px;"></div>
                          <div class="Polaris-Frame-ContextualSaveBar__Contents">
                            <h2 class="Polaris-Frame-ContextualSaveBar__Message">Unsaved changes</h2>
                            <div class="Polaris-Frame-ContextualSaveBar__ActionContainer">
                              <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--noWrap">
                                <div class="Polaris-Stack__Item ista_discard"><button type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Discard</span></span></button></div>
                                <div class="Polaris-Stack__Item insta_save"><button type="button" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <main class="Polaris-Frame__Main" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                      <div class="Polaris-Frame__Content"></div>
                    </main>
                  </div>
                </div>
              </div>
              <div class="Polaris-Frame-ToastManager" aria-live="polite"></div>
            @yield('content')
            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
                <div class="Polaris-FooterHelp">
                  <div class="Polaris-FooterHelp__Content">
                    <div class="Polaris-FooterHelp__Icon"><span class="Polaris-Icon Polaris-Icon--colorTeal Polaris-Icon--isColored Polaris-Icon--hasBackdrop"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                          <circle cx="10" cy="10" r="9" fill="currentColor"></circle>
                          <path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m0-4a1 1 0 1 0 0 2 1 1 0 1 0 0-2m0-10C8.346 4 7 5.346 7 7a1 1 0 1 0 2 0 1.001 1.001 0 1 1 1.591.808C9.58 8.548 9 9.616 9 10.737V11a1 1 0 1 0 2 0v-.263c0-.653.484-1.105.773-1.317A3.013 3.013 0 0 0 13 7c0-1.654-1.346-3-3-3"></path>
                        </svg></span></div>
                    <div class="Polaris-FooterHelp__Text">Learn more about <a class="Polaris-Link" href="https://help.shopify.com/manual/orders/fulfill-orders" data-polaris-unstyled="true">InstaFeed</a></div>
                  </div>
                </div>
              </div>
        </main>
    </div>
</body>
</html>