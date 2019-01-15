<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <i class="fa fa-cc-paypal" aria-hidden="true"></i> <?=l('Payment settings')?> 
                </h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-sm-12 mb0">
                        <form action="<?=cn('ajax_update')?>" data-redirect="<?=cn()?>">
                            <input type="hidden" class="form-control" name="id" value="<?=!empty($result)?$result->id:""?>">
                            <b><?=l('Paypal email')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="paypal_email" value="<?=!empty($result)?$result->paypal_email:""?>">
                                </div>
                            </div>
                            <b><?=l('Type')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <select name="sandbox" class="form-control">
                                    <option value="0" <?=(!empty($result) && $result->sandbox == "0")?"selected":""?>>Live</option>
                                    <option value="1" <?=(!empty($result) && $result->sandbox == "1")?"selected":""?>>Sandbox</option>
                                </select>
                            </div>
                            <b><?=l('Currency')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <select name="currency" class="form-control">
                                    <option value="USD" <?=(!empty($result) && $result->currency == "USD")?"selected":""?>>USD</option>
                                    <option value="AUD" <?=(!empty($result) && $result->currency == "AUD")?"selected":""?>>AUD</option>
                                    <option value="CAD" <?=(!empty($result) && $result->currency == "CAD")?"selected":""?>>CAD</option>
                                    <option value="EUR" <?=(!empty($result) && $result->currency == "EUR")?"selected":""?>>EUR</option>
                                    <option value="ILS" <?=(!empty($result) && $result->currency == "ILS")?"selected":""?>>ILS</option>
                                    <option value="NZD" <?=(!empty($result) && $result->currency == "NZD")?"selected":""?>>NZD</option>
                                    <option value="RUB" <?=(!empty($result) && $result->currency == "RUB")?"selected":""?>>RUB</option>
                                    <option value="SGD" <?=(!empty($result) && $result->currency == "SGD")?"selected":""?>>SGD</option>
                                    <option value="SEK" <?=(!empty($result) && $result->currency == "SEK")?"selected":""?>>SEK</option>
                                    <option value="BRL" <?=(!empty($result) && $result->currency == "BRL")?"selected":""?>>BRL</option>
                                </select>
                            </div>
                            <button type="submit" class="btn bg-red waves-effect btnActionUpdate"><?=l('Submit')?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>