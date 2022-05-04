<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\ColorCart;
use App\Models\Coupon;
use App\Models\Deliver;
use App\Models\FAQ;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use App\Models\Promo;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    // Home Page
    public function home()
    {
        $promos = Promo::all();
        $products = Product::with(['photo', 'user', 'tags', 'reviews'])
            ->paginate(6);

        $promoToDay = Promo::findOrFail(1)
            ->products()
            ->with(['photo', 'user', 'tags', 'reviews'])
            ->first();

        $promotrends = Promo::findOrFail(7)
            ->products()
            ->with(['photo', 'user', 'tags', 'reviews'])
            ->limit(3)
            ->get();

        $coupon = Coupon::all()
            ->first();

        return view('frontend.home', compact('products', 'promos', 'promoToDay', 'promotrends', 'coupon'));
    }

    //Shop Page
   public function shop(){
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        $products = Product::with(['brand', 'photo', 'user', 'productcategories', 'reviews'])
            ->paginate(6);
        return view('frontend.shop', compact('brands', 'products', 'productcategories'));
    }

    // Product Page
    public function productpage($slug){
        $product = Product::where('slug', $slug)
            ->first();
        $productcategory = $product->productcategories()
            ->get();
        $reviews = $product->reviews()
            ->whereIsActive(1)
            ->with(['user', 'reviewreplies'])
            ->paginate(10);

        // Average Review Rating Calculation
        $reviewRating = $product->reviews()                                         //get the reviews of this product
            ->whereIsActive(1)
            ->where('rating', '!=', null)
            ->with(['user', 'reviewreplies'])
            ->get();

        $sum = 0;
        $count = count($reviewRating);
        if($count != 0){                                                            // when we have reviews...
            foreach ($reviewRating as $reviewStar){
                $reviewStar->rating;
                $sum += $reviewStar->rating;
            }
            $reviewStars = round($sum / $count);                                // calculate average
        }else{
            $reviewStars = 0;
        }

        // Check if Auth User bought this product to give Review
        $userActive = Auth::user();
        if($userActive != null){
            $user = $userActive->orders;                                                    // check for orders auth user
            if($user->isEmpty()){
                $userAllow = 0;
            }else{
                foreach ($user as $userOrder){
                    if($userOrder->orderdetails                                         // Looking for orderdetails from user
                        ->where('product_id', $product->id)                             // with selected product
                        ->isEmpty())
                    {
                        $userAllow = 0;                                                 // Nothing there? Don't show
                    }
                    else
                    {
                        $userAllow = 1;                                             // Something there? Show
                        break;
                    }
                }
            }
        }else{
            $userAllow = 0;
        }

        return view('frontend.productpage', compact('product', 'reviews', 'productcategory', 'reviewStars', 'userAllow'));
    }

    // About page
    public function about(){
        $FAQS = FAQ::all();
        return view('frontend.about', compact('FAQS'));
    }

    // Blog Page
    public function blog(){
        $timeNow = Carbon::now()->toDateString();
        $posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)
            ->latest()
            ->paginate(3);
        return view('frontend.blog', compact('posts'));
    }

    // Single Post Page
    public function post($slug){
        $post = Post::where('slug', $slug)
            ->first();
        return view('frontend.post', compact('post'));
    }

    // Contact Page
    public function contact(){
        return view('frontend.contact');
    }

    // Checkout Page
    public function checkout(){
        return view('frontend.checkout');
    }

    // Shopping Cart
    public function addToCart($id){
        $product = Product::with(['productcategories', 'brand', 'photo','tags'])
            ->where('id', '=', $id)
            ->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    // Wish List
    public function addToList($id){
        $product = Product::with(['productcategories', 'brand', 'photo','tags'])->where('id', '=', $id)->first();
        $oldList = Session::has('list') ? Session::get('list') : null;
        $list = new Cart($oldList);
        $list->add($product, $id);
        Session::put('list', $list);
        return redirect()->back();
    }

    // Wish List
    public function list(){
        if(!Session::has('list')){
            return redirect('/');
        }else{
            $currentList =Session::has('list') ? Session::get('list') : null;
            $list = new Cart($currentList);
            $list = $list->products;
            return view('frontend.wishlist', compact('list'));
        }
    }

    // Wish List
    public function removeItemList($id){
        $oldList = Session::has('list') ? Session::get('list') : null;
        $list = new Wishlist($oldList);
        $list->removeItemList($id);
        Session::put('list', $list);
        return redirect()->back();
    }

}


