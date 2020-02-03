@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as user!
                    <FORM METHOD="post" ACTION="https://mdepayments.epdq.co.uk/ncol/XXXXX/orderstandard.asp" id=form1 name=form1>
                    	<INPUT type="hidden" NAME="PSPID" value="fill here your PSPID">
                    	<INPUT type="hidden" NAME="ORDERID" value="fill here your REF">
                    	<INPUT type="hidden" NAME="AMOUNT" value="fill here your amount * 100">
                    	<INPUT type="hidden" NAME="CURRENCY" value="fill here your currency">
                    	<INPUT type="hidden" NAME="LANGUAGE" value="fill here your Client language">
                    	<!-- lay out information -->

                    	<INPUT type="hidden" NAME="TITLE" value="fill here your title">

                    	<INPUT type="hidden" NAME="BGCOLOR" value="fill here your background color">
                    	<INPUT type="hidden" NAME="TXTCOLOR" value="fill here your text color">
                    	<INPUT type="hidden" NAME="TBLBGCOLOR" value="fill here your table background color">
                    	<INPUT type="hidden" NAME="TBLTXTCOLOR" value="fill here your table text color">
                    	<INPUT type="hidden" NAME="BUTTONBGCOLOR" value="fill here your background button color">
                    	<INPUT type="hidden" NAME="BUTTONTXTCOLOR" value="fill here your button text color">
                    	<INPUT type="hidden" NAME="FONTTYPE" value="fill here your font">

                    	<INPUT type="hidden" NAME="LOGO" value="fill here your logo file name">
                    	<!-- or dynamic template page -->
                    	<INPUT type="hidden" NAME="TP" value="fill here your template page">
                    	<!-- post-payment redirection -->
                    	<INPUT type="hidden" NAME="ACCEPTURL" VALUE="">
                    	<INPUT type="hidden" NAME="DECLINEURL" VALUE="">
                    	<INPUT type="hidden" NAME="EXCEPTIONURL" VALUE="">
                    	<INPUT type="hidden" NAME="CANCELURL" VALUE="">
                    	<INPUT type="hidden" NAME="BACKURL" VALUE="">
                    	<!-- miscellanous -->
                    	<INPUT type="hidden" NAME="HOMEURL" VALUE="">
                    	<INPUT type="hidden" NAME="CATALOGURL" VALUE="">
                    	<INPUT type="hidden" NAME="CN" value="fill here your Client name">
                    	<INPUT type="hidden" name="EMAIL" value="fill here your Client email">
                    	<INPUT type="hidden" NAME="PM" VALUE="">
                    	<INPUT type="hidden" NAME="BRAND" VALUE="">
                    	<INPUT type="hidden" NAME="OWNERZIP" VALUE="">
                    	<INPUT type="hidden" NAME="OWNERADDRESS" VALUE="">
                    	<INPUT type="hidden" NAME="OWNERADDRESS2" VALUE="">
                    	<INPUT type="hidden" NAME="OWNERADDRESS3" VALUE="">
                    	<INPUT type="hidden" NAME="SHASIGN" value="fill here your signature">
                    	<INPUT type="hidden" NAME="ALIAS" VALUE="">
                    	<INPUT type="hidden" NAME="ALIASUSAGE" VALUE="">
                    	<INPUT type="hidden" NAME="ALIASOPERATION" VALUE="">
                    	<INPUT type="hidden" NAME="COM" VALUE="">
                    	<INPUT type="hidden" NAME="COMPLUS" VALUE="">
                    	<INPUT type="hidden" NAME="PARAMPLUS" VALUE="">
                    	<INPUT type="hidden" NAME="USERID" VALUE="">
                    	<INPUT type="hidden" NAME="CREDITCODE" VALUE="">
                    	<input type="submit" value="<Your button lib" id=submit2 name=submit2>
                    	</form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
