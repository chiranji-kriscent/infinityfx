@extends($theme . 'layouts.user')
@section('title', __($page_title))

@section('content')

    <!-- Fund history -->
    <section class="transaction-history profile-setting mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>{{ trans($page_title) }}</h2>
                    </div>
                </div>
            </div>

            <div class="edit-area mb-4">
                <form class="form-row" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="sponsor" class="golden-text">@lang('Receiver ID')</label>
                            <input type="text" class="form-control" id="sponsor" name="sponsor"
                                value="{{ old('sponsor') }}" placeholder="@lang('Receiver ID')" />
                            @error('sponsor')
                                <div class="error text-danger">@lang($message) </div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="amount" class="golden-text">@lang('Amount')</label>
                            <input type="text" id="amount" class="form-control" name="amount"
                                value="{{ old('amount') }}" placeholder="@lang('Enter Amount')"
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" />
                            @error('amount')
                                <div class="error text-danger">@lang($message) </div>
                            @enderror
                        </div>

                        {{-- <div class="col-md-12 mb-4">
                            <label for="" class="golden-text">@lang('Select Wallet')</label>
                            <select class="form-select" name="wallet_type" id="wallet_type"
                                aria-label="Default select example">
                                <option value="" selected disabled class="text-white bg-dark">
                                    {{ trans('Select Wallet') }}</option>
                                <option value="balance" class="text-white bg-dark">{{ trans('Main balance') }}</option>
                                <option value="interest_balance" class="text-white bg-dark">{{ trans('Interest Balance') }}
                                </option>
                            </select>
                            @error('wallet_type')
                                <div class="error text-danger">@lang($message) </div>
                            @enderror
                        </div> --}}

                        <div class="col-md-12 mb-4">
                            <label for="password" class="golden-text">@lang('Enter Password')</label>
                            <input type="password" id="password" class="form-control" name="password"
                                value="{{ old('password') }}" placeholder="@lang('Your Password')" />
                            @error('password')
                                <div class="error text-danger">@lang($message) </div>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="gold-btn">@lang('Submit')</button>
                </form>
            </div>

            <form action="{{ route('user.fund-history.search') }}" method="get">
                <div class="row select-transaction">
                   <div class="col-md-6 col-lg-4">
                      <div class="input-group mb-4">
                         <div class="img">
                            <img src="{{asset($themeTrue.'img/icon/edit.png')}}" alt="@lang('edit img')" />
                         </div>
                         <input
                            type="text"
                            name="name"
                            value="{{@request()->name}}"
                            class="form-control"
                            placeholder="@lang('Type Here')"
                         />
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                      <div class="input-group mb-4">
                         <div class="img">
                            <img src="{{asset($themeTrue.'img/icon/chevron.png')}}" alt="@lang('chevron img')" />
                         </div>
                         <select
                              name="status"
                              class="form-select"
                              id="salutation"
                              aria-label="Default select example"
                         >
                              <option value="">@lang('All Payment')</option>
                              <option value="1"
                                      @if(@request()->status == '1') selected @endif>@lang('Complete Payment')</option>
                              <option value="2"
                                      @if(@request()->status == '2') selected @endif>@lang('Pending Payment')</option>
                              <option value="3"
                                      @if(@request()->status == '3') selected @endif>@lang('Cancel Payment')</option>
                         </select>
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                      <div class="input-group mb-4">
                          <div class="img">
                              <img src="{{asset($themeTrue.'img/icon/chevron.png')}}" alt="@lang('chevron img')" />
                          </div>
                          <input type="text" class="form-control" name="date_time"
                         id="datepicker" placeholder="@lang('Select a date')" autocomplete="off" readonly/>
                      </div>
                   </div>
                   <div class="col-md-6 col-lg-2">
                      <button type="submit" class="gold-btn search-btn mb-4">
                          @lang('Search')
                      </button>
                   </div>
                </div>
             </form>

             <div class="row">
                <div class="col">
                   <div class="table-parent table-responsive">
                      <table class="table table-striped mb-5">
                          <thead>
                              <tr>
                                  <th scope="col">@lang('SR NO')</th>
                                  <th scope="col">@lang('Transaction ID')</th>
                                  <th scope="col">@lang('Amount')</th>
                                  <th scope="col">@lang('Remarks')</th>
                                  {{-- <th scope="col">@lang('Status')</th> --}}
                                  <th scope="col">@lang('Time')</th>
                              </tr>
                          </thead>
                          <tbody>
                                <?php $count = 1; ?>
                                  @forelse ($data as $value)
                                  <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{$value->trx}} </td>
                                    <td>{{$value->amount}} </td>
                                    <td>{{$value->remarks}}</td>
                                    <td>{{ dateTime($value->send_at,'d M Y h:i A')}}</td>
                                </tr>


                                  @empty
                                  <tr class="text-center">
                                      <td colspan="100%">{{__('No Data Found!')}}</td>
                                  </tr>
                                  @endforelse

                          </tbody>
                      </table>

                   </div>
                </div>
             </div>

        </div>
    </section>

    {{-- <section class="transaction-history mt-5 pt-5">
        <div class="container-fluid">
           <div class="row">
              <div class="col">
                 <div class="header-text-full">
                    <h2>{{trans('Fund History')}}</h2>
                 </div>
              </div>
           </div>


        </div>
    </section> --}}



@endsection
