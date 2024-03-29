<?php

namespace App\Http\Controllers\Company\Auth;

use Auth;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use Session;
use Image;

use App\Traits\VerifiesUsersTrait;
use App\Models\Industry;
use App\Models\SubSector;
use App\Models\Payment;
use App\Models\Package;
use App\Models\Institution;

class RegisterController extends Controller
{
    use RegistersUsers;
    // use VerifiesUsers;
    use VerifiesUsersTrait;

    // protected $redirectTo = RouteServiceProvider::HOME;

    protected $redirectTo = '/signup-talent';
    protected $userTable = 'companies';
    // protected $redirectIfVerified = '/company/register';
    // protected $redirectAfterVerification = '/company/register';

    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('company.guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    protected function guard()
    {
        return Auth::guard('company');
    }

    public function signupTalent()
    {
        return view('auth.signup_talent');
    }

    public function signupTalentStore(Request $request)
    {
        $this->validate($request, [
            'company_name'  => 'required',
            'name'          => 'required',
            'email'         => 'required|email|unique:companies,email',
            'phone'         => 'required',
            'position_title' => 'required',
        ]);

        $company                    = new Company();
        $company->company_name      = $request->company_name;
        $company->name              = $request->name;
        $company->email             = $request->email;
        $company->phone             = $request->phone;
        $company->position_title    = $request->position_title;
        $company->is_active         = 0;
        $company->verified          = 0;
        $company->save();


        $company->slug = str_slug($company->company_name, '-') . '-' . $company->id;
        $company->update();

        UserVerification::generate($company);
        UserVerification::send($company, 'Company Verification', 'khinzawlwin.mm@gmail.com', 'Lobahn Technology Limited');

        Session::put('verified', 'verified');
        
        return $this->registered($request, $company) ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm(Request $request)
    {
        $company = Company::where('email','=',$request->email)->where('verified', 1)->first();
        $industries = Industry::all();
        $sectors    = [];
        $packages = Package::all();
        $institutions = Institution::all();
        $companies = Company::all();

        return view('auth.register_talent', compact('company','industries','sectors','institutions','packages','companies'));
    }

    public function getSectors($id)
    {
        $sectors =  SubSector::where('industry_id',$id)->get();
        return response()->json(array('sectors'=> $sectors), 200);
    }

    public function register(Request $request)
    {
        // $this->validate($request, [
        //     'user_name'  => 'required',
        //     'password' => 'required|same:confirm_password|min:6',
        // ]);

        $company = Company::find($request->company_id);

        if(isset($request->logo)) {
            $photo = $_FILES['logo'];
            if(!empty($photo['name'])){
                $file_name = $photo['name'].'-'.time().'.'.$request->file('logo')->guessExtension();
                $tmp_file = $photo['tmp_name'];
                $img = Image::make($tmp_file);
                $img->resize(300, 300)->save(public_path('/uploads/company_logo/'.$file_name));
                $img->save(public_path('/uploads/company_logo/'.$file_name));
                $company->company_logo = $file_name;
            }
        }

        $company->user_name = $request->user_name;
        $company->password = bcrypt($request->password);
        $company->website_address = $request->website;
        $company->industry_id = $request->industry_id;
        $company->sub_sector_id = $request->sub_sector_id;
        $company->preferred_school_id = $request->preferred_school;
        $company->target_employer_id = $request->target_employer;
        $company->description = $request->description;
        $company->package_id = $request->package_id;
        $company->payment_id = Payment::where('company_id',$request->company_id)->latest('created_at')->first()->id;
        $company->package_start_date = date('d-m-Y');
        $num_days = Package::where('id',$request->package_id)->first()->package_num_days;
        $company->package_end_date = date('d-m-Y',strtotime('+'.$num_days.' days',strtotime(date('d-m-Y'))));
        $company->is_active = 1;
        $company->save();
        
        /********************** */
        Session::forget('verified');
        
        event(new Registered($company));
        //event(new CompanyRegistered($company));

        Session::flash('status', 'register-success');
        return redirect()->back();
    }

    /*******
     * 
     *  After Registration Success PopUp
     * 
     *******/

    public function registeredDashboard(Request $request)
    {
        if(Company::where('id',$request->company_id)->where('is_active',1)->count()>0)
        {
            $company = Company::where('id',$request->company_id)->first();
            $this->guard()->login($company);
            return redirect('/company-home');
        }
        else{
            return redirect()->back();
        }
    }

    public function registeredListing(Request $request)
    {
        if(Company::where('id',$request->company_id)->where('is_active',1)->count()>0)
        {
            $company = Company::where('id',$request->company_id)->first();
            $this->guard()->login($company);
            return redirect('/company-listing');
        }
        else{
            return redirect()->back();
        }
    }
}
