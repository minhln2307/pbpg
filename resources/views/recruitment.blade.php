@extends('layouts.header');

@section('content')
	<div class="main-container col2-left-layout">
    <div class="main container">
      <div class="page-title">
        <h1>Tin tuyển dụng</h1>
      </div>
      <div class="row">
        <section class="col-main col-sm-9">
          <ol class="one-page-checkout" id="checkoutSteps">
            
            <li id="opc-billing" class="section allow active">
            
              <div id="checkout-step-billing" class="step a-item" style="">
                <form id="co-billing-form" action="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/red/checkout">
                  <fieldset class="group-select">
                    <ul>
                      <li id="billing-new-address-form">
                        <fieldset>
                          <legend>New Address</legend>
                          <input type="hidden" name="" value="" id="" />
                          <ul>
                
                            <li>
                              <label for="billing:street1">Tiêu đề <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Tiêu đề" name="" id="" value="" class="input-text required-entry" />
                            </li>
                            <li>
                              <label for="billing:street1">Miêu tả <span class="required">*</span></label>
                              <br />
                              <textarea title="Miêu tả" name="" id="" value="" rows="10" class="input-text required-entry" /></textarea>
                            </li>
                            <li>
                              <label for="billing:street1">Địa chỉ <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Địa chỉ" name="" id="" value="" class="input-text required-entry" />
                            </li>
                            <li>
                              <label for="billing:street1">Thời gian <span class="required">*</span></label>
                              <br />
                              <input type="date" title="Thời gian" name="" id="" value="" class="input-text required-entry" />
                            </li>
                            <li>
                              <label for="billing:street1">Lương <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Lương" name="" id="" value="" class="input-text required-entry" />
                            </li>  
                        
                    </ul>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <button type="button" class="button continue"><span>Đăng Tin</span></button>
                  </fieldset>
                </form>
              </div>
            </li>
            
            
          </ol>
        </section>        
      </div>
    </div>
  </div>
@endsection
@section('footer')
@include('layouts.footer')
@endsection