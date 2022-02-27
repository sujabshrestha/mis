<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Model\Admission;
use App\Model\Album;
use App\Model\Callback;
use App\Model\Contact;
use App\Model\CustomField;
use App\Repositories\FrontCms\CmsInterface;
use App\Repositories\FrontCms\CmsRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Model\GobalPost;
use App\Model\GobalPostMeta;
use App\Model\PostType;

class IndexController extends Controller
{
    protected $cms;
    public function __construct(CmsInterface $cms)
    {
        $this->cms = $cms;
    }

    public function home(){
     ;

        $blogs = PostType::with("posts")->where('slug','blog')->first();
        // dd($blogs->posts);

        $sliders = $this->cms->getGlobalPostByID(12);
        foreach ($sliders as $slider){
            $slider->sub_tile = $this->cms->getGlobalPostMetaByKey($slider,'sub-title');
        }
        $productCategories = $this->cms->getGlobalPostByID(8);
        $products = $this->cms->getGlobalPostByID(1, 6);
        foreach ($products as $product){
            $category_meta = $this->cms->getGlobalPostMetaByKey($product,'select-product-category');
            if ($category_meta){
                $product->parent_category =  implode(" ", unserialize($category_meta));
            }
        }

        $offers = $this->cms->getGlobalPostByID(9, 3);
        foreach ($offers as $offer){
            $offer->icon = $this->cms->getGlobalPostMetaByKey($offer,'icon');
        }
        // $blogs = $this->cms->getGlobalPostByID(6, 5);
        $testimonials = $this->cms->getGlobalPostByID(2, 9);
        $teams = $this->cms->getGlobalPostByID(11, 10);
        foreach ($teams as $team){
            $team->degination = $this->cms->getGlobalPostMetaByKey($team,'degination');
        }
        $ourservices = $this->cms->getGlobalPostByID(5,8);
        $ourphilosophies = $this->cms->getGlobalPostByID(6,1);
        $categorytypes =  $this->cms->getGlobalPostByID(12,4);
        $ourpartners =  $this->cms->getGlobalPostByID(16);
        $sliders =  $this->cms->getGlobalPostByID(17);
        $popups =  $this->cms->getGlobalPostByID(13);

        return view('frontEnd.pages.home', compact('sliders', 'productCategories', 'products', 'offers',
        'blogs', 'testimonials', 'teams','ourservices','ourphilosophies','categorytypes','ourpartners','sliders','popups'));
    }

    public function about(){
        // $abouts = $this->cms->getGlobalPostByID(7);
        // return view('frontEnd.pages.about', compact('abouts'));
        $posttype = PostType::where('slug','about-us')->first();
        $about = GobalPost::where('post_type',$posttype->id)->first();
        return view('frontEnd.pages.about',compact('about'));
    }

    public function units($slug){

        $postType = $this->cms->getGlobalPostTypeBySlug($slug);
        $posts = $this->cms->getGlobalPostByPostType($postType);
        return view('frontEnd.pages.unit', compact('postType', 'posts'));


    }

    public function ourteam(){
        $posttype = PostType::where('slug','our-team')->first();
        $ourteams = GobalPost::where('post_type',$posttype->id)->get();
        return view('frontEnd.pages.ourteam',compact('ourteams'));
    }


    public function unitSingle($post_type, $slug){
        $postType = $this->cms->getGlobalPostTypeBySlug($post_type);
        $posts = $this->cms->getGlobalPostByID($postType->id, 10);
        $unit = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.unitsingle', compact( 'unit', 'posts', 'postType'));
    }

    public function product(){

        $productCategories = $this->cms->getGlobalPostByID(8);
        $products = $this->cms->getGlobalPostByID(1);
        foreach ($products as $product){
            $category_meta = $this->cms->getGlobalPostMetaByKey($product,'select-product-category');
            if ($category_meta){
                $product->parent_category =  implode(" ", unserialize($category_meta));
            }
        }
        return view('frontEnd.pages.product', compact('products', 'productCategories'));


    }


    public function productSingle($slug){

        $product = $this->cms->getgobalPostBySlug($slug);
        $productdetails = $this->cms->getGlobalPostMetaByKey($product,'product-details');
        $product->brochure = $this->cms->getGlobalPostMetaByKey($product,'brochure');
        if($productdetails){
            $product->product_details = unserialize($productdetails);
        }
        return view('frontEnd.pages.product-single', compact('product'));
    }


    public function career(){
        $posts = $this->cms->getGlobalPostByID(14,1);
        return view('frontEnd.pages.career', compact('posts'));
    }

    public function blog(){
        $posts = $this->cms->getGlobalPostwithPaginateByID(6, 6);
        return view('frontEnd.pages.blog', compact( 'posts'));
    }

    public function allphilosophy(){
        $ourphilosophies = $this->cms->getGlobalPostByID(6);
        return view('frontEnd.pages.allphilosophy',compact('ourphilosophies'));

    }

