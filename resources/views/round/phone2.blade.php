<style type="text/css">
.pic2 {
  height:75px;
  width:143px;
  background-image: url('/images2/trust/comodo-on.jpg');
  background-repeat:no-repeat;
}
.pic2:hover {
  background-image: url('/images2/trust/comodo-off.jpg');
}
</style>
<section class="phonesection">
    <div id="phone">
        <div class="phone-form">
                <div class="form-field">
                    <label class="pb-2">
                        What loan amount would you like?
                    </label>
                    <input type="hidden" name="sum" value="800">
                    <div id="top-slider">
                        <div class="background" id="top-slider-background">
                            <div class="scale" id="scale">
                                <div class="background-scale"></div>
                            </div>
                        </div>
                        <div class="button-scale" id="button-scale">
                            <div id="top-slider-button">
                                <img src="/images2/Phone/cursor.png" alt="Mega Cash Bucks Wise Payday Loans Online in Canada" >
                            </div>
                        </div>
                        <div class="white-block" id="scale-block">
                            <div class="white-block-background" id="white-block-background"></div>
                        </div>
                        <div class="amount-block">
                            <div class="dollar"><img src="/images2/Phone/dollar.png" alt="Mega Cash Bucks Wise Payday Loans Online in Canada"></div>
                            <div id="amount" class="amount">800</div>
                        </div>
                        <div class="buttons">
                            <button class="button small-button reduce-button" id="reduceSum">
                                <img src="/images2/Phone//minus-solid.svg" alt="Mega Cash Bucks Wise Payday Loans Online in Canada">
                            </button>
                            <button class="button small-button add-button"  id="addSum">
                                <img src="/images2/Phone/plus-solid.svg" alt="Mega Cash Bucks Wise Payday Loans Online in Canada">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-field info-field">
                    <label class="pb-2">
                        Want to know how many repayments?
                    </label>
                    <div class="terms-slider" id="terms-slider">
                        <div class="items">
                            <div class="item active" data-value="1" id="item1">
                            </div>
                            <div class="item" data-value="2" id="item2">
                            </div>
                            <div class="item" data-value="3" id="item3">
                            </div>

                            <div class="progress-line" id="progress-line">
                                <div class="flag" id="flag">1</div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="item-info" id="item2-info">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="Mega Cash Bucks Wise Payday Loans Online in Canada"></div>
                                Two payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.
                            </div>
                            <div class="item-info" id="item3-info">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="Mega Cash Bucks Wise Payday Loans Online in Canada"></div>
                                Three payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="term" value="1">
                </div>
                <div class="form-field pb-3">
                    <label class="pb-2">
                        Tell us what province you live in.
                    </label>
                    <div class="selector" id="selector" style="width: 92%; z-index:500">
                        <div class="text" id="selector-result">British Columbia</div>
                        <div class="menu transition visible" id="dropdown">
                            <div class="selector-item active selected" data-value="alberta">Alberta</div>
                            <div class="selector-item" data-value="british-columbia">British Columbia</div>
                            <div class="selector-item" data-value="ontario">Ontario</div>
                            <div class="selector-item" data-value="new-brunswick">New Brunswick</div>
                            <div class="selector-item" data-value="saskatchewan">Saskatchewan</div>
                            <div class="selector-item" data-value="manitoba">Manitoba</div>
                            <div class="selector-item" data-value="quebec">Quebec</div>
                            <div class="selector-item" data-value="newfoundland-and-labrador">Newfoundland and Labrador</div>
                        </div>
                    </div>
                    <input type="hidden" name="province" value="Alberta">
                </div>
                <span class="buttonph tracking-tsign" id="apply-now">
                    <a href="{{ Session::get('purl') ?? $corpregister }}">APPLY NOW FOR FAST APPROVAL</a>
                </span>

              <center>  <br>  <div class="col-sm pic2" style="position: relative; z-index:-1">
              </div></center>

        </div>
    </div>
</section>
<div class="clearfix"></div>