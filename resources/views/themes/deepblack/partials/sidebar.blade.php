<div id="sidebar">
    <a class="navbar-brand" href="{{route('home')}}">{{config('basic.site_title')}}</a>
    <ul class="pb-4 pt-3" style="background: rgb(224, 221, 221)">
       <!-- list item -->
       {{-- <li class="{{menuActive('user.home')}}">
          <a href="{{route('user.home')}}" class="sidebar-link">
            <i style="color: #802A9E;font-size:1.5rem" class="fas fa-th-large"></i>&nbsp; @lang('Dashboard')
          </a>
       </li>
        <li class="{{menuActive(['user.invest-history'])}}">
          <a href="{{route('user.invest-history')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/growth-graph.png')}}" alt="@lang('invest history')"/>@lang('invest')
          </a>
        </li>
       <li class="{{menuActive(['user.addFund', 'user.addFund.confirm'])}}">
          <a href="{{route('user.addFund')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/money-bag.png')}}" alt="@lang('Add Fund')"/>@lang('Add Fund')
          </a>
       </li>
       <li class="{{menuActive(['user.fund-history', 'user.fund-history.search'])}}">
          <a href="{{route('user.fund-history')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/fund.png')}}" alt="@lang('Fund History')"/>@lang('Fund History')
          </a>
       </li>
       <li class="{{menuActive(['user.money-transfer'])}}">
          <a href="{{route('user.money-transfer')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/money-transfer.png')}}" alt="@lang('transfer')"/>@lang('transfer')
          </a>
       </li>
       <li class="{{menuActive(['user.transaction', 'user.transaction.search'])}}">
          <a href="{{route('user.transaction')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/transaction.png')}}" alt="@lang('transaction')"/>@lang('transaction')
          </a>
       </li>
       <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
          <a href="{{route('user.payout.money')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/payout.png')}}" alt="@lang('payout')"/>@lang('payout')
          </a>
       </li>
       <li class="{{menuActive(['user.payout.history','user.payout.history.search'])}}">
          <a href="{{route('user.payout.history')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/pay-history.png')}}" alt="@lang('payout history')"/>@lang('payout history')
          </a>
       </li>
       <li class="{{menuActive(['user.referral'])}}">
          <a href="{{route('user.referral')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/refferal.png')}}" alt="@lang('my referral')"/>@lang('my referral')
          </a>
       </li>
       <li class="{{menuActive(['user.referral.bonus', 'user.referral.bonus.search'])}}">
          <a href="{{route('user.referral.bonus')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/bonus.png')}}" alt="@lang('referral bonus')"/>@lang('referral bonus')
          </a>
       </li>
       <li class="{{menuActive(['user.profile'])}}">
          <a href="{{route('user.profile')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/setting.png')}}" alt="@lang('profile settings')"/>@lang('profile settings')
          </a>
       </li>
       <li class="{{menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])}}">
          <a href="{{route('user.ticket.list')}}" class="sidebar-link">
             <img src="{{asset($themeTrue.'img/icon/support.png')}}" alt="@lang('support ticket')"/>@lang('support ticket')
          </a>
       </li> --}}

       <li class="{{menuActive('user.home')}}">
        <a href="{{route('user.home')}}" class="sidebar-link">
          <i style="color: #802A9E;font-size:1.5rem" class="fas fa-th-large"></i>&nbsp; @lang('Dashboard')
        </a>
     </li>
     <li class="{{menuActive(['user.invest-history'])}}">
        <a href="{{route('user.invest-history')}}" class="sidebar-link">
           <img src="{{asset($themeTrue.'img/icon/growth-graph.png')}}" alt="@lang('invest history')"/>@lang('invest')
        </a>
      </li>
      <li class="{{menuActive(['user.money-transfer'])}}">
        <a href="{{route('user.money-transfer')}}" class="sidebar-link">
            <i style="color: #802A9E;font-size:1.5rem" class="fas fa-wallet"></i>&nbsp; @lang('wallet')
        </a>
     </li>
     <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
        <a href="{{route('user.payout.money')}}" class="sidebar-link">
           <img src="{{asset($themeTrue.'img/icon/payout.png')}}" alt="@lang('payout')"/>@lang('Withdrawal')
        </a>
     </li>
     <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
        <a style="cursor: pointer" onclick="show()" class="sidebar-link">
            <i style="color: #802A9E;font-size:1.5rem" class="fa fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;&nbsp; @lang('Income')
        </a>
     </li>
     <div id="show" style="display: none">
        <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
            <a href="{{route('user.referral')}}" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-user-plus"></i> &nbsp; @lang('joining referral')
            </a>
         </li>
         <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
            <a href="#0" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-user"></i>&nbsp; @lang('team bonus')
            </a>
         </li>
         <li class="{{menuActive(['user.payout.money','user.payout.preview'])}}">
            <a href="#0" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-plus"></i>&nbsp; @lang('daily profit')
            </a>
         </li>
     </div>
     <li class="{{menuActive(['user.profile'])}}">
        <a href="{{route('user.profile')}}" class="sidebar-link">
           <img src="{{asset($themeTrue.'img/icon/setting.png')}}" alt="@lang('profile settings')"/>@lang('profile settings')
        </a>
     </li>
     <li class="{{menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])}}">
        <a href="{{route('user.ticket.list')}}" class="sidebar-link">
           <img src="{{asset($themeTrue.'img/icon/support.png')}}" alt="@lang('support ticket')"/>@lang('support ticket')
        </a>
     </li>
    </ul>
 </div>
 <script>
    function show(){
        var check = document.getElementById("show").style.display;
        if(check == 'block'){
            document.getElementById("show").style.display = "none"
        }else{
            document.getElementById("show").style.display = "block"
        }

    }
 </script>


