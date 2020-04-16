 
        @extends('layouts.app')

        @section('content')
        <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
            <div class="Polaris-Layout">
              <div class="Polaris-Layout__Section">
                <div class="Polaris-Card">
                  <div class="Polaris-Card__Header">
                    <h2 class="Polaris-Heading">Welcome <a href="{{ ShopifyApp::shop()->shopify_domain }}">{{ ShopifyApp::shop()->shopify_domain }}</a></h2>
                  </div>
                  <div class="Polaris-Card__Section">
                    {{-- <p>We have new items!</p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div> 
        
          <div style="--top-bar-background:#00848e;margin-top:40px; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
            <form method="post">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                    <div class="Polaris-Labelled__LabelWrapper">
                      <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">InstaFeed Access Token</label></div>
                    </div>
                    <div class="Polaris-Connected">
                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                      <div class="Polaris-TextField"><input value="{{@$shop_detail->insta_token}}" id="PolarisTextField2" class="Polaris-TextField__Input" type="text" aria-describedby="PolarisTextField2HelpText" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="">
                          <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="Polaris-Labelled__HelpText" id="PolarisTextField2HelpText"><span>We’ll use this token  to fetch images.</span></div> --}}
                  </div>
                </div>
                {{-- <div class="Polaris-FormLayout__Item"><button type="submit" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Submit</span></span></button></div> --}}
              </div>
              {{-- <span class="Polaris-VisuallyHidden"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span> --}}
            </form>
          </div>
        
        @if(isset($products->body->products))
        @foreach ($products->body->products as $key => $product)
        {{-- <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
            <div class="Polaris-Page">
              <div class="Polaris-Page-Header Polaris-Page-Header--separator Polaris-Page-Header--hasNavigation Polaris-Page-Header--hasActionMenu Polaris-Page-Header--mobileView">
                <div class="Polaris-Page-Header__MainContent">
                  <div class="Polaris-Page-Header__TitleActionMenuWrapper">
                    <div class="Polaris-Header-Title--hasThumbnail">
                      <div><span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium"><img src="{{ $product->images[0]->src }}" alt="Black leather pet collar" class="Polaris-Thumbnail__Image"></span></div>
                      <div class="Polaris-Header-Title__TitleAndSubtitleWrapper">
                        <div class="Polaris-Header-Title__TitleWithMetadataWrapper">
                          <div class="Polaris-Header-Title">
                            <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">{{ $product->title }}</h1>
                          </div>
                          <div class="Polaris-Header-Title__TitleMetadata"><span class="Polaris-Badge Polaris-Badge--statusSuccess"><span class="Polaris-VisuallyHidden">Success</span><span class="Polaris-Badge__Content">Online</span></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Polaris-Page__Content"> --}}
                {{-- <p>Page content</p> --}}
              {{-- </div>
            </div>
          </div> --}}
        @endforeach 
        @endif
        @endsection
        
        @section('scripts')
            @parent
        
            <script type="text/javascript">
                var AppBridge = window['app-bridge'];
                var actions = AppBridge.actions;
                var TitleBar = actions.TitleBar;
                var Button = actions.Button;
                var Redirect = actions.Redirect;
                var titleBarOptions = {
                    title: 'Welcome',
                };
                var myTitleBar = TitleBar.create(app, titleBarOptions);
            </script>
        @endsection 
            