    public function blogSingle($slug){
        $blog = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(1,5)->where('slug','!=',$slug)->random(4);
        return view('frontEnd.pages.blogsingle', compact( 'blog', 'posts'));
    }

    public function singlepost($id){
        $post = GobalPost::where('id',$id)->first();
        $posttype = PostType::where('id',$post->post_type)->first();
        return view('frontEnd.pages.singlePost',compact('post'));
    }


    public function testomonialpage(){
        $testimonials = $this->cms->getGlobalPostByID(2,10);

        // $testomonialmeta = GobalPostMeta::where('id',$testomonial->id)->pluck('value','key')->get();

        // $designation = CustomField::where('post_type',$posttype->id)->first();
        return view('frontEnd.pages.testomonial',compact('testimonials'));
    }

    public function albums(){
        $albums = Album::all();
        return view('frontEnd.pages.albums',compact('albums'));
    }

    public function gallery($id){
        $gallery = Album::findOrFail($id);
        return view('frontEnd.pages.gallery',compact('gallery'));
    }

    public function teamMember($id){

        $category = $this->cms->getGlobalPostSingleById($id);
        $member_meta = $this->cms->getGlobalPostMetaByKey($category,'members');
        $member_ids = unserialize($member_meta);
        if ($member_ids){
            $members = $this->cms->getGlobalPostMultipleByIds($member_ids);
            foreach ($members as $member){
                $member->designation = $this->cms->getGlobalPostMetaByKey($member, 'designation');
            }
            $category->members = $members;
        }

        return view('frontEnd.pages.memberPopup', compact('category'));
    }


    public function postModal($id){
        $post = $this->cms->getGlobalPostSingleById($id);
        return view('frontEnd.pages.postPopup', compact('post'));
    }

    public  function contact(){
        return view('frontEnd.pages.contact');
    }

    // public function submitContact(StoreContactRequest $request){
    public function submitContact(Request $request){
        $contact = Contact::create($request->only(['name','email','phone','subject','message']));
        return redirect()->back()->with('success','Thank you for your submission!');
        // if($contact){
        //     Toastr::success('We will contact you soon.','Thank you for your submission!');
        //     return redirect()->back();
        // }else{
        //     Toastr::error('Please Try Again Later','Failed to Submit');
        //     return redirect()->back();
        // }
    }


    public  function loan(){
        return view('frontEnd.pages.loan');
    }

    public function emi(){
        return view('frontEnd.pages.emi_page');
    }


    public function allblogs(){
        $posts = $this->cms->getGlobalPostByID(2);
        return view('frontEnd.pages.allposts',compact('posts'));
    }

    public function offerandseminar(){
        $posts = $this->cms->getGlobalPostByID(11);
        return view('frontEnd.pages.offerseminar',compact('posts'));
    }

    public function seminarsingle($slug){
        $seminar = $this->cms->getgobalPostBySlug($slug);
        $posts = $this->cms->getGlobalPostByID(11)->where('slug','!=',$slug);
        return view('frontEnd.pages.seminarsingle',compact('seminar','posts'));
    }
    public function allservices(){
        $services = $this->cms->getGlobalPostByID(5);
        return view('frontEnd.pages.allservices',compact('services'));

    }

    public function servicessingle($slug){
        $service = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.servicessingle',compact('service'));
    }

    public function philosophySingle($slug){
        $philosophy = $this->cms->getgobalPostBySlug($slug);
        $ourphilosophies = $this->cms->getGlobalPostByID(6)->where('slug','!=',$slug);
        return view('frontEnd.pages.philosophySingle',compact('philosophy','ourphilosophies'));
    }

    public function studysingle($slug){
        $study = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.studysingle',compact('study'));
    }

    public function testpreparationsingle($slug){
        $preparation = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.preparationsingle',compact('preparation'));

    }


    public function admission(){
        $courses = $this->cms->getGlobalPostByID(8);
        return view('frontEnd.pages.admission',compact('courses'));
    }

    public function admissionsubmit(Request $request){
        $admission = Admission::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'phone' => $request->Contact,
            'email' => $request->Email,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'know_about_mis' => $request->know_about_mis,
            'education' => $request->education ?? "",
            'image' => fileupload('upload/admissions/',$request->image) ?? "",
            'address' => $request->address,
            'time' => $request->time,
            'course' => $request->course,
            'message'=> $request->message
        ]);
        if($admission){
            return redirect()->back()->with('success','Added Successfully!!');
        }
        return redirect()->back()->with('error','Failure !!!');
    }


    public function callbacksubmit(Request $request){
        $request->validate([
            'name' => 'required',
            'service' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $callback = Callback::create([
            'name' => $request->name,
            'service' => $request->service,
            'email' => $request->email,
            'phone'=> $request->phone
        ]);
        if($callback){
            return redirect()->back()->with('success','Submitted Successfully!!!');
        }else{
            return redirect()->back()->with('error','Submittion Failure!!!');

        }

    }

}
