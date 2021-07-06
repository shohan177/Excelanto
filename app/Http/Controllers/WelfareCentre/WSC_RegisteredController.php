<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  WSC_RegisteredController extends Controller
{
    public function meet_greet_request(){
        return view('WelfareCentre.WSC_Registered.meet_greet_request');
    }
    public function jail_deportation_request(){
        return view('WelfareCentre.WSC_Registered.jail_deportation_request');
    }
    public function deadbody_transfer_request(){
        return view('WelfareCentre.WSC_Registered.deadbody_transfer_request');
    }


    public function medical_compensation_request(){
        return view('WelfareCentre.WSC_Registered.medical_compensation_request');
    }
    public function insurance_request(){
        return view('WelfareCentre.WSC_Registered.insurance_request');
    }


    public function issuance_certificate_requests(){
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.issuance_certificate_requests');
    }
    public function certificate_issue_payment(){
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.certificate_issue_payment');
    }
    public function issuance_certificate(){
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.issuance_certificate');
    }
    public function issuance_delivery_status(){
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.issuance_delivery_status');
    }

    public function attestation_certificate_requests(){
        return view('WelfareCentre.WSC_Registered.attestationCertificate.attestation_certificate_requests');
    }
    public function certificate_attestation_payment(){
        return view('WelfareCentre.WSC_Registered.attestationCertificate.certificate_attestation_payment');
    }
    public function attestation_certificate(){
        return view('WelfareCentre.WSC_Registered.attestationCertificate.attestation_certificate');
    }
    public function attestation_delivery_status(){
        return view('WelfareCentre.WSC_Registered.attestationCertificate.attestation_delivery_status');
    }

    public function registration_certificate_requests(){
        return view('WelfareCentre.WSC_Registered.registrationCertificate.registration_certificate_requests');
    }
    public function certificate_registration_payment(){
        return view('WelfareCentre.WSC_Registered.registrationCertificate.certificate_registration_payment');
    }
    public function registration_certificate(){
        return view('WelfareCentre.WSC_Registered.registrationCertificate.registration_certificate');
    }
    public function registration_delivery_status(){
        return view('WelfareCentre.WSC_Registered.registrationCertificate.registration_delivery_status');
    }

    public function charity_request(){
        return view('WelfareCentre.WSC_Registered.charity_request');
    }
    public function adr_request(){
        return view('WelfareCentre.WSC_Registered.adr_request');
    }

    public function legal_by_govt_request(){
        return view('WelfareCentre.WSC_Registered.LegalisationGovt.legal_by_govt_request');
    }
    public function legal_by_govt_payment(){
        return view('WelfareCentre.WSC_Registered.LegalisationGovt.legal_by_govt_payment');
    }
    public function legal_by_govt_paid(){
        return view('WelfareCentre.WSC_Registered.LegalisationGovt.legal_by_govt_paid');
    }
    public function legal_by_govt_delivery(){
        return view('WelfareCentre.WSC_Registered.LegalisationGovt.legal_by_govt_delivery');
    }

    public function legal_regular_request(){
        return view('WelfareCentre.WSC_Registered.Legalisationregular.legal_regular_request');
    }
    public function legal_regular_payment(){
        return view('WelfareCentre.WSC_Registered.Legalisationregular.legal_regular_payment');
    }
    public function legal_regular_paid(){
        return view('WelfareCentre.WSC_Registered.Legalisationregular.legal_regular_paid');
    }
    public function legal_regular_delivery(){
        return view('WelfareCentre.WSC_Registered.Legalisationregular.legal_regular_delivery');
    }

    public function change_emp_request(){
        return view('WelfareCentre.WSC_Registered.LegalisationChange.change_emp_request');
    }
    public function change_emp_payment(){
        return view('WelfareCentre.WSC_Registered.LegalisationChange.change_emp_payment');
    }
    public function change_emp_paid(){
        return view('WelfareCentre.WSC_Registered.LegalisationChange.change_emp_paid');
    }
    public function change_emp_delivery(){
        return view('WelfareCentre.WSC_Registered.LegalisationChange.change_emp_delivery');
    }

    public function change_visa_request(){
        return view('WelfareCentre.WSC_Registered.LegalisationVisaChange.change_visa_request');
    }
    public function change_visa_payment(){
        return view('WelfareCentre.WSC_Registered.LegalisationVisaChange.change_visa_payment');
    }
    public function change_visa_paid(){
        return view('WelfareCentre.WSC_Registered.LegalisationVisaChange.change_visa_paid');
    }
    public function change_visa_delivery(){
        return view('WelfareCentre.WSC_Registered.LegalisationVisaChange.change_visa_delivery');
    }

    public function legal_aid_request(){
        return view('WelfareCentre.WSC_Registered.legal_aid_request');
    }

    public function new_passport_request(){
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_request');
    }
    public function new_passport_payment(){
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_payment');
    }
    public function new_passport_status(){
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_status');
    }
    public function new_passport_delivery(){
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_delivery');
    }

    public function lost_passport_request(){
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_request');
    }
    public function lost_passport_payment(){
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_payment');
    }
    public function lost_passport_status(){
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_status');
    }
    public function lost_passport_delivery(){
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_delivery');
    }

    public function renew_passport_request(){
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_request');
    }
    public function renew_passport_payment(){
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_payment');
    }
    public function renew_passport_status(){
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_status');
    }
    public function renew_passport_delivery(){
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_delivery');
    }


}
